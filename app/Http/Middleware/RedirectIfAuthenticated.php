<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            $currentRoute   = Route::currentRouteName();

            if($currentRoute == "auth.unverified"){
                return $next($request);
            }

            if($currentRoute !== "auth.activate"){
                $user = Auth::user();
                return redirect($user->is_active ? '/' : '/unverified');
            }
        }

        return $next($request);
    }
}
