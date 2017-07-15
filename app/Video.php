<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = false;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
