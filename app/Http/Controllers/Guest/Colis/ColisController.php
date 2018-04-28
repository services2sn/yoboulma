<?php

namespace App\Http\Controllers\Guest\Colis;

//use App\Repositories\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColisController extends Controller
{
    public function form() {
        return view('guest.colis.formColis');
        //return 'debogage de la vue';
    }

    public function handle() {
        return 'Votre colis a été créé !!!';
    }

  }
