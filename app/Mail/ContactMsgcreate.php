<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMsgcreate extends Mailable
{
    use Queueable, SerializesModels;

    public $nom;
    public $prenom;
    public $email;
    public $msg;


    public function __construct($nom, $prenom, $email, $msg)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->msg = $msg;
    }

    public function build()
    {
        return $this->markdown('Emails.Contact.contactMarkdowncreate');
    }
}
