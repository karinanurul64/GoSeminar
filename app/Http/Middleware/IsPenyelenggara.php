<?php

namespace App\Http\Middleware;

use Closure;

class IsPenyelenggara
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
        if(auth()->check() && $request->user()->role == 'User')
        {
            return back();
        }
        return $next($request);
    }
}
