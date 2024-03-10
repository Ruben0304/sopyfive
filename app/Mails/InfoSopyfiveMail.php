<?php

namespace App\Mails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

// App\\Mail\\InfoSopyfiveMail.php
class InfoSopyfiveMail extends Mailable
{
    use Queueable, SerializesModels;

    // Atributos para almacenar el token y el email del usuario
    public $token;
    public $email;

    // Constructor que recibe el token y el email como parámetros
    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    // Método que define el asunto del correo
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Info Sopyfive',
        );
    }

    // Método que define el contenido del correo
    public function content(): Content
    {
        // Pasamos el token y el email a la vista
        return new Content(view('vendor.mail.info-sopyfive', ['token' => $this->token, 'email' => $this->email]));
    }

    // Método que define los adjuntos del correo
    public function attachments(): array
    {
        return [];
    }
}
