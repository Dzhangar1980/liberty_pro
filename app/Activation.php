<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activation extends Model
{
	protected $table = 'activations';
	
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }   
}
