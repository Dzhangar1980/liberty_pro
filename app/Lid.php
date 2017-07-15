<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lid extends Model
{
    protected $table = 'lids';
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
