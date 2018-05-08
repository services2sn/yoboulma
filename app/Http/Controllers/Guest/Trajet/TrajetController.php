<?php

namespace App\Http\Controllers\Guest\Trajet;

use App\Repositories\Trajet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrajetController extends Controller
{
    public function form(Request $request) {
        if($request->get('connection') == "TRUE")
          return view('guest.trajet.formTrajet')->with('connection',TRUE)->with('username',$request->get('username'));
        else
          return view('guest.trajet.formTrajet')->with('connection',FALSE);
    }


    public function handle(Request $request) {

      Trajet::create([
           'lieu_depart' => $request->input('lieu_depart'),
           'lieu_arrivee'=> $request->input('lieu_arrivee'),
           'date_depart' => $request->input('date_depart'),
           'date_arrivee' => $request->input('date_arrivee'),
           'detour_max' => $request->input('detour_max'),
           'etapes' => $request->input('etapes'),
           'accepted_format' => $request->input('format'),
           'frequence' => $request->input('frequence'),
           'proposal_price' => $request->input('price'),
           'transportation_type_id' => $request->input('transport'),
       ]);
        if($request->get('connection') == "TRUE")
          return view('guest.home.index')->with('connection',TRUE)->with('username',$request->get('username'));
        else
          return view('guest.home.index')->with('connection',FALSE);
    }

  }
