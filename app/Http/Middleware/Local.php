<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Local
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
        if (Auth::user()->role == 'admin' || Auth::user()->role == 'local')
        {
        }
        else{
            return redirect('dashboard');
        }
        return $next($request);
    }
}
