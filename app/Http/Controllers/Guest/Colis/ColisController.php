<?php

namespace App\Http\Controllers\Guest\Colis;

use App\Repositories\Colis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColisController extends Controller
{
    public function form(Request $request) {
        if($request->get('connection') == "TRUE")
          return view('guest.colis.formColis')->with('connection',TRUE)->with('username',$request->get('username'));
        else
          return view('guest.colis.formColis')->with('connection',FALSE);
        //return 'debogage de la vue';
    }


    public function handle(Request $request) {

      Colis::create([
           'objet' => $request->input('objet'),
           'description'=> $request->input('description'),
           'lieu_depart' => $request->input('lieu_depart'),
           'lieu_arrivee' => $request->input('lieu_arrivee'),
           'date_limite' => $request->input('date_limite'),
           'format' => $request->input('format'),
           'contact' => $request->input('contact'),
           'photo' => $request->input('photo'),
           'first_price' => $request->input('price'),
           'fees' => $request->input('fees'),
           'first_price_ttc' => $request->input('price_ttc'),
       ]);
        if($request->get('connection') == "TRUE")
          return view('guest.home.index')->with('connection',TRUE)->with('username',$request->get('username'));
        else
          return view('guest.home.index')->with('connection',FALSE);
    }

  }
