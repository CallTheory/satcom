<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RetrievalLink extends Mailable
{
    use Queueable, SerializesModels;

    public string $link;

    public function __construct( $link )
    {
        $this->link = $link;
    }

    public function build(): RetrievalLink
    {
        return $this->markdown('emails.retrievallink')->subject('An encrypted message for you!');
    }
}
