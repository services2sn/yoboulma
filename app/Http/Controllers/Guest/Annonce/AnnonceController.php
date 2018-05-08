<?php

namespace App\Http\Controllers\Guest\Annonce;

use App\Repositories\Trajet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnonceController extends Controller
{
    public function form(Request $request) {
        $data_annonce = Trajet::all();
        if($request->get('connection') == "TRUE")
          return view('guest.annonce.vueAnnonce')->with('data_annonce',$data_annonce)->with('connection',TRUE)->with('username',$request->get('username'));
        else
          return view('guest.annonce.vueAnnonce')->with('data_annonce',$data_annonce)->with('connection',FALSE);
    }


    public function handle(Request $request) {
        if($request->get('connection') == "TRUE")
          return view('guest.home.index')->with('connection',TRUE)->with('username',$request->get('username'));
        else
          return view('guest.home.index')->with('connection',FALSE);
    }

  }
