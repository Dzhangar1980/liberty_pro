@extends('layouts.milo-administrator')

@section('css')
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../js/tag-input/jquery.tagsinput.css">
<link href="../js/summernote/summernote.css" rel="stylesheet">
@endsection 

@section('script')
@endsection 

@section('content')

   {!! Form::open(array('url'=>'administrator/update_company_about',
        'method'=>'POST',
        'id'=>'company_about-edit-form',
        'name'=>'company_about-edit-form'
        )) !!}
<fieldset> 
<div class="row">
<div class="col-sm-12"> 
    <div class="col-sm-12">
        <h3>О компании</h3>
    </div>    
</div>
</div> <!-- row -->
<br/>
<div class="row">
<div class="col-sm-12">
    @if($page)
    {!!Form::textarea('content', $page->content, array('id'=>'content', 'required'=>'required', 'class'=>'form-control'))!!}
    @else
    {!!Form::textarea('content', null, array('id'=>'content', 'required'=>'required', 'class'=>'form-control'))!!}
    @endif
</div>
</div> <!-- row -->

<div class="row">
<div class="col-sm-12">
    <div class="col-sm-3">
        <input type="hidden" name="title" value="company_about">
        <button class="btn btn-default" id="submit" type="submit" name="submit">Сохранить</button>
    </div>
    <div class="col-sm-3">
        <a href="contentmanager" class="btn btn-default">Закрыть</a>
    </div>
</div>
</div> <!-- row -->
</fieldset> 
{!!Form::close()!!}
<div id="pictures" style="display: none;" class="modal" role="dialog" title="Images"></div>
<div id="videos" style="display: none;" class="modal" role="dialog" title="Videos"></div>
<div id="thumbnails" style="display: none;" class="modal" role="dialog" title="Thumbnails"></div>
@endsection        
                   
@section('script1')
<!-- include summernote css/js-->
<script src="../js/summernote/summernote.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/tag-input/jquery.tagsinput.js"></script>
<script>
$(document).ready(function() {
  
  var ImageButton = function (context) {
  var ui = $.summernote.ui;
  
  // create button
  var button = ui.button({
    contents: '<i class="fa fa-image"/> Image',
    tooltip: 'Insert image from Media-manager',
    click: function (e) {        
        $('#pictures').dialog({
            width: 660
        }); 
        $.ajax({
            url: "../storage/images",
            success: function(data){                
                var images = '';
                var url = '';
                var i = 0;
                $(data).find("td > a").each(function(){
                // will loop through 
                    i++;
                    if(i>1){
                        url = '../storage/images/'+$(this).attr("href");
                        images = images + '<img src="'+url+'" ';
                        images = images + 'id="sketches'+i+'" class="sketches" '
                                        + 'onclick="insertImage(\''+url+'\')">';
                    }
                });
                $('#pictures').html(images);
            }
        });
        e.preventDefault();
    }
  });

  return button.render();   // return button as jquery object 
}

  var VideoButton = function (context) {
  var ui = $.summernote.ui;
  
  // create button
  var button = ui.button({
    contents: '<i class="fa fa fa-video-camera"/> Video',
    tooltip: 'Insert video from Media-manager',
    click: function (e) {        
        $('#videos').dialog({
            width: 660
        }); 
        $.ajax({
            url: "../storage/videos",
            success: function(data){                
                var images = '';
                var url = '';
                var i = 0;
                $(data).find("td > a").each(function(){
                // will loop through 
                    i++;
                    if(i>1){
                        url = '../storage/videos/'+$(this).attr("href");
                        images = images + '<button onclick="insertVideo(\''+url+'\')">'+$(this).attr("href")+' ';
                        images = images + '</button>';
                    }
                });
                $('#videos').html(images);
            }
        });
        e.preventDefault();
    }
  });

  return button.render();   // return button as jquery object 
}

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
    ['insert', ['link', 'video', 'table', 'hr']],
    ['misc', ['codeview', 'fullscreen']],
    ['mybutton', ['miloimage', 'milovideo']]
  ],
  buttons: {
    miloimage: ImageButton,
    milovideo: VideoButton
  }
});

$('#tags').tagsInput({
   'height':'50px',
   'width':'100%',
   'interactive':true,
   'defaultText':'Теги',
//   'onAddTag':callback_function,
//   'onRemoveTag':callback_function,
//   'onChange' : callback_function,
//   'delimiter': [',',';'],   // Or a string with a single delimiter. Ex: ';'
   'removeWithBackspace' : true,
   'minChars' : 0,
   'maxChars' : 0, // if not provided there is no limit
   'placeholderColor' : '#666666'
});
}); //DOCUMENT READY

$('#thumbnail').click(function(e){
     $('#thumbnails').dialog({
            width: 660
        }); 
    $.ajax({
            url: "../storage/images",
            success: function(data){                
                var images = '';
                var url = '';
                var i = 0;
                $(data).find("td > a").each(function(){
                // will loop through 
                    i++;
                    if(i>1){
                        url = '../storage/images/'+$(this).attr("href");
                        images = images + '<img src="'+url+'" ';
                        images = images + 'id="sketches'+i+'" class="sketches" '
                                        + 'onclick="insertThumbnail(\''+url+'\')">';
                    }
                });
                $('#thumbnails').html(images);
            }
        });
        e.preventDefault();
});

function insertImage(url){
   $('#content').summernote('insertImage', url);
}

function insertThumbnail(url){
   $('#thumbnail').attr('src', url);
   $('#thumbnail_src').val(url);
   
}
function insertVideo(url){
    //var $video;
    var $video = $('video');
    //var $embed;
    var $embed = $('<div>').addClass('videoWrapper');

    $video.appendTo($embed);
    
    $video.controls = true;
    $video.src = url;
    $('#content').summernote('insertNode', $embed[0]);

    //$('#content').summernote('insertText', 'Hello, world');

}
</script>

@endsection 
