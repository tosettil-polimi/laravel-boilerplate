<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CtaMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.cta')
            ->subject("Richiesta informazioni - Messaggio dal sito " . env('APP_NAME'))
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->replyTo($this->data['email'], $this->data['nome'])
            ->to(env('APP_EMAIL'), env('APP_NAME'))
            ->with([
                'nome' => $this->data['nome'],
                'messaggio' => $this->data['messaggio'],
                'email' => $this->data['email']
            ]);
    }
}
