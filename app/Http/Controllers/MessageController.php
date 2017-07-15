<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\User;
use App\Dialog;
use App\Side;
use App\Message;

class MessageController extends Controller
{
    public function postDialog(Request $request){
        $task = $request->input('task');
        $user_id = $request->input('user_id');
        
        if($task == 'new'){
            $dialog = new Dialog;
            $dialog->user_id = $user_id;
            $dialog->theme = $request->input('theme');
            if($dialog->save()){
                $side = new Side;
                $side->user_id = $user_id;
                $side->dialog_id = $dialog->id;
                if($side->save()){
                    return Response::json(['msg'=>'success']);    
                }
            }            
        }      
    }
    
    public function getDialogs(Request $request){
        $user_id = $request->input('user_id');
        $dialogs0 = Side::select('dialog_id')->where('user_id', '=',$user_id)->get();
        $dialogs1 = [];
        
        foreach ($dialogs0 as $dialog){
            $dialogs1[] = $dialog->dialog_id;
        }
        
        $data = Dialog::where('user_id', '=', $user_id)
                ->orWhereIn('id', $dialogs1)
                ->orderBy('id', 'desc')
                ->get();
        
        foreach ($data as $row){
            $side = Side::where('dialog_id', '=', $row->id)
                    ->where('user_id', '=', $user_id) 
                    ->first(); 
            $row->new = Message::where('updated_at', '>', $side->updated_at)
                    ->where('dialog_id', '=', $row->id)
                    ->count();
            
            $autor = User::find($row->user_id);
            $row->autor = $autor->name.' '.$autor->family;
            $row->autor_photo = $autor->profile['photo']; 
            
            if($row->target_id != 0){
                $target = User::find($row->target_id);
                $row->target = $target->name.' '.$target->family;
                $row->target_photo = $target->profile['photo'];
            }
        }
        
        return Response::json($data);
    }
    
    public function checkNewMessages(Request $request){
        $dialog_id = $request->input('dialog_id');
        $user_id = $request->input('user_id');
        
        if(!empty($dialog_id) && !empty($user_id)){
            $side = Side::where('dialog_id', '=', $dialog_id)
                    ->where('user_id', '=', $user_id) 
                    ->first(); 
        
            $newMessages = Message::where('updated_at', '>', $side->updated_at)
                    ->where('dialog_id', '=', $dialog_id)
                    ->count();
        
            return Response::json($newMessages);
        }else{
            return Response::json('error');
        }
        
    }


    public function loadSides(Request $request){
        $dialog_id = $request->input('dialog_id');
        
        $data = Side::where('dialog_id', '=', $dialog_id)->get();
        
        foreach ($data as $row){
            $user = User::find($row->user_id);
            if($user->isOnline()){
                $row->isOnline = 1;                                 
            }else{
                $row->isOnline = 0;
            }
            $row->name = $user->name; 
            $row->family = $user->family; 
            $row->photo = $user->profile->photo; 
        }
        
        return Response::json($data);
    }
        
    public function deleteDialog(Request $request){
        $dialog_id = $request->input('dialog_id');
        
        Message::where('dialog_id', '=', $dialog_id)->delete();
        Side::where('dialog_id', '=', $dialog_id)->delete();
        Dialog::destroy($dialog_id);
        
        return Response::json(['msg'=>'success']);
    }
    
    public function renameDialog(Request $request){
        $dialog_id = $request->input('dialog_id');
        $dialog = Dialog::find($dialog_id);
        $dialog->theme = $request->input('theme');
        $dialog->save();
            
        return Response::json(['msg'=>'success']);
    }
    
    public function personalMessages(Request $request){
        $tuid = $request->input('tuid');
        $uid = $request->input('uid');
        if($tuid == Null or $uid == Null){
            return redirect()->back();
        }
        //check dialog exist
        $dialog = Dialog::where('user_id','=',$uid)
                ->where('target_id','=',$tuid)->first();
        if($dialog == Null){
            $dialog = Dialog::where('user_id','=',$tuid)
                ->where('target_id','=',$uid)->first();
        }
        
        if($dialog == Null){
            //create new own dialog
            $tuser = User::find($tuid);
            
            $dialog = new Dialog;
            $dialog->user_id = $uid;
            $dialog->target_id = $tuid;
            $dialog->theme = $tuser->name.' '.$tuser->family;
            $dialog->save();
            
            //add sides
            $side0 = new Side;
            $side0->dialog_id = $dialog->id;
            $side0->user_id = $uid;
            $side0->save();
            
            $side1 = new Side;
            $side1->dialog_id = $dialog->id;
            $side1->user_id = $tuid;
            $side1->save();
            
        }
            return redirect('cabinet/dialog?id='.$dialog->id);
       
        
    }
    
