<?php

namespace App\Listeners;

use App\Events\JugadorCreado;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificarJugador
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  JugadorCreado  $event
     * @return void
     */
    public function handle(JugadorCreado $jugador)
    {
//        var_dump('jugador creado.'.$jugador->nombre);
    }
}
