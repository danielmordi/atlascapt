<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Support\Facades\Redirect;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        $role = \Auth::user()->role_id;

        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }
        if ($role == 1 ?? '1') {
            $home = config('fortify.admin');
        } elseif ($role == 2 ?? '2') {
            $home = config('fortify.account');
        } else {
            $home = '/';
        }
        return Redirect::to($home);
    }
}
