<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (auth()->user()->role() == 1) {
        
            return $next($request);
        }else{
            redirect('/home');
        }

        return view('dashboard')->with('error', alert('You Have not admin access'));
    }
}
