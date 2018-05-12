<?php

namespace App\Http\Controllers\Guest\Profil;

use App\Repositories\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
  public function form(Request $request) {
      return view('guest.profil.vueProfil')->with('connection',TRUE)->with('username',$request->get('username'));
  }
}


?>
