{!! Form::open(array('url'=>'cabinet/comment',
        'method'=>'POST',
        'id'=>'comment-form',
        'name'=>'comment-form'
        )) !!}
<fieldset> 
Ваш комментарий
{!!Form::textarea('comment',null, array('placeholder'=>'Ваш комментарий','id'=>'comment', 'required'=>'required', 'class'=>'form-control'))!!}
<br/>
<input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
<input type="hidden" name="article_id" id="article_id" value="{{ $article->id }}">
<button class="btn-liberty btn-liberty-default" id="submit" type="submit" name="submit">Оставить комментарий</button>
</fieldset> 
{!!Form::close()!!}