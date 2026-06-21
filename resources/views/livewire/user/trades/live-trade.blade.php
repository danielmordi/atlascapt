<div class="card custom-card overflow-hidden" wire:poll.3000ms="fetchPrice" wire:init="fetchPrice"
    style="border-radius: 16px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
    <!-- Header Section: Premium Dark Style for Market Info -->
    <div class="card-header border-0 pb-0" style="background: linear-gradient(135deg, #1a1e21 0%, #2c343a 100%);">
        <div class="d-flex w-100 align-items-center justify-content-between p-2">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-md bg-white-transparent me-3"
                    style="border-radius: 12px; background: rgba(255,255,255,0.1); backdrop-filter: blur(5px);">
                    <i
                        class="bx {{ strpos($market, '-USD') !== false ? 'bx-bitcoin' : 'bx-chart' }} fs-20 text-white"></i>
                </div>
                <div>
                    <div class="d-flex align-items-center gap-1 mb-0">
                        <select wire:model="market"
                            class="form-select form-select-sm bg-transparent border-0 p-0 text-white fw-bold fs-16"
                            style="cursor: pointer; focus: none; box-shadow: none; width: auto !important;">
                            @foreach($markets as $m)
                                <option value="{{ $m }}" class="text-dark">{{ $m }}</option>
                            @endforeach
                        </select>
                        <i class="bx bx-chevron-down text-white-50 fs-12"></i>
                    </div>
                    <span class="text-white-50 fs-11">Tap to change market</span>
                </div>
            </div>
            <div class="text-end">
                <span class="d-block text-white-50 fs-11 text-uppercase fw-semibold mb-1">Live Price</span>
                <h4 class="fw-bold mb-0 text-white" wire:loading.class="opacity-50" wire:target="fetchPrice">
                    ${{ number_format($currentPrice, 2) }}
                </h4>
            </div>
        </div>
    </div>

    <div class="card-body p-0">
        <!-- Balance Bar -->
        <div class="px-3 py-2 bg-light d-flex justify-content-between align-items-center">
            <span class="fs-12 text-muted fw-medium">Available:
                {{ currency_converter(auth()->user()->deposit + auth()->user()->profit) }}</span>
            <span
                class="badge {{ $currentPrice > 0 ? 'bg-success-transparent text-success' : 'bg-secondary-transparent text-secondary' }} fs-10">
                <i class="bx bx-radio-circle-marked me-1"></i> LIVE MARKET
            </span>
        </div>

        <!-- Chart Section: Responsive Height -->
        <div class="chart-container-wrapper p-2" wire:ignore style="background: #fff; position: relative;">
            <div id="tradingview_basic" style="height: 350px;"></div>
            <div class="chart-overlay-info p-2 d-none d-md-block"
                style="position: absolute; top: 10px; left: 10px; z-index: 1;">
                <!-- Optional overlay info -->
            </div>
        </div>

        <!-- Trade Controls: Optimized for Thumb Access -->
        <div class="trade-controls-section p-3 border-top bg-white">
            <div class="row g-2 mb-3">
                <div class="col-6">
                    <label class="form-label fs-11 text-uppercase text-muted fw-bold mb-1">Duration</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text bg-light border-0"><i class="bx bx-time fs-14"></i></span>
                        <select wire:model="duration" class="form-select bg-light border-0 fw-semibold">
                            @foreach($durations as $val => $label)
                                <option value="{{ $val }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label fs-11 text-uppercase text-muted fw-bold mb-1">Amount (USD)</label>
                    <div class="input-group input-group-sm">
                        <span class="input-group-text bg-light border-0">$</span>
                        <input type="number" wire:model="amount" class="form-control bg-light border-0 fw-semibold"
                            placeholder="0.00" wire:loading.attr="disabled" wire:target="trade">
                    </div>
                </div>
            </div>

            @if($orderStatus)
                <div class="alert alert-{{ strpos($orderStatus, 'successfully') !== false ? 'success' : 'danger' }} alert-dismissible fade show border-0 shadow-sm mb-3 py-2 px-3"
                    role="alert" style="border-radius: 10px; font-size: 13px;">
                    {{ $orderStatus }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                        wire:click="$set('orderStatus', '')" style="padding: 0.8rem 1rem;"></button>
                </div>
            @endif

            <div class="row g-2">
                <div class="col-6">
                    <button wire:click="trade('buy')" class="btn btn-success w-100 py-3 shadow-success-sm border-0"
                        style="border-radius: 12px; transition: all 0.3s;" wire:loading.attr="disabled"
                        wire:target="trade">
                        <span wire:loading.remove wire:target="trade('buy')">
                            <i class="bx bx-upvote me-1"></i> BUY
                        </span>
                        <span wire:loading wire:target="trade('buy')">
                            <span class="spinner-border spinner-border-sm" role="status"></span>
                        </span>
                    </button>
                </div>
                <div class="col-6">
                    <button wire:click="trade('sell')" class="btn btn-danger w-100 py-3 shadow-danger-sm border-0"
                        style="border-radius: 12px; transition: all 0.3s;" wire:loading.attr="disabled"
                        wire:target="trade">
                        <span wire:loading.remove wire:target="trade('sell')">
                            <i class="bx bx-downvote me-1"></i> SELL
                        </span>
                        <span wire:loading wire:target="trade('sell')">
                            <span class="spinner-border spinner-border-sm" role="status"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <!-- History Section: Clear Tracking -->
        <div class="trade-history-section border-top">
            <div class="p-3 d-flex justify-content-between align-items-center">
                <h6 class="fw-bold mb-0">Recent Trades</h6>
                <span class="fs-11 text-muted">{{ count($activeTrades) }} records</span>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless align-middle mb-0">
                    <thead class="bg-light">
                        <tr class="fs-11 text-uppercase text-muted fw-bold">
                            <th class="ps-3 border-0">Asset</th>
                            <th class="border-0">Entry/Exit</th>
                            <th class="text-end pe-3 border-0">Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($activeTrades as $index => $trade)
                            <tr style="border-bottom: 1px solid rgba(0,0,0,0.03);">
                                <td class="ps-3">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2 rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 32px; height: 32px; background: {{ $trade['type'] == 'buy' ? 'rgba(34, 197, 94, 0.1)' : 'rgba(239, 68, 68, 0.1)' }}; color: {{ $trade['type'] == 'buy' ? '#22c55e' : '#ef4444' }};">
                                            <i
                                                class="bx bx-{{ $trade['type'] == 'buy' ? 'up' : 'down' }}-arrow-alt fs-20"></i>
                                        </div>
                                        <div>
                                            <span class="d-block fw-bold fs-13">{{ $trade['market'] }}</span>
                                            <small class="text-muted fs-11">{{ currency_converter($trade['amount']) }} •
                                                {{ $trade['duration'] ?? 60 }}s</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fs-12">
                                        <div class="text-muted"><span class="fw-medium">In:</span>
                                            ${{ number_format($trade['entry_price'], 2) }}</div>
                                        @if($trade['status'] != 'open')
                                            <div class="fw-bold"><span class="fw-medium text-muted">Out:</span>
                                                ${{ number_format($trade['exit_price'], 2) }}</div>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-end pe-3">
                                    @if($trade['status'] == 'open')
                                        <span
                                            class="badge rounded-pill bg-warning-transparent text-warning h-blink py-1 px-2 fw-semibold fs-11"
                                            style="letter-spacing: 0.5px;">
                                            <i class="bx bx-time-five me-1"></i>{{ max(0, $trade['expiry'] - time()) }}s
                                        </span>
                                    @else
                                        <div class="d-flex flex-column align-items-end">
                                            <span
                                                class="badge rounded-pill bg-{{ $trade['status'] == 'won' ? 'success' : 'danger' }}-transparent text-{{ $trade['status'] == 'won' ? 'success' : 'danger' }} py-1 px-2 fw-bold fs-10 mb-1">
                                                {{ strtoupper($trade['status']) }}
                                            </span>
                                            <span
                                                class="fw-bold fs-12 text-{{ $trade['status'] == 'won' ? 'success' : 'danger' }}">
                                                {{ $trade['status'] == 'won' ? '+' : '-' }}{{ currency_converter($trade['status'] == 'won' ? $trade['amount'] * 0.85 : $trade['amount']) }}
                                            </span>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center py-5 text-muted">
                                    <i class="bx bx-history fs-40 d-block mb-2 opacity-20"></i>
                                    No trading history yet.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .form-select.bg-transparent {
            background-image: none !important;
            padding-right: 0 !important;
        }

        .h-blink {
            animation: h-blink 1.5s linear infinite;
        }

        @keyframes h-blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        .shadow-success-sm {
            box-shadow: 0 4px 15px rgba(34, 197, 94, 0.3);
        }

        .shadow-danger-sm {
            box-shadow: 0 4px 15px rgba(239, 68, 68, 0.3);
        }

        .btn:active {
            transform: scale(0.98);
        }

        .chart-container-wrapper #tradingview_basic {
            min-height: 250px;
        }

        @media (max-width: 576px) {
            .chart-container-wrapper #tradingview_basic {
                height: 280px !important;
            }

            .trade-controls-section {
                position: sticky;
                bottom: 0;
                z-index: 100;
                box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.05);
            }
        }
    </style>

    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript" wire:ignore>
        function getAppTheme() {
            // Check for common theme indicators in dashboard templates
            const htmlTheme = document.documentElement.getAttribute('data-theme-mode');
            if (htmlTheme) return htmlTheme;

            const bodyTheme = document.body.classList.contains('dark-layout') ||
                document.body.getAttribute('data-theme-mode') === 'dark';
            return bodyTheme ? 'dark' : 'light';
        }

        function initTradingView(symbol) {
            let tvSymbol = symbol;
            let exchange = 'NASDAQ:';
            if (symbol.includes('-USD')) {
                exchange = 'BINANCE:';
                tvSymbol = symbol.replace('-USD', 'USDT');
            }

            const currentTheme = getAppTheme();

            new TradingView.widget({
                "width": "100%",
                "height": window.innerWidth < 576 ? 280 : 350,
                "symbol": exchange + tvSymbol,
                "interval": "1",
                "timezone": "Etc/UTC",
                "theme": currentTheme,
                "style": "3",
                "locale": "en",
                "toolbar_bg": currentTheme === 'dark' ? '#1a1e21' : '#f1f3f6',
                "enable_publishing": false,
                "hide_side_toolbar": true,
                "allow_symbol_change": false,
                "container_id": "tradingview_basic",
                "save_image": false,
                "hide_top_toolbar": true
            });
        }

        document.addEventListener('livewire:load', function () {
            initTradingView("{{ $market }}");

            window.addEventListener('marketUpdated', event => {
                initTradingView(@this.market);
            });

            // Watch for theme changes (on html or body)
            const themeObserver = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    if (mutation.attributeName === 'data-theme-mode' || mutation.attributeName === 'class') {
                        initTradingView(@this.market);
                    }
                });
            });

            themeObserver.observe(document.documentElement, { attributes: true });
            themeObserver.observe(document.body, { attributes: true });
        });
    </script>
</div>