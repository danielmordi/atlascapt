<?php

namespace App\Http\Livewire\User\Trades;

use Livewire\Component;

class LiveTrade extends Component
{
    public $duration = 60; // Default 60 seconds
    public $activeTrades = [];
    public $market = 'BTC-USD';
    public $currentPrice = 0;
    public $amount = 0;
    public $type = 'buy'; // 'buy' or 'sell'
    public $orderStatus = '';

    public $markets = [
        // Crypto
        'BTC-USD',
        'ETH-USD',
        'BNB-USD',
        'SOL-USD',
        'XRP-USD',
        'ADA-USD',
        'DOGE-USD',
        'DOT-USD',
        'LTC-USD',
        'LINK-USD',
        // Stocks
        'AAPL',
        'TSLA',
        'MSFT',
        'GOOGL',
        'AMZN',
        'NVDA',
        'META',
        'NFLX',
        'AMD',
        'BABA',
        'PYPL',
        // Forex
        'EURUSD=X',
        'GBPUSD=X',
        'JPY=X',
        'AUDUSD=X',
    ];

    public $durations = [
        60 => '1 Minute',
        120 => '2 Minutes',
        300 => '5 Minutes',
        600 => '10 Minutes',
    ];

    public function mount()
    {
        $this->activeTrades = session()->get('active_trades', []);
    }

    public function fetchPrice()
    {
        $cacheKey = "price_{$this->market}";
        $cachedPrice = \Illuminate\Support\Facades\Cache::get($cacheKey);

        if ($cachedPrice) {
            $this->currentPrice = $cachedPrice;
        } else {
            try {
                // Simplified fetching using Yahoo Finance for both stocks and crypto
                $response = \Illuminate\Support\Facades\Http::withOptions(['verify' => false])
                    ->timeout(5)
                    ->get("https://query1.finance.yahoo.com/v8/finance/chart/{$this->market}");

                if ($response->successful()) {
                    $data = $response->json();
                    if (isset($data['chart']['result'][0]['meta']['regularMarketPrice'])) {
                        $this->currentPrice = number_format($data['chart']['result'][0]['meta']['regularMarketPrice'], 2, '.', '');
                        \Illuminate\Support\Facades\Cache::put($cacheKey, $this->currentPrice, 30);
                    }
                }
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error("Price fetch error for {$this->market}: " . $e->getMessage());
            }
        }

        $this->checkExpiredTrades();
    }

    public function checkExpiredTrades()
    {
        $this->activeTrades = session()->get('active_trades', []);
        $now = time();
        $updated = false;

        foreach ($this->activeTrades as $key => $trade) {
            if ($trade['status'] == 'open' && $trade['expiry'] <= $now) {
                $this->finalizeTrade($key);
                $updated = true;
            }
        }

        if ($updated) {
            $this->activeTrades = session()->get('active_trades', []);
        }
    }

    public function finalizeTrade($index)
    {
        $trades = session()->get('active_trades', []);
        if (!isset($trades[$index]))
            return;

        $trade = $trades[$index];
        $user = auth()->user();

        // Check current price of the asset in the trade
        $currentPrice = $this->getAssetPrice($trade['market']);
        if ($currentPrice == 0)
            return; // Skip if price fetch failed during expiry

        $win = false;

        if ($trade['type'] == 'buy') {
            if ($currentPrice > $trade['entry_price'])
                $win = true;
        } else {
            if ($currentPrice < $trade['entry_price'])
                $win = true;
        }

        if ($win) {
            $payout = $trade['amount'] * 1.85; // 185% payout (original + 85% profit)
            $user->profit += ($trade['amount'] * 0.85); // Add only the profit part back
            $user->deposit += $trade['amount']; // Return the original stake to deposit
            $status = 'won';
            $desc = "Won {$trade['market']} trade: Entry {$trade['entry_price']}, Exit {$currentPrice}";
        } else {
            $status = 'lost';
            $desc = "Lost {$trade['market']} trade: Entry {$trade['entry_price']}, Exit {$currentPrice}";
        }

        $user->save();

        \App\Models\TransactionHistory::create([
            'user_id' => $user->id,
            'type' => 'Live Trade result',
            'description' => $desc,
            'amount' => $win ? ($trade['amount'] * 0.85) : (-$trade['amount']),
            'status' => 'completed'
        ]);

        $trade['status'] = $status;
        $trade['exit_price'] = $currentPrice;
        $trades[$index] = $trade;

        session()->put('active_trades', $trades);
    }

    private function getAssetPrice($symbol)
    {
        try {
            $response = \Illuminate\Support\Facades\Http::withOptions(['verify' => false])
                ->timeout(5)
                ->get("https://query1.finance.yahoo.com/v8/finance/chart/{$symbol}");

            if ($response->successful()) {
                $data = $response->json();
                return $data['chart']['result'][0]['meta']['regularMarketPrice'] ?? 0;
            }
            return 0;
        } catch (\Exception $e) {
            return 0;
        }
    }

    public function updatedMarket()
    {
        $this->fetchPrice();
        $this->dispatchBrowserEvent('marketUpdated');
    }

    public function trade($type)
    {
        \Illuminate\Support\Facades\Log::info("Trade initiated: Type=$type, Market={$this->market}, Amount={$this->amount}");

        $this->type = $type;
        $user = auth()->user();

        if ($this->amount <= 0) {
            $this->orderStatus = 'Invalid amount';
            \Illuminate\Support\Facades\Log::warning("Trade failed: Invalid amount");
            return;
        }

        if ($this->currentPrice <= 0) {
            $this->fetchPrice(); // Try one more time
            if ($this->currentPrice <= 0) {
                $this->orderStatus = 'Could not fetch current market price. Please try again.';
                \Illuminate\Support\Facades\Log::error("Trade failed: Current price is 0");
                return;
            }
        }

        $totalAvailable = $user->deposit + $user->profit;
        if ($totalAvailable < $this->amount) {
            $this->orderStatus = 'Insufficient balance (Deposit + Profit)';
            \Illuminate\Support\Facades\Log::warning("Trade failed: Insufficient balance. Available=$totalAvailable, Required={$this->amount}");
            return;
        }

        // Deduct from profit first, then deposit
        $remainingToDeduct = $this->amount;
        if ($user->profit >= $remainingToDeduct) {
            $user->profit -= $remainingToDeduct;
            $remainingToDeduct = 0;
        } else {
            $remainingToDeduct -= $user->profit;
            $user->profit = 0;
            $user->deposit -= $remainingToDeduct;
        }

        $user->save();

        // Create active trade in session
        $trades = session()->get('active_trades', []);
        $newTrade = [
            'market' => $this->market,
            'type' => $type,
            'amount' => $this->amount,
            'entry_price' => $this->currentPrice,
            'expiry' => time() + $this->duration,
            'duration' => $this->duration,
            'status' => 'open',
            'created_at' => time(),
        ];
        array_unshift($trades, $newTrade);
        // Keep only last 10 trades in session
        $trades = array_slice($trades, 0, 10);
        session()->put('active_trades', $trades);
        $this->activeTrades = $trades;

        $this->orderStatus = 'Trade opened successfully for ' . $this->durations[$this->duration] . '!';
        \Illuminate\Support\Facades\Log::info("Trade opened successfully: " . json_encode($newTrade));
        $this->amount = 0;
    }

    public function render()
    {
        return view('livewire.user.trades.live-trade');
    }
}
