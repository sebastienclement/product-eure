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
       if ($request->user()->role == 'admin') {
         return $next($request);
       }
       return redirect('/'); // abort('403') permet de rediriger vers 403
     }
}
