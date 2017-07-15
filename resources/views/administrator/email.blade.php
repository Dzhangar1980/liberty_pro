@extends('layouts.milo-administrator')

@section('css')
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../js/tag-input/jquery.tagsinput.css">
@endsection 

@section('script')
@endsection 

@section('content')
    @if (Session::has('message'))
       <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

   {!! Form::open(array('url'=>'administrator/sendmail',
        'method'=>'POST',
        'id'=>'article-edit-form',
        'name'=>'article-edit-form'
        )) !!}
<fieldset> 
<div class="row">
    <div class="col-sm-12"> 
        {!!Form::text('title',null, array('placeholder'=>'Заголовок','id'=>'title', 'required'=>'required', 'class'=>'form-control'))!!}
    </div>
    <hr/>
    <div class="col-sm-12">
        {!!Form::text('targets',null, array('placeholder'=>'Адресаты','id'=>'targets', 'class'=>'form-control'))!!}
    </div>
    <div class="col-sm-12">
        <div class="widget-tags">
            <div>
                <a href="#" class="mail_targets" id="target_all">Все</a>
                @foreach($statuses as $status)                    
                    <a href="#" class="mail_targets" id="target_{{ $status->id }}">{{ $status->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        {!!Form::textarea('content', null, array('id'=>'content', 'required'=>'required', 'class'=>'form-control'))!!}
    </div>
</div> <!-- row -->

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-3">
            <button class="btn btn-default" id="submit" type="submit" name="submit">Отправить</button>
        </div>
    </div>
</div> <!-- row -->
</fieldset> 
{!!Form::close()!!}
@endsection        
                   
@section('script1')
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/tag-input/jquery.tagsinput.js"></script>
<script>
$(document).ready(function() {
  
$('#content').summernote({
  dialogsInBody: true,
  height: 350, 
  toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph', 'style']],
    ['height', ['height']],
    ['insert', ['link', 'video', 'picture', 'table', 'hr']],
    ['misc', ['codeview', 'fullscreen']]
  ]
});

$('#targets').tagsInput({
   'height':'auto',
   'width':'100%',
   'interactive':true,
   'defaultText':'Адресаты',
//   'onAddTag':callback_function,
//   'onRemoveTag':callback_function,
//   'onChange' : callback_function,
//   'delimiter': [',',';'],   // Or a string with a single delimiter. Ex: ';'
   'removeWithBackspace' : true,
   'minChars' : 1,
   'maxChars' : 0, // if not provided there is no limit
   'placeholderColor' : '#666666'
});
}); //DOCUMENT READY

$(".mail_targets").click(function(e){
    var me = $(this).html();
    if ($('#targets').tagExist(me)) {
        
    }else{
        $('#targets').addTag(me);
    }
    //console.log(me);
});
</script>

@endsection 
