<?php

namespace App\Http\Middleware;

use Closure;

class langage
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
        
         if($request->session()->get('setlocale'))
            app()->setlocale(session()->get('setlocale'));
         else
            app()->setlocale('en');

        return $next($request);
    }
}
