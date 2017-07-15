<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dialog extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function sides(){
        return $this->hasMany('App\Side');
    }
    
    public function messages(){
        return $this->hasMany('App\Message');
    }
}
