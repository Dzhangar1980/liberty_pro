<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Response; //Обязательно!

class CommentController extends Controller
{
    
    public function postComment(Request $request){
        
        if(trim($request->input('comment')) != Null){
            $comment = new Comment;
            $comment->user_id = $request->input('user_id');
            $comment->article_id = $request->input('article_id');
            $comment->comment = $request->input('comment');
            $comment->save();
            
            return redirect()->back()->with('message', 'Ваш комментарий опубликован');
        }else{
            return redirect()->back()->with('message', 'Не заполнен текст комментария');
        }
    }

    public function deleteComment(Request $request){
        Comment::destroy($request->input('id'));
        return Response::json(['msg'=>'success']);
    }
    
    public function editComment(Request $request){
        $comment = Comment::find($request->input('id'));
        $comment->comment = $request->input('comment');
        $comment->save();
        return Response::json(['msg'=>'success']);
    }


}
