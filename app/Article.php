<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table = 'articles';
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
}
