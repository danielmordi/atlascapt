<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param \String $authCheck
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $authCheck)
    {
        if ($authCheck == 'admin' && auth()->user()->role_id != 1) {
            abort(403);
        } elseif ($authCheck == 'user' && auth()->user()->role_id != 2) {
            abort(403);
        }

        return $next($request);
    }
}
