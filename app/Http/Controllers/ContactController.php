<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Msg\ContactFormRequest;
use App\Mail\ContactMsgcreate;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
        {
            return view ('Emails.Contact.formContact');
        }

    public function store(ContactFormRequest $request)
        {
            
            $mailable =  new ContactMsgcreate($request->nom, $request->prenom, $request->email, $request->msg);
            Mail::to('vjp99@orange.fr')->send($mailable);

             return redirect()->route('accueil')->with('success','Merci pour votre contact. Nous vous répondrons rapidement');
        }
}
