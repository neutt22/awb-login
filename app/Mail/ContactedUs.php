<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactedUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $inqury;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $inqury)
    {
        $this->name = $name;
        $this->email = $email;
        $this->inqury = $inqury;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact-us')->subject('Someone contacted us! - Login Services');
    }
}
