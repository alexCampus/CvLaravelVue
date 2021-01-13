<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        $name  = $request->name;
        $sujet = $request->sujet;
        $email = $request->email;
        $msg   = $request->message;

        Mail::send('email.sendContact', ['name' => $name, 'sujet' => $sujet, 'email' => $email, 'msg' => $msg], function ($message) {
            $message->from('alex.depem@hotmail.fr', 'Site Cv Alex');
            $message->to('alex.depem@gmail.com');
            $message->subject('Prise de contact Cv Alex');
        });
       return $name . ' ' . $sujet . ' ' . $email . ' ' . $msg;
    }
}
