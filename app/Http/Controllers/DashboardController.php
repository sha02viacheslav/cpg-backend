<?php

namespace App\Http\Controllers;

use App\Http\Requests\JugadorRequest;
use App\Http\Requests\ManagerJugadorRequest;
use App\Manager;
use App\Jugador;
use App\Posicion;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use App\Http\Requests\ManagerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('manager')->except('logout');
    }

    public function index(){
        return view('dashboard.home');
    }

    // Manager Crear Jugador
    public function crearJugador(){
        $data['review'] = true;

        return view('dashboard.crearJugador', $data);
    }

    public function editarPerfil($slug){
        $data['manager'] = Manager::whereSlug($slug)->first();

        return view('dashboard.editarPerfil', $data);
    }

    public function editarJugador($slug){
        $data['jugador'] = Jugador::whereSlug($slug)->first();

        return view('dashboard.editarJugador', $data);
    }
    public function storeJugador(ManagerJugadorRequest $request){
        $jugador = new Jugador($request->except('alturaL', 'altura','video', 'imagen', 'terminos' ));
        $clave = randomPasword();
        $jugador->manager_id = Auth::user()->id;
        $jugador->password = Hash::make($clave);
        $jugador->altura = $request->alturaL.substr($request->altura, 0, 2);
        $jugador->link_video = $this->formatVideo($request->video);

        if($request->imagen){
            $jugador->link_img = $request->imagen->store('/public/profiles');
        }
        $jugador->save();

        // Notificar Jugador
        Mail::to($jugador->email, $jugador->nombre)->send(new Welcome($jugador, $clave));

        session()->put('success', 'El Jugador se ha creado y le hemos enviado un email de bienvenida.');
        return redirect('dashboard');
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

    public function showPlayer($jugador){
        $data['jugador'] = Jugador::whereSlug($jugador)->firstOrFail();

        return view('jugadores.show', $data);
    }

    public function terminos(){
        return view('dashboard.terminos');
    }
    public function aceptarTerminos(Request $request){
        $manager = Manager::find(Auth::user()->id);
        $manager->terminos = true;
        $manager->save();

        session()->put('success', 'Has aceptado los términos y condiciones. ¡Bienvenido a CPG!');
        return redirect('dashboard');
    }

    public function getPosition() {
        return response()->json(Posicion::orderBy('posicion')->pluck('posicion', 'id')->prepend('Elíge una posición'));
    }

    public function getUserProfile(Request $request) {
        $query = Jugador::where('jugadors.slug', '=', request()->slug);
        //get Previous Profile
        if (request()->type == 1){
            $query = $query->get();
            $query = Jugador::where('jugadors.id', '>', $query[0]->id)->orderBy('jugadors.id', 'asc');
        }
        //get Next Profile
        if (request()->type == 2) {
            $query = $query->get();
            $query = Jugador::where('jugadors.id', '<', $query[0]->id)->orderBy('jugadors.id', 'desc');
        }
        $query = $query->leftJoin('posicions', 'jugadors.posicion_id', '=', 'posicions.id')
            ->leftJoin('pais', 'jugadors.pais_id', '=', 'pais.id')
            ->leftjoin('provincias', 'jugadors.provincia_id', '=', "provincias.id")
            ->select('jugadors.*', 'posicion', 'code', 'provincias.nombre as provincia');

        if (request()->type == 0) $query = $query->first();
        if (request()->type == 1) $query = $query->first();
        if (request()->type == 2) $query = $query->first();

        return response()->json($query);
    }

    public function getUserMedia(Request $request) {
        $jugador = Jugador::where('jugadors.slug', '=', request()->slug)->first();
        $media = collect();

        $videos = $jugador->videos;
        $images = $jugador->images ;

        foreach ($videos as $video)
            $media->push($video);
        foreach ($images as $image)
            $media->push($image);

        return response()->json($media);
    }
    public function getUserLists(Request $request) {
        $query = Jugador::leftJoin('posicions', 'jugadors.posicion_id', '=', 'posicions.id')
            ->leftJoin('pais', 'jugadors.pais_id', '=', 'pais.id')
            ->leftjoin('provincias', 'jugadors.provincia_id', '=', "provincias.id")
            ->select('jugadors.*', 'posicion', 'code', 'provincias.nombre as provincia');

        // Filter Habilitado
        $query = $query->where('habilitado', 1);

        // Name Filter
        if(request()->search){
            $query = $query->where('jugadors.nombre','like','%'.request()->search.'%');
        }

        // Age Filter
        if($val = $this->validateAge(request()->fromAge)){
            $query = $query->where('edad','>=', $val);
        }
        if($val = $this->validateAge(request()->toAge)){
            $query = $query->where('edad','<=', $val);
        }

        // Height Filter
        if($val = $this->validateHeight(request()->fromHeight)){
            $query = $query->where('altura','>=', $val);
        }
        if($val = $this->validateHeight(request()->toHeight)){
            $query = $query->where('altura','<=', $val);
        }

        // Wheight Filter
        if($val = $this->validateWheight(request()->fromWeight)){
            $query = $query->where('peso','>=', $val);
        }
        if($val = $this->validateWheight(request()->toWeight)){
            $query = $query->where('peso','<=', $val);
        }

        // Position Filter
        if($val = request()->position){
            $query = $query->where('posicion_id',$val);
        }

        // Video Filter
        if(request()->video == 'true'){
            $query = $query->where('link_video','!=', '0');
        }

        // Order
        $user_lists = $query->orderBy('updated_at', 'DESC')
            ->select('jugadors.nombre as nombre', 'posicion', 'code', 'provincias.nombre as provincia', 'edad', 'altura', 'peso', 'link_img', 'link_video', 'slug', 'jugadors.updated_at')
            ->get();
        return response()->json($user_lists);
    }

    public function validateAge($val){
        if($val){
            if(is_numeric($val) && intval($val) > 5 && intval($val < 80)){
                return $val;
            }
        }

        return false;
    }
    public function validateHeight($val){
        if($val){
            if(is_numeric($val) && intval($val) > 1 && intval($val < 220)){
                return $val;
            }
        }

        return false;
    }
    public function validateWheight($val){
        if($val){
            if(is_numeric($val) && intval($val) > 20 && intval($val < 220)){
                return $val;
            }
        }

        return false;
    }
}
