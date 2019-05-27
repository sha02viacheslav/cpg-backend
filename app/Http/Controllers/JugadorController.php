<?php

namespace App\Http\Controllers;

use App\Events\JugadorCreado;
use App\Http\Requests\JugadorRequest;
use App\Http\Requests\JugadorStep1Request;
use App\Jugador;
use App\Mail\MensajeJugador;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class JugadorController extends Controller
{

    public function __construct(){
        $this->middleware('jugador', ['only' => [ 'editarPerfil']]);
        $this->middleware('jugadoromanager', ['only' => ['update']]);
        $this->middleware('jugadoromanager', ['only' => ['cambiarEstadp']]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JugadorStep1Request $request)
    {
        $jugador = new Jugador($request->except('alturaL', 'altura','video', 'imagen', 'terminos' ));
        $clave = randomPasword();
        $jugador->password = Hash::make($clave);
        $jugador->altura = $request->alturaL.substr($request->altura, 0, 2);
        $jugador->link_video = $this->formatVideo($request->video);
        
        if($request->imagen){
            $jugador->link_img = $request->imagen->store('/public/profiles');
        }
        $jugador->save();

        // Notificar Jugador
        Mail::to($jugador->email, $jugador->nombre)->send(new Welcome($jugador, $clave));

        return redirect('quiero-ser-profesional/exito');
    }

    public function formatVideo($link){
        // ----- VIDEO  ------
        $search1 = 'watch?v=';
        $search2 = 'youtu.be/';
        $video = null;

        if(strpos($link,$search1 ) !== false){
            $pos = strpos($link, $search1) ;
            $video = substr($link, $pos + 8, 12);
        }else if(strpos($link,$search2 ) !== false){
            $pos = strpos($link, $search2) ;
            $video = substr($link, $pos + 9, 12);
        }else{
            return false;
        }

        return $video;
    }   

    public function editarPerfil($slug){
        $data['jugador'] = Jugador::whereSlug($slug)->first();

        if(! $data['jugador']){
            $data['jugador'] = Jugador::find($slug);
        }

        return view('jugadores.edit', $data);
    }
    
    public function update(Request $request, $jugador)
    {
        $jugador = Jugador::find($jugador);
        $jugador->update($request->except(['alturaL', 'altura','video', 'imagen', 'terminos','clave_vieja','clave' ]));
        $jugador->altura = $request->alturaL.substr($request->altura, 0, 2);
        $jugador->link_video = $this->formatVideo($request->video);

        if($request->imagen){
            Storage::delete($jugador->link_img);
            $jugador->link_img = $request->imagen->store('/public/profiles');
        }
        // Clave
        if($request->clave_vieja && $request->clave){
            if(Hash::check($request->clave_vieja, $jugador->password)){
                $jugador->password = Hash::make($request->clave);
            }else{
                session()->put('error', 'La clave anterior no coincide.');
                return redirect()->back();
            }
        }
        $jugador->save();

        $user = Auth::guard('manager')->user();
        if($user){
            session()->put('success', 'El perfil de '.$jugador->nombre.' se a actualizado con exito.');
        }else{
            session()->put('success', 'Tu perfil se a actualizado con exito.');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jugador $jugador)
    {
        //
    }

    public function cambiarEstadp(Request $request){
        $jugador = Jugador::find($request->jugador_id);
        $jugador->estado = $request->estado;
        $jugador->mensaje = $request->mensaje;
        $jugador->save();

        if($jugador->estado){
            session()->put('success', 'Estado actualizado.');
        }

        if($jugador->mensaje){
            Mail::to($jugador->email, $jugador->nombre)->send(new MensajeJugador($jugador, $jugador->mensaje));
            session()->put('success', 'Mensaje enviado.');
        }

        return redirect()->back();
    }
}
