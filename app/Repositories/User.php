<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;


class User extends Model{

  protected $fillable = [
      'username', 'email','phone', 'password',
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
