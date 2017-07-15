@extends('layouts.milo-cabinet')

@section('css')
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-toggle/css/bootstrap-toggle.min.css">
@endsection

@section('script')
@endsection 

@section('content')
<div class="row">
<div class="col-sm-9" id="dialog_name">
    <p>
        <?php 
        if($dialog->target_id == 0){
            echo $dialog->theme;
        }else{
            if($dialog->user_id == $user->id){
                echo $target->name.' '.$target->family;
            }
            if($dialog->target_id == $user->id){
                echo $autor->name.' '.$autor->family;
            }
        }
        echo ' <font color="#ccc">'.date('d.m.Y г. ', strtotime($dialog->updated_at)).'</font>'; 
        ?>
    </p>    
</div>
@if($dialog->user_id == $user->id)
@if($dialog->target_id == 0)
<div class="col-sm-3">
    <span class="fa fa-plus-circle btn btn-default" title="Добавить собесебника" onclick="$('#find_side').show();$('#side_name').focus();"></span>
</div>
</div>
<div class="row">
    <div id="find_side" style="display: none;">
        <div class="col-sm-6" style="text-align: right;">
            <input type="text" name="side_name" id="side_name" style="width: 300px" placeholder="Имя Фамилия">
        </div>
        <div class="col-sm-6" style="text-align: left;">
            <button class="btn-liberty btn-liberty-black" onclick="find_side()">Найти</button>
            <button class="btn-liberty btn-liberty-black" onclick="$('#find_side').hide()">Закрыть</button>
        </div>
        <div id="select_sides"></div>        
    </div>
</div>
@endif
@endif

<div class="row">
    <div class="col-sm-12">
        <div id="selected_sides" style="margin-bottom: 70px;"></div>
    </div>
</div>

<div class="row">
<div class="col-sm-12">
    <div class="messages" id="messages">
    </div>
    <a id="go-down" style="display: none;">
        <i class="miu-icon-circle_arrow-down_download_glyph">
            <span style="font-size: 17px;position: absolute;left: -120px;top: 2px;color: #337ab7;">
                Есть новые сообщения...</span>
        </i>
    </a>
</div>
</div>
    
<hr>
<div id="new_message">
    <div class="row">
        <div class="col-sm-12">
            <textarea id="new_message_text" rows="5" maxlength="255" autofocus></textarea>
        </div>
    </div>
    <div class="row">
        <div style="width: 95%; margin-top: 10px;">
            <div class="col-sm-12">
                <div id="smiles" style="display: none;">
                    <img onclick="insertSmile('{smile}')" class="smile-trb" src="../images/smiles/smile.png">
                    <img onclick="insertSmile('{tenderness}')" class="smile-trb" src="../images/smiles/tenderness.png">
                    <img onclick="insertSmile('{squinted}')" class="smile-trb" src="../images/smiles/squinted.png">
                    <img onclick="insertSmile('{wink}')" class="smile-trb" src="../images/smiles/wink.png">
                    <img onclick="insertSmile('{cunning}')" class="smile-trb" src="../images/smiles/cunning.png">
                    <img onclick="insertSmile('{teeth}')" class="smile-trb" src="../images/smiles/teeth.png">
                    <img onclick="insertSmile('{lol}')" class="smile-trb" src="../images/smiles/lol.png">
                    <img onclick="insertSmile('{wow}')" class="smile-trb" src="../images/smiles/wow.png">
                    <img onclick="insertSmile('{crazy}')" class="smile-trb" src="../images/smiles/crazy.png">
                    <img onclick="insertSmile('{cool}')" class="smile-trb" src="../images/smiles/cool.png">
                    <img onclick="insertSmile('{omg}')" class="smile-trb" src="../images/smiles/omg.png">
                    <img onclick="insertSmile('{pondered}')" class="smile-trb" src="../images/smiles/pondered.png">
                    <img onclick="insertSmile('{silence}')" class="smile-trb" src="../images/smiles/silence.png">
                    <img onclick="insertSmile('{love}')" class="smile-trb" src="../images/smiles/love.png">
                    <img onclick="insertSmile('{santa}')" class="smile-trb" src="../images/smiles/santa.png">
                    <img onclick="insertSmile('{shadow}')" class="smile-trb" src="../images/smiles/shadow.png">
                    <img onclick="insertSmile('{bully}')" class="smile-trb" src="../images/smiles/bully.png">
                    <img onclick="insertSmile('{shame}')" class="smile-trb" src="../images/smiles/shame.png">
                    <img onclick="insertSmile('{lookaway}')" class="smile-trb" src="../images/smiles/lookaway.png">
                </div>
            </div>
        </div>
        <div style="width: 95%">
        <div class="col-xs-2" style="text-align: left;">
            <span onclick="$('#smiles').toggle()" id="smiles-btn" class="fa fa-smile-o btn btn-default" 
                  style="height: 35px;font-size: medium; margin-top: 10px;"></span>
        </div>
        <div class="col-xs-4" style="text-align: left;">
            <div class="checkbox">
                <label>
                  <input type="checkbox" data-toggle="toggle" data-on="Отключен" data-off="Автоскролл" 
                         id="checkChatScroll">     
                </label>
            </div>
        </div>
        <div class="col-xs-6" style="text-align: right;">
            <span class="fa fa-eraser btn btn-default" 
                  style="height: 35px;font-size: medium; margin-top: 10px;"
                  onclick="$('#new_message_text').val('')"> Очистить</span>
            <span class="fa fa-send-o btn btn-default" 
                  style="height: 35px;font-size: medium; margin-top: 10px;"
                  onclick="addMessage(<?php echo $dialog->id.','.$user->id; ?>)"> Отправить</span>
        </div>
        </div>
    </div>
    
