@extends('layouts.milo-cabinet')

@section('css')
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection 

@section('content')

<div class="row">
<br>
<?php 
?>
@if($id == Null) 
    @if(count($articles) > 0)
    
    @if($tags != Null) 
    <div class="col-sm-12" align="center">
        <div class="widget widget-tags">
            <div>
                <a href="./news">Все новости</a>
                @foreach($tags as $tag)                    
                    <a href="./news?tag={{ $tag }}">{{ $tag }}</a>
                @endforeach
            </div>
        </div>
    </div>
    @endif
        @foreach($articles as $article)
        @if($article->status_id <= $user->profile->status_id)
        <div class="col-sm-12">          
            <div class="blog-article">
                <div class="col-sm-9">
                    <div class="blog-article-details">
                        <h4><?php echo date("d/m/Y", strtotime($article->updated_at)); ?></h4>
                        <h3><a href="./news?id={{ $article->id }}">{{ $article->title }}</a></h3>
                        <p>
                            @if($article->tags != "")
                            <i class="miu-icon-editor_folder_add_outline_stroke" style="color: #88A8EA"></i>
                                <?php
                                $tags = explode(',', $article->tags);
                                foreach ($tags as $tag){
                                    echo '<a href="./news?tag='.$tag.'" style="color: #88A8EA">'.$tag.'</a> <span style="color: #88A8EA">|</span>';
                                }
                                ?>                             
                                <br class="visible-xs">
                            @endif
                            
                            <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke" style="color: #88A8EA"></i>
                            <a href="./news?id={{ $article->id }}#comments" style="color: #88A8EA">{{ count($article->comments) }}</a>
                        </p>

                    </div><!-- blog-article-details -->       
                
                </div>
                
                <div class="col-sm-3">
                    @if($article->thumbnail != 'no')
                    <div class="blog-article-thumbnail">
                        <img src="{{ $article->thumbnail }}" alt="" style="max-height: 100px;"> 					
                    </div><!-- blog-article-thumbnail -->
                    @endif
                </div>
            </div><!-- blog-article -->
            <hr width="100%" style="color: #f8f8f8;border: 2px solid #f8f8f8;">
        </div>    
        @endif
        @endforeach
        <div class="col-sm-12">
            {!! $articles->render() !!}
        </div> 
    @else
        <h2>Новостей нет</h2>
    @endif
