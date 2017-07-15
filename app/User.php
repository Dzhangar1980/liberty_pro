<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use \HighIdeas\UsersOnline\Traits\UsersOnlineTrait;
     
    protected $fillable = [
        'name', 'email', 'password', 'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne('App\Profile');
    }
    
    public function abonements(){
        return $this->hasMany('App\Abonement');
    }
    
    public function protocols(){
        return $this->hasMany('App\Protocol');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function notes()
    {
        return $this->hasMany('App\Note');
    }
    
    public function children()
    {
        return $this->hasMany('App\Profile', 'sponsor');
    }
    
    public function dialogs()
    {
        return $this->hasMany('App\Dialog');
    }
    
    public function sides()
    {
        return $this->hasMany('App\Side');
    }
    
    public function recommendation()
    {
        return $this->hasOne('App\Recommendation');
    }
    
    public function video()
    {
        return $this->hasOne('App\Video');
    }
    
    public function lids()
    {
        return $this->hasMany('App\Lid');
    }
    
    public function notifications()
    {
        return $this->hasMany('App\Notification');
    }
    
   
}
