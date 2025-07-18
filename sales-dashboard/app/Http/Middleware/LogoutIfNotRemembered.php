<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LogoutIfNotRemembered
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && !$request->cookies->has(Auth::getRecallerName())) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return $next($request);
    }
}
