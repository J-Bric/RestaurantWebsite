<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateMe
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user->id == $request->user()->id) {
            return $next($request);
        }
        return back();
    }
}
