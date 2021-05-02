<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPasswordAccess extends Mailable
{
    use Queueable, SerializesModels;

    public $subject="Credenciales de acceso al Sistema de Autenticación Centralizado | UEB";
    public $data;

    public $replyTo=[
        [ 'name'=>'Dirección de Tecnología de la Información y la Comunicación',
            'address'=>'dtics@ueb.edu.ec']
    ];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('layouts.generatepassw');
    }
}
