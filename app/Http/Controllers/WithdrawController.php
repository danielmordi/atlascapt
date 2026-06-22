<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use NumberFormatter;
use App\Models\Admin;
use App\Models\Package;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewWithdrawalRequest;

class WithdrawController extends Controller
{
    public function index()
    {
        $pcks = Package::where('name', Auth::user()->package)->first();
        $coins = Coin::get();
        $withdraw = Withdrawal::where('user_id', Auth::user()->id)->paginate(10);

        // --- Resume logic: detect where the user left off ---
        // Find the most recent pending withdrawal that still needs code verification.
        $activePending = Withdrawal::where('user_id', Auth::user()->id)
            ->where('status', 'pending')
            ->latest()
            ->first();

        $verificationStep = null; // null = no modal needed

        if ($activePending) {
            // Restore the session so the verify routes can find the record.
            session(['pending_withdrawal_id' => $activePending->id]);

            if (!$activePending->withdrawal_code_verified) {
                // Step 1: still needs withdrawal code
                $verificationStep = 'withdrawal_code';
            } elseif (!$activePending->transfer_code_verified) {
                // Step 2: withdrawal code done, still needs transfer code
                $verificationStep = 'transfer_code';
            } else {
                // Both codes verified but still pending — processing state
                $verificationStep = 'processing';
                session()->forget('pending_withdrawal_id');
            }
        }

        return view('user.withdraw')->with([
            'packages'         => $pcks,
            'coins'            => $coins,
            'withdrawals'      => $withdraw,
            'verificationStep' => $verificationStep,
        ]);
    }

    public function store(Request $request)
    {
        $payoutMethod = $request->input('payout_method', 'crypto');

        // Whitelist payout methods
        $allowed_methods = ['crypto', 'bank_transfer', 'revolut'];
        if (!in_array($payoutMethod, $allowed_methods)) {
            return redirect()->back()->withErrors('Invalid payout method.');
        }

        $rules = [
            'amount'        => 'required|numeric',
            'wallet_id'     => 'required',
            'payout_method' => 'required|in:crypto,bank_transfer,revolut',
            'withdraw_from' => 'required',
        ];

        // Coin is only required for crypto withdrawals
        if ($payoutMethod === 'crypto') {
            $rules['coin'] = 'required|integer';
        }

        $request->validate($rules, [
            'amount.numeric' => 'Please enter a valid value. Example: 100.00'
        ]);

        // Check for withdraw limit
        $from = $request->input('withdraw_from');

        // Whitelist allowed withdrawal sources
        $allowed_sources = ['totalProfitEarned', 'bonus'];
        if (!in_array($from, $allowed_sources)) {
            return redirect()->back()->withErrors('Invalid withdrawal source.');
        }

        if (floatval(Auth::user()->$from) < floatval($request->input('amount'))) {
            return redirect()->back()->withErrors('Insufficient funds');
        }

        // Check user withdraw limit
        $user_withdrawal_limit = floatval(Auth::user()->withdrawal_limit);
        if ($user_withdrawal_limit > floatval($request->input('amount'))) {
            $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
            $amount = $fmt->formatCurrency($user_withdrawal_limit, 'USD');
            return redirect()->back()->withErrors('Sorry, you can not withdraw below '.$amount);
        }

        // Generate auto codes
        $withdrawalCode = str_pad(random_int(10000, 99999), 5, '0', STR_PAD_LEFT);
        $transferCode   = str_pad(random_int(10000, 99999), 5, '0', STR_PAD_LEFT);

        $withdrawalRequest = new Withdrawal;
        $withdrawalRequest->user_id       = Auth::user()->id;
        $withdrawalRequest->coin_id       = $payoutMethod === 'crypto' ? $request->input('coin') : null;
        $withdrawalRequest->payout_method = $payoutMethod;
        $withdrawalRequest->withdraw_from = $request->input('withdraw_from');
        $withdrawalRequest->wallet_id     = $request->input('wallet_id');
        $withdrawalRequest->amount        = preg_replace("/[^0-9.]/", "", $request->input('amount'));
        $withdrawalRequest->status        = 'pending';
        $withdrawalRequest->withdrawal_code          = $withdrawalCode;
        $withdrawalRequest->transfer_code            = $transferCode;
        $withdrawalRequest->withdrawal_code_verified = false;
        $withdrawalRequest->transfer_code_verified   = false;
        $withdrawalRequest->save();

        // Store withdrawal ID in session to track the active verification flow
        session(['pending_withdrawal_id' => $withdrawalRequest->id]);

        return redirect()->route('user.withdraw')->with('require_withdrawal_code', true);
    }

    /**
     * Step 1: Verify the withdrawal code submitted by the user.
     */
    public function verifyWithdrawalCode(Request $request)
    {
        $request->validate(['withdrawal_code' => 'required|digits:5']);

        $withdrawalId = session('pending_withdrawal_id');
        if (!$withdrawalId) {
            return redirect()->route('user.withdraw')->withErrors('No active withdrawal session found.');
        }

        $withdrawal = Withdrawal::where('id', $withdrawalId)
            ->where('user_id', Auth::id())
            ->where('status', 'pending')
            ->first();

        if (!$withdrawal) {
            return redirect()->route('user.withdraw')->withErrors('Withdrawal request not found.');
        }

        if ($withdrawal->withdrawal_code !== $request->input('withdrawal_code')) {
            return redirect()->route('user.withdraw')
                ->with('require_withdrawal_code', true)
                ->withErrors('Invalid withdrawal code. Please contact support to get your code.');
        }

        $withdrawal->withdrawal_code_verified = true;
        $withdrawal->save();

        return redirect()->route('user.withdraw')->with('require_transfer_code', true);
    }

    /**
     * Step 2: Verify the transfer code submitted by the user.
     */
    public function verifyTransferCode(Request $request)
    {
        $request->validate(['transfer_code' => 'required|digits:5']);

        $withdrawalId = session('pending_withdrawal_id');
        if (!$withdrawalId) {
            return redirect()->route('user.withdraw')->withErrors('No active withdrawal session found.');
        }

        $withdrawal = Withdrawal::where('id', $withdrawalId)
            ->where('user_id', Auth::id())
            ->where('status', 'pending')
            ->where('withdrawal_code_verified', true)
            ->first();

        if (!$withdrawal) {
            return redirect()->route('user.withdraw')->withErrors('Withdrawal request not found or withdrawal code not verified.');
        }

        if ($withdrawal->transfer_code !== $request->input('transfer_code')) {
            return redirect()->route('user.withdraw')
                ->with('require_transfer_code', true)
                ->withErrors('Invalid transfer code. Please contact support to get your code.');
        }

        $withdrawal->transfer_code_verified = true;
        $withdrawal->save();

        // Clear the session – verification complete
        session()->forget('pending_withdrawal_id');

        return redirect()->route('user.withdraw')->with('withdrawal_processing', true);
    }

    public function check_withdrawal_limit($amount)
    {
        $user_withdrawal_limit = floatval(Auth::user()->withdrawal_limit);
        if ($user_withdrawal_limit > floatval($amount)) {
            return redirect()->back()->withErrors('Sorry, you can not withdraw below $'.$user_withdrawal_limit);
        }
    }
}
