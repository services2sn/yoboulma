<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;


class User extends Model{

  protected $fillable = [
      'username', 'email','phone', 'password',
      'lieu_depart', 'lieu_arrivee','date_depart', 'date_arrivee',
      'detour_max','etapes','accepted_format','frequence','proposal_price',
      'transportation_type_id','id_user','connection'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];


}


 ?>
