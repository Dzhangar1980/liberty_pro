<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public $timestamps = false;
    
    public function articles()
    {
        return $this->hasMany('App\Articles');
    }
    
    public function profile()
    {
        return $this->hasMany('App\Profile');
    }
    
}
