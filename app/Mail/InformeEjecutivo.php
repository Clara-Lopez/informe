<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformeEjecutivo extends Mailable
{
    use Queueable, SerializesModels;

    public $pdf;
    public $mapas;
    public $graficos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Pdf $pdf, Mapas $mapas, Graficos $graficos, )
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.InformeEjecutivo');
    }
}
