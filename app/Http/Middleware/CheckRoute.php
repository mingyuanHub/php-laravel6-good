<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoute
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
        // var_dump($request->route());
        echo $request->route()->getName();
        
        var_dump($request->route()->named("hello"));
        if ($request->route()->named("hello"))
        {
            return false;
        }
        return $next($request);
    }
}
