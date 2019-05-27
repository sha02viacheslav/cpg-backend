<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;


class JugadorLoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLogin(){
        return view('jugadores.login');
    }

    public function login(Request $request){
        // Validate request
        $this->validate($request, [
            'email' => 'required|string|email',
             'password' => 'required|string'
        ]);

        // Attempt login
        $user = Auth::guard('jugador')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember);

        // Redirect to editar perfil or Fail
        if($user){
            return redirect('/editar-mi-perfil/'.Auth::guard('jugador')->user()->slug);
        }

        return redirect()->back()->withErrors(['msg' => ['Los datos de acceso son incorrectos.']])->withInput($request->only(['email']));
    }

}
