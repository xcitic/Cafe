<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
      'user_id',
      'name',
      'email',
      'subject',
      'message',
    ];


    public function owner() {
      return $this->belongsTo('App\User', 'user_id');
    }
}
