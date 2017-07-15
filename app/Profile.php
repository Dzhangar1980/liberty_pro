<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $table = 'profiles';
    
  public function user()
  {
    return $this->belongsTo('App\User');
  }
    
  public function phones()
  {
    return $this->hasMany('App\Phone');
  }
  
  public function status()
  {
    return $this->belongsTo('App\Status');
  }
  
  public function pack()
  {
    return $this->belongsTo('App\Pack', 'company_pack', 'id');
  }
  
  public function qualification()
  {
    return $this->belongsTo('App\Qualification', 'company_status', 'id');
  }
  
  public function mycity()
  {
    return $this->belongsTo('App\City', 'city', 'id');
  }
  
  public function mysponsor()
  {
    return $this->belongsTo('App\User', 'sponsor', 'id');
  }
  
  public function videos()
  {
    return $this->hasOne('App\Video', 'user_id', 'user_id');
  }

  public function abonements()
  {
    return $this->hasMany('App\Abonement', 'user_id', 'user_id');
  }  
  
  public function latest_abonement()
  {
    return $this->hasOne('App\Abonement', 'user_id', 'user_id')->latest();
  }  
}
