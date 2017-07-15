<?php

namespace App\Http\Controllers;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Profile;
use Response;

class UserController Extends Controller{
    
    public function getCaptchaForm(){
        return view('forms.captchaform');
    }
    
    public function getBlocked(){
        return view('front.milo-blocked');
    }
    
    public function postRegister(Request $request){
        $server = explode('.', $request->server('HTTP_HOST'));
        $sponsor = Null;
        
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'g-recaptcha-response'=>'required|captcha',
	]);
        
        $password = str_random(6);
       
        $checkMail = User::where('email','=',$request['email'])->first();
        //var_dump($checkMail);
        if($checkMail){
            $err = '<p>Данный адрес электронной почты уже зарегистрирован в системе</p>';
            echo $err;
        }else{
            if(count($server) > 2){
                $sponsor = Profile::where('company_login', '=', $server[0])->first();
            }
            //create new user
            $user = new User;
            $user->name = trim($request['name']);
            $user->email = trim($request['email']);
            $user->semail = trim($request['email']);
            $user->password = bcrypt($password);
            $user->visit = 1;
            if($sponsor != Null){ 
                $user->source = "invite";
            }else{
                $user->source = "public";
            }
            $user->save();

            $profile = new Profile;
            $profile->user_id = $user->id;
            $profile->status_id = 1;
            if($sponsor != Null){ 
                $profile->sponsor = $sponsor->user_id;
                $profile->sponsors = $sponsor->user_id.','.$sponsor->sponsors;
            }
            $profile->save();

            Mail::send('emails.welcome', ['user' => $user, 'password' => $password], 
                    function ($m) use ($user) {                
                    $m->from('liberty.team.club@gmail.com', 'Lberty club');
                    $m->to($user->email, $user->name)->subject('Регистрация в Lberty club');
                    //$m->attach('milo/images/backgrounds/logo.png');
            });
            
            Auth::login($user);
            if (Auth::check()) {    // Пользователь уже вошёл в систему...
                return redirect('cabinet/home?pass='.$password);
            }
            
        }        
    }
    
    public function update_user_password(array $data){
        $user = new User;        
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->visit = 1;
        $user->save();
        return $user;
    }
    
    public function getLogin(){
        return view('front.milo-login');
    }
    
    public function postLogin(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
	]);
        
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            $user = Auth::user();            
            User::where('id', '=', $user->id)->increment('visit');
            $client_ip = $this->get_client_ip();
            $client_agent = $_SERVER['HTTP_USER_AGENT'];
            
            return redirect()->intended('cabinet');
        }else{
            return redirect()->back()->withErrors(['message'=>'Неверный адрес электронной почты и/или пароль!']);
        }
    }
    
    public function forgetPassword(){        
        return view('front.milo-forget-password');
    }
    
    public function postForgetPassword(Request $request){        
        
        //check email exist
        $user = User::where('email','=',$request['email'])->first();
        
        if($user){
            //sending email
            $password = str_random(6);
            User::where('id', '=', $user->id)
                    ->update(['password' => bcrypt($password)]);
            
            Mail::send('emails.reminder', ['user' => $user, 'password' => $password], 
                    function ($m) use ($user) {                
                    $m->from('liberty.team.club@gmail.com', 'Lberty club');
                    $m->to($user->email, $user->name)->subject('Восстановление пароля!');
                    //$m->attach('milo/images/backgrounds/logo.png');
            });
            return redirect('login')->with('message', 'Ваш новый пароль выслан на '.$request['email']);
            
        }else{
            return redirect()->back()->withErrors(['message'=>'Адрес электронной почты в системе НЕ НАЙДЕН !']);            
        }
        
    }
    
    public function findUserByName(Request $request){
        $data = $this->getUsersByNameAndFamily(trim($request->input('side_name')), $request->input('user_id'));
        
        return Response::json($data);        
    }
    
    public function getUsersByNameAndFamily($userNameAndFamily = Null, $user_id){
        if($userNameAndFamily != Null){
            $source_name = explode(' ', $userNameAndFamily);
        }
        
        $user_name = "";
        $user_family = "";
        if(count($source_name)>0){
            $user_name = $source_name[0];
            if(count($source_name)>1){
                $user_family = $source_name[1];
            }
        }
        
        if($userNameAndFamily != ""){
            $data = User::where('name', 'like', '%'.$user_name.'%')
                ->where('family', 'Like', '%'.$user_family.'%')
                ->where('id', '!=', $user_id)
                ->with('profile')
                ->get();
            
            foreach ($data as $row){
                if($row->isOnline()){
                    $row->isOnline = 1; 
                }else{
                    $row->isOnline = 0;
                }
            }
        }else{
            $data = [];
        }
        
        return $data;
    }
    
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}