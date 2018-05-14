<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;


class Trajet extends Model{


  protected $fillable = [
      'lieu_depart', 'lieu_arrivee','date_depart', 'date_arrivee',
      'detour_max','etapes','accepted_format','frequence','proposal_price',
      'transportation_type_id','id_user','connection'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */

}


 ?>
