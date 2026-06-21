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
        return view('user.withdraw')->with([
            'packages' => $pcks,
            'coins' => $coins,
            'withdrawals' => $withdraw
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'wallet_id' => 'required',
            'coin' => 'required|integer',
            'withdraw_from' => 'required'
        ],
            [
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

        $withdrawalRequest = new Withdrawal;
        $withdrawalRequest->user_id = Auth::user()->id;
        $withdrawalRequest->coin_id = $request->input('coin');
        $withdrawalRequest->withdraw_from = $request->input('withdraw_from');
        $withdrawalRequest->wallet_id = $request->input('wallet_id');
        $withdrawalRequest->amount = preg_replace("/[^0-9.]/", "", $request->input('amount'));
        $withdrawalRequest->status = 'pending';
        $withdrawalRequest->save();

        //  Send mail notification
        // Auth::user()->notify(new NewWithdrawalRequest ($withdrawalRequest));

        return redirect()->back()->with('success', 'Your withdrawal request has been sent successfully!, Contact our support team via live chat or email to process your withdrawal request.');
    }

    public function check_withdrawal_limit($amount)
    {
        $user_withdrawal_limit = floatval(Auth::user()->withdrawal_limit);
        // dd($user_withdrawal_limit < floatval($amount));
        if ($user_withdrawal_limit > floatval($amount)) {
            return redirect()->back()->withErrors('Sorry, you can not withdraw below $'.$user_withdrawal_limit);
        }
    }
}
