<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusquedaClubRequest;
use App\Http\Requests\BusquedaRequest;
use App\Jugador;
use App\Mail\Busqueda;
use App\Mail\BusquedaClub;
use App\Manager;
use App\Provincia;
use Illuminate\Http\Request;
use App\Pais;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.home');
    }

    public function terminos()
    {
        return view('terminos');
    }

    public function gopro()
    {
        return view('jugadores.form');
    }

    public function review()
    {
//        $data['datos'] =  Session::all();
        $data['review'] = true;
        
        return view('jugadores.form', $data);
    }

    public function done()
    {
        return view('jugadores.done');
    }


    public function app(){
        return view('app');
    }

    public function changeThePassword(){
        $manager = Manager::find(2);
        $manager->password =  bcrypt('gonzaloCpg');
        $manager->save();

        dd('password updated');
    }
    
    public function login(){
        return view('dashboard.login');
    }

    public function busquedaReclutadores(){
        return view('busquedaReclutadores');
    }

    public function postBusquedaReclutadores(BusquedaRequest $request){
        // Enviarnos notificacion
        $cv = null;
        if($request->cv){
            $cv = $request->cv->storeAs(
                '/public/cvs', str_slug($request->nombre).'-'.randomPasword().'.'.$request->cv->getClientOriginalExtension()
            );
        }

        Mail::to('clickpassgoal@gmail.com', 'CPG')->send(new Busqueda($request->all(), $cv));

        return view('managers.doneBusqueda');
    }

    public function busquedaClubs(){
        return view('busquedaClubs');
    }

    public function postBusquedaClubs(BusquedaClubRequest $request){
        // Enviarnos notificacion
        Mail::to('clickpassgoal@gmail.com', 'CPG')->send(new BusquedaClub($request->all()));

        return view('managers.doneBusqueda');
    }
}
