<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;


class ManagerLoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLogin(){
        return view('dashboard.loginManager');
    }

    public function login(Request $request){
        // Validate request
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);


        // Attempt login
        $user = Auth::guard('manager')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember);

        // Redirect to editar perfil or Fail
        if($user){
            // Fijarme si acepto terminos y condiciones

//            if(! Auth::user()->terminos){
//                return redirect('/dashboard/terminos-y-condiciones');
//            }
            return redirect('/app');
        }

        return redirect()->back()->withErrors(['msg' => ['Datos de acceso incorrectos.']])->withInput($request->only(['email']));
    }

}
