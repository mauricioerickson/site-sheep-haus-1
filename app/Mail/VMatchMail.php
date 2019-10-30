<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VMatchMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('contato@sheephaus.com.br')
            ->subject('Match em Vaga - ' . $this->dados->vacancy->title)
            ->view('mail.vmatch');
    }
}
