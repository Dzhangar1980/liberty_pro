@extends('layouts.milo-cabinet')
@section('content')
<div class="row">
<div class="col-sm-12">
    <h2>Диалоги</h2>
</div>
</div>
<div class="row">
    <div id="new_dialog">
        <div class="col-sm-6" style="text-align: right;">
            <input type="text" name="new_theme" id="new_theme" style="width: 300px" placeholder="Тема беседы">
        </div>
        <div class="col-sm-6" style="text-align: left;">
            <button class="btn-liberty btn-liberty-black" onclick="new_dialog({{ $user->id }}, 'new')">Создать</button>
        </div>
    </div>
</div>
<div class="row">
<div class="col-sm-12">
    <div id="dialogs">
    </div>
</div>
</div>
    
@endsection

@section('script1')
<!-- Форматирование даты и времени JS -->
<script src="../js/date.format.js"></script>

<script>
    $(document).ready(function() {    
        loadDialogs(<?php echo $user->id; ?>);
    });

    function loadDialogs(user_id){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['user_id'] = user_id; 
        
        $.ajax({
		method: "POST",
		url: "./get_dialogs",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    //console.log(response);
                    var html = '';
                    response.forEach(function(item, i, response) {
                        //var updated_at = new Date(item['updated_at']); //???
                        var date_time = new Date(item['updated_at']);
                        html = html + '<div class="dialog">';
                        html = html + '<div class="row">';                        
                        
                        html = html + '<div class="col-sm-2">';
                        html = html + '<div class="dialog-icon">';
                        html = html + '<div class="circle" style="float:none;">';
                        if (item['target_id'] === 0) {
                            html = html + '<a href="dialog?id='+item['id']+'">';
                            html = html + '<span class="el el-group" style="font-size: -webkit-xxx-large;"></span>';
                            html = html + '</a>';
                        }else{                            
                            html = html + '<a href="dialog?id='+item['id']+'">';
                            if(item['user_id'] === <?php echo $user->id ?>){
                                html = html + '<img src="../images/users/avatars/' + item['target_photo'] + '">';
                            }
                            if(item['target_id'] === <?php echo $user->id ?>){
                                html = html + '<img src="../images/users/avatars/' + item['autor_photo'] + '">';
                            }
                            html = html + '</a>';
                        }
                        html = html + '</div>'; //circle 
                        html = html + '</div>'; //dialog-icon
                        html = html + '</div>'; //col-sm-2
                        
                        html = html + '<div class="col-sm-6">';
                        html = html + '<div class="dialog-title">';
                        html = html + '<b><a href="dialog?id='+item['id']+'">';
                        if (item['target_id'] === 0) {
                            html = html + item['theme'] + '';
                        }else{
                            if(item['user_id'] === <?php echo $user->id ?>){
                                html = html + item['target'] + ' ';
                            }
                            if(item['target_id'] === <?php echo $user->id ?>){
                                html = html + item['autor'] + ' ';
                            }
                        }
                        html = html + '</a></b>';
                        html = html + '</div>'; //dialog-title                        
                        html = html + '<div class="dialog-last-message">'; 
                        html = html + ''; 
                        html = html + '</div>'; //dialog-last-message
                        html = html + '</div>'; //col-sm-6
                        
                        html = html + '<div class="col-sm-4">';
                        html = html + '<div class="dialog-date">';
                        html = html + date_time.format("dd.mm.yyyy г.") + " ";
                        html = html + '</div>';
                        
                        if(item['new'] != 0){
                            html = html + '<div class="count_new">';
                            html = html + item['new'];
                            html = html + '</div>';
                        }
                        
                        html = html + '<div class="dialog-commands">';                        
                        if(item['user_id'] === <?php echo $user->id ?>){
                            html = html + '<i class="fa fa-close btn btn-default delete" onclick="deleteDialog('
                                    +item['id']
                                    +',<?php echo $user->id; ?>)"> Удалить</i>';
                            if (item['target_id'] === 0) {
                            html = html + '<i class="fa fa-pencil btn btn-default" onclick="$(\'#renameDialog'+item['id']+'\').show();$(\'#themeDialog'+item['id']+'\').focus();"> Переименовать</i>';
                            html = html + '<div class="renameDialog" id="renameDialog'+item['id']+'">';
                            html = html + '<input type="text" id="themeDialog'+item['id']+'" style="width: 200px" placeholder="Тема беседы">';
                            html = html + '<button class="btn-liberty btn-liberty-black" onclick="renameDialog('+item['id']+',<?php echo $user->id; ?>)">Сохранить</button>';
                            html = html + '<button class="btn-liberty btn-liberty-black" style="float: none;" onclick="$(\'#renameDialog'+item['id']+'\').hide()">Закрыть</button>';
                            html = html + '</div>';
                            }
                        }
                        html = html + '</div>'; //dialog-commands
                        html = html + '</div>'; //col-sm-4
                        html = html + '</div>'; //row
                        html = html + '</div>'; //dialog
                    });
                    //console.log(html);
                    $('#dialogs').html(html);

		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
    
    function new_dialog(user_id, task){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['user_id'] = user_id; 
        mydata['task'] = task; 
        mydata['theme'] = $('#new_theme').val(); 
        
        $.ajax({
		method: "POST",
		url: "./new_dialog",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        loadDialogs(user_id);
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
    
    function deleteDialog(dialog_id, user_id){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['dialog_id'] = dialog_id;
      
        $.ajax({
		method: "POST",
		url: "./delete_dialog",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        loadDialogs(user_id);
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
    
    function renameDialog(dialog_id, user_id){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['dialog_id'] = dialog_id;
        mydata['theme'] = $('#themeDialog'+dialog_id).val();
      
        $.ajax({
		method: "POST",
		url: "./rename_dialog",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        loadDialogs(user_id);
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
    
    //setInterval("loadDialogs(<?php //echo $user->id; ?>)",5000);
</script>        
@endsection
