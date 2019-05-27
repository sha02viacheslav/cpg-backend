<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;

class Busqueda extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitud;
    public $cv;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitud, $cv)
    {
        $this->solicitud = $solicitud;
        $this->cv = $cv;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->cv){
            $path = Storage::disk('local')->url($this->cv);
            
            return $this->view('emails.busqueda')
                ->subject('Nueva Solicitud Miembro')
                ->attach( public_path($path));
        }else{
            return $this->view('emails.busqueda')->subject('Nueva Solicitud Miembro');
        }
    }
}
