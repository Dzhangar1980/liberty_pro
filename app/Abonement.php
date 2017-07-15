<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonement extends Model
{
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function profile(){
        return $this->belongsTo('App\Profile');
    }
}