</div>
    
@endsection

@section('script1')
<!-- Форматирование даты и времени JS -->
<script src="../js/date.format.js"></script>
<script src="../css/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
<script>
    var scrollCount = 1;
    
    function scrollMessages(){
        var objDiv = document.getElementById("messages");
        objDiv.scrollTop = objDiv.scrollHeight;
    }
    
    function checkSide(dialog_id){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['dialog_id'] = dialog_id; 
        mydata['user_id'] = <?php echo $user->id; ?>;        
        
        $.ajax({
		method: "POST",
		url: "./check_side",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']==='absent'){
                        //redirect
                        window.location = "dialogs";
                    }
                    if(response['msg']==='present'){
                        console.log('You are present at this dialog');
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
    
    function loadSides(dialog_id){
        checkSide(dialog_id);
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['dialog_id'] = dialog_id; 
        
        $.ajax({
		method: "POST",
		url: "./load_sides",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    //console.log(response);
                    var html = '';                   
                    response.forEach(function(item, i, response) {
                            html = html + '<div class="col-sm-1">';                            
                            html = html + '<div class="circle-small"><img src="../images/users/avatars/'+item['photo']+'" ';
                            if(item['isOnline'] === 1){
                                html = html + 'style="opacity: 1;"';
                            }else{
                                html = html + 'style="opacity: 0.5;"';
                            }
                            html = html + ' title="'+item['name']+' '+item['family']+' ';
                            if(item['isOnline'] === 1){
                                html = html + 'онлайн';
                            }else{
                                html = html + 'офлайн';
                            }
                            html = html + '">';
                                if(item['user_id'] !== <?php echo $user->id ?>){
                                    if(<?php echo $dialog->user_id ?> === <?php echo $user->id ?>){
                                    html = html + '<div class="removeSide btn btn-default fa fa-times" ';
                                    html = html + 'title="Исключить" onclick="removeSide('+item['id']+', <?php echo $dialog->id; ?>)"';
                                    html = html + '></div>';
                                    }
                                }else if (item['user_id'] === <?php echo $user->id ?>) {
                                    html = html + '<div class="removeSide btn btn-default fa fa-times" ';
                                    html = html + 'title="Покинуть диалог" onclick="removeSide('+item['id']+', <?php echo $dialog->id; ?>)"';
                                    html = html + '></div>';
                                }
                            html = html + '</div>';
                            html = html + '</div>';
                            
                    });
                    $('#selected_sides').html(html);
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
    
    function find_side(){
        var side_name = $('#side_name').val();
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['side_name'] = side_name; 
        mydata['user_id'] = <?php echo $user->id; ?>; 
        
        $.ajax({
		method: "POST",
		url: "./find_user_by_name",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    var html = '';
                    response.forEach(function(item, i, response) {
                        html = html + '<div class="row">';
                        html = html + '<div class="col-sm-12">';
                            html = html + '<div class="side">';
                                html = html + '<div class="circle">';
                                    html = html + '<img src="../images/users/avatars/'+item.profile.photo+'">';
                                html = html + '</div>';                    
                            if(item['isOnline'] === 1){
                                html = html + '<span id="online" style="color:lime;" class="fa fa-circle"></span>';
                            }else{
                                html = html + '<span id="online" style="color:grey;" class="fa fa-circle"></span>';
                            }
                                html = html + '<div class="side-title">';
                                    html = html + '<h4>' + item['name'] + ' ' + item['family']+ '</h4>';
                                html = html + '</div>';
                                html = html + '<span id="addSide" class="fa fa-plus-circle btn btn-default" title="Добавить собесебника" \n\
                                               onclick="addSide('+item['id']+', <?php echo $dialog->id; ?>)"> Добавить</span>';
                                
                            html = html + '</div>';
                        html = html + '</div>';
                        html = html + '</div>';
                        
                        html = html + '<div class="row">';
                            html = html + '<div class="col-sm-12">';
                                html = html + '<div id="side_status">';
                                html = html + '</div>';
                            html = html + '</div>';
                        html = html + '</div>';
                    });                   
                    $('#select_sides').html(html);
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
    
    function addSide(side_id, dialog_id){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['side_id'] = side_id;           
        mydata['dialog_id'] = dialog_id;           
        
        $.ajax({
		method: "POST",
		url: "./add_side",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    var html = '';
                    if(response['msg']==='success'){
                        loadSides(dialog_id);
                        html = 'Добавлен';
                    }
                    if(response['msg']==='exists'){
                        html = 'Уже участвует в диалоге';
                    }
                    $('#side_status').html(html);
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
        
    }
    
    function removeSide(side_id, dialog_id){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;
        mydata['side_id'] = side_id;         
        mydata['dialog_id'] = dialog_id;         
        
        $.ajax({
		method: "POST",
		url: "./remove_side",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']==='success'){
                        loadSides(dialog_id);
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });        
    }
    
    function addMessage(dialog_id, user_id){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        var new_message_text = document.getElementById('new_message_text').value.replace(/\n+/g,'\n');
        //console.log(new_message_text.length);
        //console.log();
        
        if(new_message_text.length > 1){
            mydata['_token'] = token;           
            mydata['dialog_id'] = dialog_id;         
            mydata['user_id'] = user_id;
            mydata['message'] = new_message_text;
            $.ajax({
                    method: "POST",
                    url: "./add_message",
                    cache: false,
                    data: mydata,
                    dataType: 'json', 
                    success: function (response) {
                        if(response['msg']==='success'){
                            $('#new_message_text').val('');
                            loadMessages(dialog_id);
                        }
                        $('#new_message_text').attr('rows', '5');
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
            });        
        }
    }
    
    function loadMessages(dialog_id){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['dialog_id'] = dialog_id; 
        mydata['user_id'] = <?php echo $user->id; ?>; 
        $.ajax({
		method: "POST",
		url: "./get_messages",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    //console.log(response);
                    var html = '';                   
                    var flag_autor = 0;
                    
                    response.forEach(function(item, i, response) {
                        var date_time = new Date(item['updated_at']);
                        
                        html = html + '<div class="message">'; 
                            html = html + '<div class="row">';
                            html = html + '<div class="col-sm-2">';  
                            if(flag_autor !== item['user_id']){
                                html = html + '<div class="circle">';
                                html = html + '<a href="user?id='+item['user_id']+'" target="_blank">';
                                html = html + '<img src="../images/users/avatars/' + item['photo'] + '" ';
                                if(item['isOnline'] === 1){
                                    html = html + 'style="opacity: 1;"';
                                }else if (item['isOnline'] === 0) {
                                    html = html + 'style="opacity: 0.5;"';
                                }
                                html = html + ' title="' + item['user_name'] + ' ' + item['user_family']+ '"';
                                html = html + '>';
                                html = html + '</a>';
                                html = html + '</div>';
                            }
                            html = html + '</div>';  
                            
                            html = html + '<div class="col-sm-10">';
                            html = html + '<p>' + '<span style="font-size:14px;color:#ccc;">' + date_time.format("dd.mm.yyyy г. H:M ч.")+'</span><br/>';
                            html = html + '<span style="font-size:14px">' + item['message'] + '</span></p>';
                            html = html + '</div>';
                        html = html + '</div>';
                        flag_autor = item['user_id'];
                    });
                    
                    $('.messages').html(html);
                    
                    if (window.scrollCount === 1){
                        scrollMessages();                      
                    }
                    window.scrollCount ++;
                    if ($('#checkChatScroll').prop('checked') === false){
                        scrollMessages();                      
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });               
    }
    
    function insertSmile(smile){
        var $new_message_text = jQuery("#new_message_text");
        var caretPos = $new_message_text[0].selectionStart;
        var textAreaTxt = $new_message_text.val();
        var txtToAdd = smile;
        var newPos = caretPos + smile.length;
        $new_message_text.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos));
        $new_message_text.focus();
        $new_message_text.selectRange(newPos, newPos);
    }
    
    $.fn.selectRange = function(start, end) {
        if(!end) end = start; 
            return this.each(function() {
                if (this.setSelectionRange) {
                    this.focus();
                    this.setSelectionRange(start, end);
                } else if (this.createTextRange) {
                    var range = this.createTextRange();
                    range.collapse(true);
                    range.moveEnd('character', end);
                    range.moveStart('character', start);
                    range.select();
                }
            });
    };
    
    function scrollIntoView(eleID) {
        var e = document.getElementById(eleID);
        if (!!e && e.scrollIntoView) {
            e.scrollIntoView();
        }
    }
     
    function ChatScrollToggle(){
        console.log($('#checkChatScroll').prop('checked'));
        
        if ($('#checkChatScroll').prop('checked') === true){
        }
        if ($('#checkChatScroll').prop('checked') === false){
        }
        
        console.log($('#checkChatScroll').prop('checked'));
    }
    
    $("#new_message_text").on('keyup', function (e) {
        var new_message_text = $("#new_message_text").val();
        //console.log(new_message_text.length);
        if(new_message_text.length >= 50 && new_message_text.length < 100){
            $("#new_message_text").attr('rows', 3);
        }

        if(new_message_text.length >= 100 && new_message_text.length < 150){
            $("#new_message_text").attr('rows', 4);
        }

        if(new_message_text.length > 150){
            $("#new_message_text").attr('rows', 5);
        }

        if (e.keyCode === 13) {
            var rows = $("#new_message_text").attr('rows');
            $("#new_message_text").attr('rows', Number(rows)+1);
        }

        if (e.ctrlKey && e.keyCode === 13) {
            addMessage(<?php echo $dialog->id.','.$user->id; ?>);
        }
    });
    
    $(window).unload(function(){ 
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['dialog_id'] = <?php echo $dialog->id; ?>;         
        mydata['user_id'] = <?php echo $user->id; ?>;         
        
        $.ajax({
		method: "POST",
		url: "./user_unload",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    console.log('ok');
		},
		error: function (data) {
                   console.log('Error:', data);
                }
        });        
    });
    
    function checkNewMessages(){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['dialog_id'] = <?php echo $dialog->id; ?>;         
        mydata['user_id'] = <?php echo $user->id; ?>;         
        
        $.ajax({
		method: "POST",
		url: "./checkNewMessages",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    console.log(response);
                    
                    if(response > 0){
                        loadMessages(<?php echo $dialog->id; ?>);
                        if($('#checkChatScroll').prop('checked') === true){
                           $('#go-down').show('slow');
                        }
                    }
		},
		error: function (data) {
                   console.log('Error:', data);
                }
        });
    }
    
    if(<?php echo $dialog->target_id ?> === 0){
        setInterval("loadSides(<?php echo $dialog->id; ?>)",10000);
    }    
    //setInterval("loadMessages(<?php echo $dialog->id; ?>)",5000);
    setInterval("checkNewMessages()",5000);
    
    $('#go-down').click(function(){
        scrollMessages();
        $('#go-down').hide('slow');
    });
</script>

<script>    
    
    $(document).ready(function() {
        Date.prototype.format = function (mask, utc) {
            return dateFormat(this, mask, utc);
        };
        
        $("#new_message_text").focus();
        if(<?php echo $dialog->target_id ?> === 0){
            loadSides(<?php echo $dialog->id; ?>);
        }
        loadMessages(<?php echo $dialog->id; ?>);
        $('html, body').animate({
            scrollTop: $("#dialog_name").offset().top
        }, 2000);
        console.log($('#checkChatScroll').prop('checked'));
    });
</script>
@endsection
