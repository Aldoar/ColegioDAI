<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Rols
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rols)
    {
        if(Auth::user() == null)
        {
            abort(403,"No tiene el permiso necesario");
        }
        if(Auth::user()->idRols != $rols)
        {
            abort(403,"No tiene el permiso necesario");
        }

        return $next($request);
    }
}
