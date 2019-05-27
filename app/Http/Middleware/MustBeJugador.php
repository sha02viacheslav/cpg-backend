<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Redirect;

class MustBeJugador
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
        $user = Auth::guard('jugador')->user();
        if(! $user){
            session()->put('error', "No tenes permisos para acceder a este sitio.");
            return Redirect::to('editar-mi-perfil');
        }

        $request->session()->forget('error');
        return $next($request);
    }
}
