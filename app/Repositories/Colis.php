<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;


class Colis extends Model{

protected $table = 'colis';

  protected $fillable = [
      'objet', 'description','lieu_depart', 'lieu_arrivee',
      'date_limite','format','contact','photo','first_price','fees','first_price_ttc','id_user','connection'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */


}


 ?>
