<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        if (Auth::check()){
            $user = Auth::user();
            if ($user->role == config('role.user.admin') || $user->role == config('role.user.user')){
                return $next($request);
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }
}
