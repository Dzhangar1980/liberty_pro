@extends('layouts.milo-administrator')

@section('css')
@endsection 

@section('script')
@endsection 

@section('content')
<div class="row">
<div class="col-sm-12">
    @if(count($comments) > 0)
        <ul class="commentlist">
        @foreach($comments as $comment)                        
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
            <hr/>
            <div class="reply">
                <button class="btn btn-default" onclick="delete_comment({{ $comment->id }})">Удалить</button>
            </div><!-- replay -->
            </div><!-- comment-body -->
            </li>
       @endforeach
       </ul> 
    @else
        <h2>Комментарии отсутствуют</h2>
    @endif
</div>
<div class="col-sm-12">
    {!! $comments->render() !!}
</div>
</div>
@endsection        
                   
@section('script1')
<script>
$(document).ready(function() {
    
});
function delete_comment(id){
    var isSure = confirm("Точно удалить?");
    if(isSure == true){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
            mydata['_token'] = token;           
            mydata['id'] = id;
        
            $.ajax({
		method: "POST",
		url: "./comment-delete",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        $('#comment'+id).remove();
                    }
                        
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
}        
</script>
@endsection       