    public function addSide(Request $request){
        $dialog_id = $request->input('dialog_id');
        $user_id = $request->input('side_id');
        $flag = 0;
        
        $sides = Dialog::findOrFail($dialog_id)->sides;
        foreach ($sides as $side){
            if($side->user_id == $user_id){
                $flag = 1;
            }
        }
        
        if($flag == 0){
            $new_side = new Side();
            $new_side->dialog_id = $dialog_id;
            $new_side->user_id = $user_id;
            $new_side->save();
            return Response::json(['msg'=>'success']);
        }elseif($flag == 1){
            return Response::json(['msg'=>'exists']);
        }
        
    }
    
    public function checkSide(Request $request){
        $dialog_id = $request->input('dialog_id');
        $user_id = $request->input('user_id');
        $flag = 0;
        
        $sides = Dialog::findOrFail($dialog_id)->sides;
        foreach ($sides as $side){
            if($side->user_id == $user_id){
                $flag = 1;
            }
        }
        
        if($flag == 0){
            return Response::json(['msg'=>'absent']);
        }elseif($flag == 1){
            return Response::json(['msg'=>'present']);
        }
        
    }
    
    public function removeSide(Request $request){
        $side_id = $request->input('side_id');
        $dialog_id = $request->input('dialog_id');
        
        $side = Side::findOrFail($side_id);
        $dialog = Dialog::findOrFail($dialog_id);
        
        if($side->user_id == $dialog->user_id){
            $deletedMessages = Message::where('dialog_id','=',$dialog_id)->delete();
            $deletedSides = Side::where('dialog_id','=',$dialog_id)->delete();
            Dialog::destroy($dialog_id);
        }else{
            Side::destroy($side_id);
        }
        
        return Response::json(['msg'=>'success']);
    }
    
    public function addMessage(Request $request){
        $dialog_id = $request->input('dialog_id');
        $user_id = $request->input('user_id');
        $message_text = $request->input('message');
        
        $message = new Message;
        $message->dialog_id = $dialog_id; 
        $message->user_id = $user_id; 
        $message->message = $message_text; 
        $message->save();
        
        return Response::json(['msg'=>'success']);
    }
    
    public function getMessages(Request $request){
        $dialog_id = $request->input('dialog_id');
        $user_id = $request->input('user_id');
        
        $side = Side::where('dialog_id', '=', $dialog_id)
                    ->where('user_id', '=', $user_id) 
                    ->first(); 
        
        $side->touch();
        
        $messages = Message::where('dialog_id','=',$dialog_id)->get();
        $smiles = ['{smile}', '{tenderness}', '{squinted}', '{wink}', '{cunning}', '{teeth}',
            '{lol}', '{wow}', '{crazy}', '{cool}', '{omg}', '{pondered}', '{silence}',
            '{love}', '{santa}', '{shadow}', '{bully}', '{shame}', '{lookaway}'];
        
        foreach ($messages as $message){
            $user = User::find($message->user_id);
            if($user->isOnline()){
                $message->isOnline = 1;
            }else{
                $message->isOnline = 0;
            }
            $message->message = preg_replace("/\\r\\n?|\\n/", "<br/>", $message->message); 
            foreach ($smiles as $smile){
                $smile_name = str_replace('{','',$smile);
                $smile_name = str_replace('}','',$smile_name);                
                $smile_path = '<img class="smile-chat" src="../images/smiles/'.$smile_name.'.png">';
                $message->message = str_replace($smile, $smile_path, $message->message); 
            }
            $message->user_name = $user->name;
            $message->user_family = $user->family;
            $message->photo = $user->profile['photo'];
        }
        return Response::json($messages);
    }
    
    public function userUnload(Request $request){
        $dialog_id = $request->input('dialog_id');
        $user_id = $request->input('user_id');
        
        $side = Side::where('user_id', '=', $user_id)
                ->where('dialog_id', '=', $dialog_id)
                ->first();
        $side->touch();
    }
}
