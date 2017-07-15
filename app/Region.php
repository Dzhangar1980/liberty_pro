<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  public function counrty()
  {
    return $this->belongsTo('App\Counrty');
  }
}
