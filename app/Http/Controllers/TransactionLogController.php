<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\TransactionHistory;
use Illuminate\Support\Facades\Auth;

class TransactionLogController extends Controller
{
    public function index()
    {
        $transactions = TransactionHistory::where('user_id', Auth::user()->id)->latest()->paginate(10);
        return view('user.transactions', compact('transactions'));
    }
    public function depositlog()
    {
        $dLog = Deposit::where('status', '!=', 'completed')->latest()->paginate();
        return view('admin.depositlog')->with('deposits', $dLog);
    }

    public function confirm($id)
    {
        $deposit = Deposit::find($id);
        $amount = $deposit->amount;
        $status = $deposit->status;
        $userId = $deposit->user_id;

        $user = User::findOrFail($userId);
        $amountValue = floatval(preg_replace("/[^0-9.]/", "", $amount));

        // Deposit status is reinvest, minus from wallet balance
        if ($status == 'Reinvest pending') {
            $user->profit = 0;
            $user->totalProfitEarned = 0;
            $user->investmentDuration = 0;
            $user->deposit = 0;
            $user->save();
        }

        $user->wallet_balance = $amountValue + floatval(preg_replace("/[^0-9.]/", "", $user->wallet_balance));

        if ($deposit->package) {
            $user->deposit = $amountValue + floatval(preg_replace("/[^0-9.]/", "", $user->deposit));
            $duration = $deposit->package->duration;
            $user->investmentDuration = $duration;
            $user->package = $deposit->package->name;
            $user->package_id = $deposit->package_id;

            // Create UserPlan record
            \App\Models\UserPlan::create([
                'user_id' => $userId,
                'package_id' => $deposit->package_id,
                'amount' => $amountValue,
                'investmentDuration' => $duration,
                'status' => 'active',
            ]);
        }

        if ($deposit->copy_trader_id) {
            $user->deposit = $amountValue + floatval(preg_replace("/[^0-9.]/", "", $user->deposit));

            $existingFollow = \App\Models\UserCopyTrader::where('user_id', $userId)
                ->where('copy_trader_id', $deposit->copy_trader_id)
                ->first();

            if ($existingFollow) {
                $existingFollow->update([
                    'status' => 'followed',
                    'copy_trader_status' => 'active',
                    'date_followed' => now()
                ]);
            } else {
                \App\Models\UserCopyTrader::create([
                    'user_id' => $userId,
                    'copy_trader_id' => $deposit->copy_trader_id,
                    'copy_trader_status' => 'active',
                    'status' => 'followed',
                    'date_followed' => now()
                ]);
            }
        }

        $user->save();

        // Create transaction history
        $type = $status == 'deposit' ? 'deposit' : 'reinvest';
        TransactionHistory::create([
            'user_id' => $userId,
            'type' => $type,
            'description' => "Your deposit of \${$deposit->amount} was successful!",
            'amount' => $amount,
            'status' => 'completed',
        ]);

        $deposit->status = 'completed';
        $deposit->save();

        $msg = 'You\'ve just confirmed the sum of ' . $deposit->amount . ' to be credited to ' . $user->name . '.';
        mail('admin@projectwhales.com', 'Transaction confirmation', $msg);

        return redirect()->back()->with('success', 'Confirmed!');
    }

    public function cancelDeposit($id)
    {
        $cancel = Deposit::findOrFail($id);
        $cancel->status = 'failed';
        $cancel->save();

        // Create transaction history
        TransactionHistory::create([
            'user_id' => $cancel->user_id,
            'type' => 'deposit',
            'description' => "Your deposit of {$cancel->amount} was not successful!",
            'amount' => preg_replace("/[^0-9.]/", "", $cancel->amount),
            'status' => 'failed',
        ]);

        return redirect()->back()->with('success', 'Deposit request has been mark as a failed transaction!');
    }

    public function withdrawalog()
    {
        $withdrawalRequest = Withdrawal::where('status', 'pending')->latest()->paginate(10);
        return view('admin.withdrawalog')->with('withdrawalogs', $withdrawalRequest);
    }

    public function confirmWithdrawal($id)
    {
        $wt = Withdrawal::find($id);
        $from = $wt->withdraw_from;
        $amount = floatval(preg_replace("/[^0-9.]/", "", $wt->amount));
        $userId = $wt->user_id;
        $update = User::find($userId);
        $fromValue = floatval(preg_replace("/[^0-9.]/", "", $update->$from));

        // Minus from wallet balance
        $update->$from = $fromValue - $amount;
        $update->save();

        $wt->status = 'completed';
        $wt->save();

        // Create transaction history
        TransactionHistory::create([
            'user_id' => $userId,
            'type' => 'withdraw',
            'description' => "Your withdrawal request of {$amount} was successful!",
            'amount' => $amount,
            'status' => 'completed',
        ]);

        $msg = 'You\'ve just confirmed the sum of ' . $amount . ' to be withdraw by ' . $update->name . '.';
        mail('admin@projectwhales.com', 'Transaction confirmation', $msg);

        return redirect()->back()->with('success', 'Confirmed!');
    }

    public function cancelWithdrawal($id)
    {
        $cancel = Withdrawal::findOrFail($id);
        $cancel->status = 'canceled';
        $cancel->save();

        // Create transaction history
        TransactionHistory::create([
            'user_id' => $cancel->user_id,
            'type' => 'withdraw',
            'description' => "Your withdrawal request of {$cancel->amount} was not successful!",
            'amount' => preg_replace("/[^0-9.]/", "", $cancel->amount),
            'status' => 'failed',
        ]);

        return redirect()->back()->with('success', 'Withdrawal request has been mark as a failed transaction!');
    }
}
