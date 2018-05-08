<?php

namespace App\Http\Controllers\Guest\Auth;

use Nexmo\Client;
use App\Repositories\User;
use App\Mail\User as MailUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function form() {
        return view('guest.auth.register.form')->with('connection',FALSE);
    }

    public function handle(Request $request) {

      $login = is_numeric($request->input('login')) ? 'phone' : 'email';
      //dd($login);
       User::create([
            'username' => $request->input('username'),
            $login => $request->input('login'),          ///affichage de congratulations après validation
            'password' => bcrypt($request->input('password')),
        ]);

        if($login == 'email'){
          Mail::to($request->input('login'))->send(new MailUser($request->except('_token')));
        }
        else{
          $client = new Client(new Client\Credentials\Basic(env('NEXMO_KEY'), env('NEXMO_SECRET')));

          $message = $client->message()->send([
            'to' => $request->input('login'),
            'from' => '33625325445',
            'text' => 'Yoboulma vous souhaite la bienvenue !!!'
          ]);
        }
        return view('guest.home.index')->with('username',$request->input('username')->with('connection',TRUE));

    }
}
