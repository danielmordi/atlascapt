<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use NumberFormatter;

class TokenController extends Controller
{
  public function buyToken(Request $request)
  {
    // Get coin wallet address
    $coin = Coin::find($request->payment_method);
    // dd($coin->name);

    $token = new Token;
    $token->user_id = Auth::user()->id;
    $token->amount = $request->amount;
    $token->payment_method = $coin->name;
    $token->token_value = 0.0;
    $token->save();

    // Convert amount to currency format
    $fmt = new NumberFormatter('en_US', NumberFormatter::CURRENCY);
    $token->amount = $fmt->formatCurrency($token->amount, 'USD');

    // Coin wallet address
    $wallet_addr = $coin->wallet_id;

    return response()->json([
      'success' => 'tokenPaymentDetails',
      'token' => $token,
      'wallet_address' => $wallet_addr,
    ]);
  }

  public function confirmToken(Request $request)
  {
    $token = Token::updateOrCreate([
      'user_id' => Auth::user()->id,
    ], [
      'user_id' => Auth::user()->id,
      'amount' => intval(preg_replace("/[^0-9.]/", "", $request->amount)),
      'payment_method' => $request->payment_method,
      'token_value' => 0.0,
    ]);

    return redirect()->back()->with('success', 'Success! Your token will be add to your portfolio, once your payment has been confirmed.');
  }
}
