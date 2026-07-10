<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReporteCumpleanerosMesSiguienteMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $logo;

    public function __construct(
        public $cumpleaneros,
        public string $mes
    )
    {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'CLUB San Luis Potosí | Reporte de cumpleañeros del mes siguiente'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.reporteCumpleanerosMesSiguiente',
            with: [
                'logo' => public_path('images/logos/logo-blue.jpg')
            ]
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
