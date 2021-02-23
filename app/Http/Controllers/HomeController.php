<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

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
        $data   = [
            "secret"   => env('APP_KEY_RECATCHA'),
            'response' => $request->get('g_recaptcha_response')
        ];
        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $response = json_decode($response);

        if ($response->success) {
            $name  = $request->name;
            $sujet = $request->sujet;
            $email = $request->email;
            $msg   = $request->message;

            Mail::send(
                'email.sendContact',
                ['name' => $name, 'sujet' => $sujet, 'email' => $email, 'msg' => $msg],
                function ($message) {
                    $message->from('alex.depem@hotmail.fr', 'Site Cv Alex');
                    $message->to('alexandre@depembroke.fr');
                    $message->subject('Prise de contact Cv Alex');
                }
            );

            return $name . ' ' . $sujet . ' ' . $email . ' ' . $msg;
        }

        return  \response()->json([false]);
    }
}
