<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
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
        return $this->markdown('emails.contact')
            ->subject('Richiesta informazioni'.
                (! empty($this->data['soggetto']) ? ' | '.$this->data['soggetto'] : '').
                ' - Messaggio dal sito '.config('app.name'))
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->replyTo($this->data['email'], $this->data['nome'])
            ->to(config('app.email'), config('app.name'))
            ->with([
                'nome' => $this->data['nome'],
                'messaggio' => $this->data['messaggio'],
                'email' => $this->data['email'],
                'telefono' => $this->data['telefono'],
            ]);
    }
}
