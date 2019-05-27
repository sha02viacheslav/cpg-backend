<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Redirect;

class MustBeManager
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
//        $user = Auth::guard('manager')->user();
//
//        if(! $user){
//            session()->put('error', "You don't have permission to access this site.");
//            return Redirect::to('login');
//        }
//
//        $request->session()->forget('error');
//        return $next($request);

        return $next($request);
    }
}
