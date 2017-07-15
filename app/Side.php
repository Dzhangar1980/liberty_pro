<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Side extends Model
{
    public function dialog(){
        $this->belongsTo('App\Dialog');
    }
    
    public function user(){
        $this->belongsTo('App\User');
    }
}
