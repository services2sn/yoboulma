<?php

namespace App\Http\Controllers\Guest\Auth;

use App\Repositories\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function form() {
        return view('guest.auth.login.form')->with('connection',FALSE);
    }

    public function handle(Request $request) {

        $login = is_numeric($request->input('login')) ? "phone" : "email";

        $login_value = $request->input('login');
        $password = $request->input('password');
        $partial_requete = ''.$login.' = "'.$login_value.'"';
        $users = User::whereRaw($partial_requete)->first();

        if(!empty($users) && password_verify($password,$users->password)){
          return view('guest.home.index')->with('username',$users->username)->with('connection',TRUE);
        }
        else{
          return view('guest.auth.login.form')->with('connection',FALSE);
        }
        //return 'handle login';
    }
}
