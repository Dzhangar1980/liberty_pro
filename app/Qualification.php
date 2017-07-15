<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $table = 'company_statuses';
    public $timestamps = false;
    
    public function profiles(){
        return $this->hasMany('App\Profile', 'company_status', 'id');
    }
    
}
