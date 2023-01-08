<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Msg\RensFormRequest;
use App\Mail\RensMsgcreate;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RensController extends Controller
{
     public function create()
        {
            return view ('Emails.Rens.formRens');
        }

    public function store(RensFormRequest $request, User $user)
        {
            $mailable =  new RensMsgcreate($request->sujet, $request->msg);
            Mail::to('vjp99@orange.fr')->send($mailable);

             return redirect()->route('dashboard')->with('success','Merci pour ton message. Je te répondrai dès que possible.');
        }
}
