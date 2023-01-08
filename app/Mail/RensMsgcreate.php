<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RensMsgcreate extends Mailable
{
    use Queueable, SerializesModels;

   
   public $sujet;
   public $msg;

    public function __construct($sujet, $msg)
    {
        $this->sujet = $sujet;
        $this->msg = $msg;
    }

    public function build()
    {
         return $this->markdown('Emails.Rens.rensMarkdowncreate');
    }
}
