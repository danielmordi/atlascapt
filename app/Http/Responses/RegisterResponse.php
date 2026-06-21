<?php
 
namespace App\Http\Responses;
 
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;
 
class RegisterResponse implements RegisterResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        $home = auth()->user()->role_id == 1 ? '/admin' : '/account';
 
        return redirect()->intended($home);
    }
}