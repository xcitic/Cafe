<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

  protected $table = 'reservations';

  protected $fillable = [
    'user_id',
    'name',
    'email',
    'phone',
    'seats',
    'date'
  ];


  public function owner() {
    return $this->belongsTo('App\User', 'user_id');
  }
  
}
