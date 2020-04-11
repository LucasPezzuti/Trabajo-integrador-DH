<?php

namespace App\Http\Middleware;

use Closure, Auth;

class esAdmin
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
        //si el usuario tiene permisos de admin, pasa. Sino te devuelve a home.
        if(Auth::user()->rol == "1"):
        return $next($request);
        else:
            return redirect('/');
        endif;
    }
}
