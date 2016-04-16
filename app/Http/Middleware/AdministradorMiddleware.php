<?php

namespace App\Http\Middleware;

use Closure;

class AdministradorMiddleware
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
        // pregunta si la sesion existe
        if (!session()->has('administrador')) {
            return redirect('/acceder');
        }
        
        return $next($request);
    }
}
