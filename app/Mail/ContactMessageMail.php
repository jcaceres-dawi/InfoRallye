<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $messageText;

    /**
     * Create a new message instance.
     */
    public function __construct($title, $messageText)
    {
        $this->title = $title;
        $this->messageText = $messageText;
    }

    public function build()
    {
        return $this->subject($this->title)
            ->markdown('emails.contact');
    }
}
