<?php

namespace App\Mail;

use App\Jugador;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    public $jugador;
    public $clave;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Jugador $jugador, $clave)
    {
        $this->jugador = $jugador;
        $this->clave = $clave;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newplayer')->subject('Bienvenido a Click Pass Goal') ;
    }
}
