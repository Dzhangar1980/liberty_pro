<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  public function country()
  {
    return $this->belongsTo('App\Country');
  }
  public function region()
  {
    return $this->belongsTo('App\Region');
  }
  public function profile()
  {
    return $this->hasMany('App\Profile', 'city', 'id');
  }
}
