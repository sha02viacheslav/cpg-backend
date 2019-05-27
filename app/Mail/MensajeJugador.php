<?php

namespace App\Mail;

use App\Jugador;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MensajeJugador extends Mailable
{
    use Queueable, SerializesModels;

    public $jugador;
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Jugador $jugador, $mensaje)
    {
        $this->jugador = $jugador;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.enviarMensaje')->subject('¡Tienes un mensaje de uno de nuestros Agentes!') ;
    }
}
