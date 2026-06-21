<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReferralController extends Controller
{
    public function index()
    {
        $refs = User::where('referrer_id', Auth::user()->id)->get();
        return view('user.referral')->with('refs', $refs);
    }
}
