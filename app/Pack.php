<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    protected $table = 'company_packs';
    public $timestamps = false;
    
    public function profiles(){
        return $this->hasMany('App\Profile', 'id', 'company_pack');
    }
    
}
