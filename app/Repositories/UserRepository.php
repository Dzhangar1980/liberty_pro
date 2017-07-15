<?php
namespace App\Repositories;

use App\User;
use App\Profile;
use App\City;
use App\Good;
use App\Abonement;
use Auth;
//use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;

class UserRepository {
    
    protected $user;
    protected $city;
    protected $abonement;
    protected $sponsorAbonement;
    protected $goods;
    
    function __construct() {
        $user = Auth::user();
        $this->user = User::findOrFail($user->id);
        $profile = Profile::where('user_id','=', $user->id)->first();
        $this->city = City::select('city_name_ru', 'region_id', 'country_id')
                ->where('id','=',$profile->city)->first();
        $this->goods = Good::all();
        $today = date("Y-m-d H:i:s");
        $this->abonement = Abonement::where([['srok', '>=', $today], 
                                            ['created_at', '<=', $today],
                                            ['user_id', '=', $this->user->id]])->first();
        $this->sponsorAbonement = null;
        if($this->user->profile->sponsor_id != 0){
            $this->sponsorAbonement = Abonement::where([['srok', '>=', $today], 
                                            ['created_at', '<=', $today],
                                            ['user_id', '=', $this->user->profile->sponsor_id]])->first();
        }
        
    }

    public function getNotifications(){
        return $this->user->notifications->where('readed', '=', 0);
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function getAbonement(){
        return $this->abonement;
    }
    
    public function getSponsorAbonement(){
        return $this->sponsorAbonement;
    }
    
    public function getPhones(){
        return $this->user->profile->phones;
    }
    
    public function getGoods(){
        return $this->goods;
    }
    
    public function getCountGuests(){
        $guests = User::where('blocked','=',0)
                ->whereHas('profile', function ($query) {  
                    $query->where('status_id', '=', 1);
                    $query->where('sponsor', '=', 0);
                    })
                ->whereHas('recommendation', function ($query) {  
                    $query->where('status', '=', 0);
                    $query->where('sponsor', '=', 0);
                    })
                ->count();
        return $guests;
    }
}