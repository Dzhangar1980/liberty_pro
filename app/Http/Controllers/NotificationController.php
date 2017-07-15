<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Notification;

class NotificationController extends Controller
{
    public function SendNotify($notify_text = null, $user = null){
        if($notify_text != null && $user != null){
            $notify = new Notification;
            $notify->text = $notify_text;
            $notify->user_id = $user->id;
            $notify->readed = 0;
            $notify->save();

            
                Mail::queue('emails.notify', ['user' => $user, 'notify' => $notify], 
                    function ($m) use ($user) {                
                        $m->from('liberty.team.club@gmail.com', 'Lberty club');
                        if(strlen(trim($user->semail))>3){
                            $m->to($user->semail, $user->name)->subject('Новое уведомление!');
                        }else{
                            $m->to($user->email, $user->name)->subject('Новое уведомление!');
                        }
                        //$m->attach('milo/images/backgrounds/logo.png');
                    });
            
            
        }
    }
}
