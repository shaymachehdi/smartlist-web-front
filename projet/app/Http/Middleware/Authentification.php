<?php

namespace App\Http\Middleware;

use Closure;

class Authentification
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

        if(!$request->session()->get('auth'))
            abort(404);
         else
           return $next($request);;
    }
}
