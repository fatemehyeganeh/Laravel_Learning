<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $from_name;
    public $from_email;
    public $to_name;
    public $to_email;
    public $mssage;
    public $subject;
    public function __construct($from_name,$from_email,$to_name,$to_email,$mssage,$subject)
    {
        $this->from_name=$from_name;
        $this->from_email= $from_email;
        $this->to_name=$to_name;
        $this->to_email=$to_email;
        $this->mssage=$mssage;
        $this->subject=$subject;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact.contactmail')->withTitle('ContactMail');
    }
}
