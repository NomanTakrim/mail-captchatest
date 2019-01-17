<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailTester extends Mailable
{
    use Queueable, SerializesModels;
    public $prod;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($prod)
    {
        $this->prod=$prod;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('masumcis@gmail.com')->from('noman011111072@gmail.com', 'Takrim')->subject('From laravel website')->view('mail');
    }
}
