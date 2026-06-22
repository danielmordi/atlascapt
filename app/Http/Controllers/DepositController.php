<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Deposit;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Events\AdminNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\NewDepositRequest;
use App\Notifications\Admin\NewDepositAlert;
use App\Models\UserPlan;
use App\Models\TransactionHistory;

class DepositController extends Controller
{
    public function index()
    {
        $coins = Coin::get();
        $packages = Package::get();
        $deposit = Deposit::where('user_id', Auth::user()->id)->latest()->paginate(5);
        return view('user.deposit')->with([
            'coins' => $coins,
            'packages' => $packages,
            'logs' => $deposit
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'coin' => 'required|integer',
            'deposit_amount' => 'required',
        ],
            [
                'coin.integer' => 'Choose a valid coin',
                'deposit_amount' => 'Please enter a valid deposit amount without commas'
            ]);

        if ($request->input('deposit_amount')) {
            $deposit_amount = preg_replace("/[^0-9.]/", "", $request->deposit_amount);
        }


        $deposit = new Deposit;
        $deposit->user_id = Auth::user()->id;
        $deposit->coin_id = $request->input('coin');
        $deposit->amount = $deposit_amount;
        $deposit->status = 'pending';
        $deposit->save();

        // Auth::user()->notify(new NewDepositRequest($deposit));

        // Notify Admin
        // $msg = 'A deposit of '.$deposit->amout.' wa made by '.Auth::user()->name.'.';
        // mail('support@atlascapt.com', 'New Deposit', $msg);

        return redirect()->route('user.deposit.info', $deposit->id)
            ->with('success', 'Your deposit request has been sent successfully, please follow the instructions below to complete deposit')->withInput();
    }

    public function reinvest(Request $request)
    {

      $depositBalance = (float) str_replace(',', '', Auth::user()->deposit);
      $investAmount = (float) $request->amount;
      $package = Package::find($request->package_id);

      if (!$package) {
          return response()->json('Selected package not found.', 404);
      }

      if ($depositBalance < $investAmount || $depositBalance == 0) {
        return response()->json('Insufficient funds. Click on "Deposit" to fund your account.', 403);
      }

      if ($investAmount < $package->min_val) {
          return response()->json("The minimum amount for {$package->name} is \${$package->min_val}", 403);
      }

      if ($investAmount > $package->max_val) {
          return response()->json("The maximum amount for {$package->name} is \${$package->max_val}", 403);
      }

      try {
          DB::beginTransaction();

          // Deduct from deposit
          $user = User::find(Auth::id());
          $user->deposit = $depositBalance - $investAmount;
          $user->save();

          // Create UserPlan
          UserPlan::create([
              'user_id' => $user->id,
              'package_id' => $package->id,
              'amount' => $investAmount,
              'status' => 'active',
              'investmentDuration' => $package->duration,
              'totalProfitEarned' => 0,
              'profitCount' => 0,
          ]);

          // Create Deposit record for history (optional, but keep it for consistency with current history views)
          Deposit::create([
              'user_id' => $user->id,
              'coin_id' => $request->coin_id ?? 1, // Defaulting to 1 if not provided
              'package_id' => $package->id,
              'amount' => $investAmount,
              'status' => 'completed'
          ]);

          // Record transaction history
          TransactionHistory::create([
              'user_id' => $user->id,
              'type' => 'Investment',
              'description' => 'Purchased ' . $package->name . ' plan',
              'amount' => $investAmount,
              'status' => 'completed'
          ]);

          DB::commit();
          return response()->json('Plan purchased successfully!', 200);

      } catch (\Exception $e) {
          DB::rollBack();
          return response()->json('Error purchasing plan: ' . $e->getMessage(), 500);
      }

      return response()->json('Your deposit request has been sent successfully', 200);
    }

    public function showDepositInfo($id)
    {
        $latestDeposit = Deposit::where([
            'user_id' => Auth::user()->id,
        ])->findOrFail($id);

        return view('user.deposit-info')->with([
            'currentDeposit' => $latestDeposit,
        ]);
    }

    public function buyToken(Request $request)
    {
        dd($request->all());
    }
}