@else
<div class="col-sm-12">
                    	
                        <div class="blog-article">
                        	@if ( session()->has('message') )
                                    <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                                @endif
                            <!-- <div class="blog-article-thumbnail">
                            	<img src="{{ $article->thumbnail }}" alt="">
                            </div><!-- blog-article-thumbnail -->
                            
                            <div class="blog-article-details">
                                
                                <h4><?php echo date("j F Y", strtotime($article->updated_at)); ?></h4>
                                <h2>{{ $article->title }}</h2>
                                
                                <p> 
                                    @if($article->tags != "")
                                        <i class="miu-icon-editor_folder_add_outline_stroke"></i>
                                        <?php
                                        $tags = explode(',', $article->tags);
                                        foreach ($tags as $tag){
                                            echo '<a href="./news?tag='.$tag.'">'.$tag.'</a> | ';
                                        }
                                        ?>                                
                                        <br class="visible-xs">
                                    @endif

                                    <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>
                                    <a href="./news?id={{ $article->id }}#comments">{{ count($article->comments) }}</a>
                                </p>
                                                                   
                            </div><!-- blog-article-details -->
                            
                            {!! $article->content !!}
                        <hr/>
                        <a name='comments'></a>
                        <h3 class="commentlist-title">Комментарии</h3>
                        @if(count($article->comments) > 0)
                        <ul class="commentlist">
                            @foreach($article->comments as $comment)                        
                            <li class="comment even thread-even depth-1" id="comment{{ $comment->id }}">
                            	<div class="comment-body">
                                	
                                    <div class="comment-meta">
                                    	
                                        <div class="comment-author vcard">
                                        	
                                            <img class="avatar avatar-80 photo" src="../images/users/avatars/{{ $comment->user->profile['photo'] }}" alt=""  height='80' width='80'>										
                                            {{ $comment->user->name }} {{ $comment->user->family }} 
                                            <span class="says">says:</span>
                                            
                                        </div><!-- comment-author vcard -->
                                        
                                         <div class="comment-metadata">
                                            <?php echo date("j F Y", strtotime($comment->updated_at)); ?>
                                        </div><!-- comment-metadata -->
                                        
                                    </div><!-- comment-meta --> 
                                    
                                    <div class="comment-content" id='comment-body{{ $comment->id }}'>
                                    	
                                       {{ $comment->comment }}
                                        
                                    </div><!--  comment-content -->
                                    @if($comment->user->id == $user->id)
                                    <hr/>
                                    <div class="reply">
                                        <button class="btn btn-default" onclick="delete_comment({{ $comment->id }})">Удалить</button>
                                        <button class="btn btn-default" onclick="edit_comment({{ $comment->id }})">Редактировать</button>
                                    </div><!-- replay -->
                                    @endif
                                </div><!-- comment-body -->
                                <div id="comment-edit-confirm{{ $comment->id }}" style="display: none;" class="modal" role="dialog" title="Редактирование комментария">
                                    <textarea id="comment_text{{ $comment->id }}" style="width: 100%;">{{ $comment->comment }}</textarea>
                                </div>

                            </li>
                            @endforeach
                        </ul>                        
                        @else
                            <h5>Оставьте первый комментарий!</h5>
                        @endif
                        
                        @if($user_abonement == Null)
                            <h5 class="alert alert-warning">Комментирование доступно только участникам Клуба</h5>
                        @else
                            @if(strtotime($user_abonement->srok)- time() > 0)
                                <!-- comments form -->
                                <?php //echo floor((strtotime($user_abonement->srok)- time()) / (60 * 60 * 24)); ?>
                                @section('comments')
                                    @include('forms.comment')
                            `   @show  
                        
                            @else
                                <h5 class="alert alert-warning">Комментирование доступно только участникам Клуба
                                    <br/>Ваша клубная карта не активна</h5>
                            @endif
                        @endif
                        <?php
                                    //var_dump($user_abonement);
                        ?>
                        
                    </div><!-- col -->
@endif
</div>
<div id="comment-delete-confirm" style="display: none;" class="modal" role="dialog" title="Ваш комментарий будет удален">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>
        Ваш комментарий будет удален навсегда. Вы уверены?</p>
</div>

</div>
@endsection       

@section('script1')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$(document).ready(function() {    
});
        
function delete_comment(comment_id){
    var token  = $('meta[name=_token]').attr('content');
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
    var mydata = {};
    mydata['_token'] = token;           
    mydata['id'] = comment_id; 
                
    $("#comment-delete-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "Удалить": function() {
          
        $.ajax({
		method: "POST",
		url: "./delete_comment",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        $('#comment'+comment_id).remove();
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
          
          $( this ).dialog( "close" );
        },
        "Отменить": function() {
          $( this ).dialog( "close" );
        }
      }
    });    
}

function edit_comment(comment_id){
    var token  = $('meta[name=_token]').attr('content');
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
    
    $("#comment-edit-confirm"+comment_id ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "Сохранить": function() {
            var comment_text = $('#comment_text'+comment_id).val();
            var mydata = {};
            mydata['_token'] = token;           
            mydata['id'] = comment_id; 
            mydata['comment'] = comment_text; 
    
            $.ajax({
		method: "POST",
		url: "./edit_comment",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        $('#comment-body'+comment_id).html(comment_text);
                    }
                        
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
          
          $( this ).dialog( "close" );
        },
        "Отменить": function() {
          $( this ).dialog( "close" );
        }
      }
    });    
}
</script>
    
@endsection       

