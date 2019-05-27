<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusquedaRequest;
use App\Image;
use App\Jugador;
use App\Mail\Busqueda;
use App\Manager;
use App\Provincia;
use App\YoutubeVideo;
use Illuminate\Http\Request;
use App\Pais;
use Illuminate\Support\Facades\Mail;

class AjustesController extends Controller
{
    public function test(){

        $imagenes = Jugador::find(77)->images;
        $videos = Jugador::find(77)->videos;

         dd($imagenes);
    }

}
