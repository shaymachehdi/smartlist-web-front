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
        
  if($request->session()->get('auth') && $request->session()->get('role')==="admin")
        return $next($request);
        else
             abort(404);
    }
}
