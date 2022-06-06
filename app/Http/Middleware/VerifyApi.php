<?php

namespace App\Http\Middleware;

use App\Exceptions\NoAuthException;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $user = auth()->user();

        if ($user)
            return $next($request);

        throw new NoAuthException();
    }
}
