@extends('layouts.milo-cabinet')

@section('css')
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../js/jquery.imgareaselect/css/imgareaselect-default.css" />
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@endsection

@section('content')
	<br>
    <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Профиль</font></h2>
	<br>
        <ul class="nav nav-tabs">
            <li @if($tab == 1)
                    class="active"
                @endif
                ><a href="#tab-1-1" data-toggle="tab">Фотография</a></li>
            <li @if($tab == 2)
                    class="active"
                @endif
                ><a href="#tab-1-2" data-toggle="tab">Личные данные</a></li>
            <li @if($tab == 3)
                    class="active"
                @endif
                ><a href="#tab-1-3" data-toggle="tab">Контакты</a></li>
            <li @if($tab == 4)
                    class="active"
                @endif
                ><a href="#tab-1-4" data-toggle="tab">Данные в Компании</a></li>
        </ul>                                            
                            
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-1-1">                                            
                <p class="text-uppercase" align="center"><strong>Загрузите фото и выделите нужную область</strong></p>
                <div class="row">
                    <form action="save_avatar" id="upload_form" role="form" enctype="multipart/form-data" method="post">
                        <div class="col-sm-12" style="text-align: center;">
							@if($user->profile['photo'] == NULL)
							<img id="avatar" src="../images/users/avatars/nophoto.png" 
                            style="max-height: 300px; max-width: 300px; position: relative; left: 50%;margin-left: -150px;"
                            title="Ваша фотография">
							@else
                            <img id="avatar" src="../images/users/avatars/avatar{{ $user->profile['user_id'] }}.jpg" 
                            style="max-height: 300px; max-width: 300px; position: relative; left: 50%;margin-left: -150px;"
                            title="Ваша фотография">
							@endif
                        </div>
                        <div class="col-sm-12">
                            <br>
							<p align="center">
                            <input class="btn-liberty btn-liberty-black" name="image" id="image" size="30" type="file" accept="image/jpeg"/> 
                            
                            <div class="progress" id="progress-bar" style="display: none;">                 
                                <div class="progress-bar animated" data-width="85" style="width: 85%;"></div>
                            </div><!-- progess -->
                            
                            <div class="progress-bar-title" id="progress-bar-title" style="display: none;">
                                <h5>Загрузка <span style="left:85%">85%</span></h5>
                            </div><!-- progress-bar-title -->
							</p>
                        </div>
                <hr/>
                        <div class="col-sm-12">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <input type="hidden" name="x1" value="0" />
                            <input type="hidden" name="y1" value="0" />
                            <input type="hidden" name="x2" value="50" />
                            <input type="hidden" name="y2" value="50" />
                            <input type="hidden" name="image_width" value="" />
                            <input type="hidden" name="image_height" value="" />
                            <input type="hidden" name="temp_image" id="temp_image" value="" />
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            
							<p align="center">
                            <input type="submit" value="Сохранить" id="btn-submit" style="display: none" class="btn-liberty btn-liberty-black"/>
							</p>
							<hr/>
                        </div>  
                    </form>
                </div>
            </div><!-- tab-pane -->
            
            <div class="tab-pane fade" id="tab-1-2">                                            
                <p class="text-uppercase" align="center"><strong>Заполните обязательные поля, после чего нажмите "Сохранить"</strong></p>            
           
        {!! Form::open(array('url'=>'cabinet/updateProfile',
        'method'=>'POST', 'id'=>'profile-form', 'name'=>'profile-form'
        )) !!}
        <fieldset>      
        Имя*
        {!!Form::text('name',$user->name, array('placeholder'=>'обязательное поле','id'=>'name', 'class'=>'form-control'))!!}
        {!! $errors->first('name','<p class="alert alert-danger">:message</p>')!!}
        Фамилия*
        {!!Form::text('family',$user->family, array('placeholder'=>'обязательное поле','id'=>'family', 'class'=>'form-control'))!!}
        {!! $errors->first('family','<p class="alert alert-danger">:message</p>')!!}
        Электронная почта (login)
        {!!Form::email('email',$user->email, array('placeholder'=>'Email','id'=>'email', 'class'=>'form-control', 'disabled'=>'disabled'))!!}
        {!! $errors->first('email','<p class="alert alert-danger">:message</p>')!!}
        
        <?php 
        if($user->profile->status_id >= 3){
            $semail_display = '';
        }else{
            $semail_display = 'display: none';
        }        
        ?>
        <div style="{{ $semail_display }}">
            <div class="radio">
                <h5>Получать уведомления на </h5>
                <input id="0" type="radio" name="semail" value="0" 
                       @if(strlen(trim($user->semail)) <= 3)
                            checked="checked"
                       @endif
                       >
                       <label for="0" onclick="$('#semailDiv').hide();$('#semail').val('');">регистрационный email (login)</label>
                <input id="1" type="radio" name="semail" value="1" 
                       @if(strlen(trim($user->semail)) > 3)
                            checked="checked"
                       @endif
                       >
                       <label for="1" onclick="$('#semailDiv').show();">другой email</label>
            </div>
            <div id="semailDiv" style="display: none;">
            Электронная почта (для получения уведомлений)
            {!!Form::email('semail',$user->semail, array('placeholder'=>'Email','id'=>'semail', 'class'=>'form-control'))!!}
            {!! $errors->first('semail','<p class="alert alert-danger">:message</p>')!!}
            </div>
        </div>
        <hr/>
        Город*
        {!!Form::text('city',$city, array('placeholder'=>'обязательное поле','id'=>'city', 'class'=>'form-control'))!!}
        {!! $errors->first('city','<p class="alert alert-danger">:message</p>')!!}
        {!!Form::hidden('city_id',$user->profile['city'], array('id'=>'city_id'))!!}
        <div id="result" name="result"></div>
        Пол
        {!!Form::select('sex', array('2' => 'Укажите Ваш пол', '0' => 'Женский', '1' => 'Мужской'), $user->profile['sex'])!!} 
        {!! $errors->first('sex','<p class="alert alert-danger">:message</p>')!!}
        Дата рождения
        {!!Form::date('dateofburn',$user->profile['dateofburn'], array(
            'placeholder'=>'Дата рождения',
            'id'=>'dateofburn', 
            'class'=>'form-control'))!!}
        {!! $errors->first('dateofburn','<p class="alert alert-danger">:message</p>')!!}
        О себе
        {!!Form::textarea('notes',$user->profile['notes'], array('placeholder'=>'Немного о себе...','id'=>'notes', 'class'=>'form-control'))!!}
        {!! $errors->first('notes','<p class="alert alert-danger">:message</p>')!!}
        <br>
        <input type="hidden" name="user_id" value="{{ $user->id }}">
		<p align="center" >
        <button class="btn-liberty btn-liberty-black" id="submit" type="submit" name="submit">Сохранить</button>
		</p> 
		<hr/>
</fieldset> 
{!!Form::close()!!}
            </div><!-- tab-pane -->
            
            <div class="tab-pane fade" id="tab-1-3">                                            
        <p align="center" class="text-uppercase"><strong>Контактные данные</strong><br>
		если есть Viber или Whatsapp, напротив номера выберите "Да"</p>  
		<br>	
        <button class="btn btn-black" id="addPhone">+ Добавить телефон</button>
        {!! Form::open(array('url'=>'cabinet/updateContacts', 'method'=>'POST', 'name'=>'contacts-form')) !!}
		<br>
        <fieldset>
        <div id="phone">
        <table border="0" width="100%"><tr>
			<td align="left" width="155px">   
            {!!Form::text('phone[]',null, array(
                'placeholder'=>'Номер телефона',
                'id'=>'number', 
                'style'=>'width:150px;', 
                'class'=>'phone'
                ))!!}
			</td>
		<td align="left">
            <table border="0" width="100%"><tr><td align="right" width="30px">
                <img src="../images/viber-50x50.png" height="25px" align="right" style="margin-right: 0;"> 
            </td><td align="left">
                {!!Form::select('viber[]', array('0' => 'Viber - Нет', '1' => 'Viber - Да'), 0)!!} 
            </td></tr></table>
        </td><td align="left">
            <table border="0" width="100%"><tr><td align="right" width="30px">
                <img src="../images/whatsapp-50x50.png" height="25px" align="right" style="margin-right: 0;"> 
            </td><td align="left">
                {!!Form::select('whatsapp[]', array('0' => 'Whatsapp - Нет', '1' => 'Whatsapp - Да'), 0)!!} 
            </td></tr></table>    
        </td></tr></table>
        </div>
            <div id="phones">
                @if(count($phones)>0)                
                @foreach($phones as $phone)                    
        <table border="0" width="100%"><tr><td align="left" width="155px">   
            {!!Form::text('phone[]',$phone->number, array(
                'placeholder'=>'Номер телефона',
                'id'=>'number', 
                'style'=>'width:150px;',
                'class'=>'phone'))!!}
        </td><td>
            <table border="0" width="100%"><tr><td width="30px">
                <img src="../images/viber-50x50.png" height="25px" style="margin-right: 0;">                 
            </td><td>
                {!!Form::select('viber[]', array('0' => 'Viber - Нет', '1' => 'Viber - Да'), $phone->viber)!!} 
            </td></tr></table>      
        </td><td>
            <table border="0" width="100%"><tr><td width="30px">
                <img src="../images/whatsapp-50x50.png" height="25px" style="margin-right: 0;">                 
            </td><td>   
                {!!Form::select('whatsapp[]', array('0' => 'Whatsapp - Нет', '1' => 'Whatsapp - Да'), $phone->whatsapp)!!}   
            </td></tr></table>     
        </td></tr></table>
                @endforeach
                @endif
           </div> 
			
            <p>Номер телефона с кодом страны в свободной форме. Например +79991115577</p>
			
        <hr/>        
        <table border="0" width="100%"><tr><td width="30px">
                <img src="../images/circle-soc-icons/skype.png" height="25px" style="margin-right: 0;">                 
            </td><td>   
                {!!Form::text('skype',$user->profile['skype'], array(
                'placeholder'=>'Ваш логин в Skype',
                'id'=>'skype', 
                'style'=>'width:100%;'
                ))!!}
        </td></tr></table>
		<br>
        <table border="0" width="100%"><tr><td width="30px">
                <img src="../images/circle-soc-icons/fb.png" height="25px" style="margin-right: 0;">                 
            </td><td>   
                {!!Form::text('fb',$user->profile['fb_id'], array(
                'placeholder'=>'Ваша страница в Facebook',
                'id'=>'fb', 
                'style'=>'width:100%;'
                ))!!}
        </td></tr></table>
		<br>
        <table border="0" width="100%"><tr><td width="30px">
                <img src="../images/circle-soc-icons/vk.png" height="25px" style="margin-right: 0;">                 
            </td><td>   
                {!!Form::text('vk',$user->profile['vk_id'], array(
                'placeholder'=>'Ваша страница в ВКонтакте',
                'id'=>'vk', 
                'style'=>'width:100%;'
                ))!!}
        </td></tr></table> 
		<br>
        <table border="0" width="100%"><tr><td width="30px">
                <img src="../images/circle-soc-icons/ok.png" height="25px" style="margin-right: 0;">                 
            </td><td>   
                {!!Form::text('ok',$user->profile['ok_id'], array(
                'placeholder'=>'Ваша страница в Одноклассники',
                'id'=>'ok', 
                'style'=>'width:100%;'
                ))!!}
        </td></tr></table>  
        <hr/>
        <input type="hidden" name="profile_id" value="{{ $user->profile['id'] }}">
		<p align="center">
        <button class="btn-liberty btn-liberty-black" id="submit" type="submit" name="submit">Сохранить</button>
		</p>
        </fieldset> 
        {!!Form::close()!!}
            </div><!-- tab-pane -->
            
            <div class="tab-pane fade" id="tab-1-4">                            
                <p class="text-uppercase"><strong>Данные в Компании</strong></p>
        {!! Form::open(array('url'=>'cabinet/updateCompanyData',
        'method'=>'POST', 'id'=>'CompanyData-form', 'name'=>'CompanyData-form')) !!}
        <fieldset> 
        Логин в Компании
        <div class="input-group">
        <span class="input-group-addon">
            @if($user->profile->company_login_confirmed == 0)
                <i style="font-size: 14px;" class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
            @elseif($user->profile->company_login_confirmed == 1)
                <i style="font-size: 14px;" class="fa fa-check"></i>
            @endif
        </span>
        {!!Form::text('company_login',$user->profile['company_login'], array(
            'placeholder'=>'Ваш Логин в Компании',
            'id'=>'company_login',
            'class'=>'form-control'))!!}
        </div>
        {!! $errors->first('company_login','<p class="alert alert-danger">:message</p>')!!}
        
        Стартовый пакет
        <div class="input-group">
        <span class="input-group-addon">
            @if($user->profile->company_pack_confirmed == 0)
                <i style="font-size: 14px;" class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
            @elseif($user->profile->company_pack_confirmed == 1)
                <i style="font-size: 14px;" class="fa fa-check"></i>
            @endif
        </span>
         <select class="form-control" name="company_pack" id="company_pack">
             <option value="0">Без пакета</option>
            @foreach($packs as $pack)
            <option value="{{$pack->id}}" 
                    @if($user->profile['company_pack'] == $pack->id)
                        selected="selected"
                    @endif
                    >{{$pack->name}}</option>
            @endforeach
        </select>
        </div>    
        {!! $errors->first('company_pack','<p class="alert alert-danger">:message</p>')!!}
        
        Квалификационный статус в Компании
        <div class="input-group">
        <span class="input-group-addon">
            @if($user->profile->company_status_confirmed == 0)
                <i style="font-size: 14px;" class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
            @elseif($user->profile->company_status_confirmed == 1)
                <i style="font-size: 14px;" class="fa fa-check"></i>
            @endif
        </span>
        {!!Form::select('company_status', array(
            '0' => 'Укажите Ваш квалификационный статус в Компании', 
            '1' => 'Партнер (AS:Associate)', 
            '2' => 'Дистрибьютор (D:Distributor)', 
            '3' => 'Специалист (Ex:Executive)', 
            '4' => 'Нефритовый директор (QJ:Qualified Jade)', 
            '5' => 'Жемчужный директор (QP:Qualified Pearl)', 
            '6' => 'Сапфировый директор (QS:Qualified Sapphire)', 
            '7' => 'Сапфировый директор Элит (QSE:Qualified Sapphire Elite)', 
            '8' => 'Рубиновый директор (QR:Qualified Ruby)', 
            '9' => 'Изумрудный директор (QE:Qualified Emerald)', 
            '10' => 'Бриллиантовый директор (QD:Qualified Diamond)', 
            '11' => 'Двойной бриллиант (QDD:Qualified Double Diamond)', 
            '12' => 'Тройной бриллиант (QTD:Qualified Double Diamond)', 
            '13' => 'Президентский бриллиант (QPD:Qualified Presidental Diamond)', 
            '14' => 'Имперский бриллиант (QID:Qualified Imperial Diamond)', 
            '15' => 'Коронованный бриллиант (QCD:Qualified Crowned Diamond)'
            ), $user->profile['company_status'], array('class'=>'form-control')
            )!!} 
        </div>
        {!! $errors->first('company_status','<p class="alert alert-danger">:message</p>')!!}
        
        <hr/>
        <input type="hidden" name="profile_id" value="{{ $user->profile['id'] }}">
        <button class="btn btn-black" id="submit" type="submit" name="submit">Сохранить</button> 
</fieldset> 
{!!Form::close()!!}
<i style="font-size: 14px;" class="fa fa-refresh fa-spin fa-3x fa-fw"></i> - ожидается подтверждение Спонсора<br/>
<i style="font-size: 14px;" class="fa fa-check"></i> - подтверждено Спонсором<br/>
            </div><!-- tab-pane -->
        </div><!-- tab-content -->
@endsection


@section('script1')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../js/jquery.imgareaselect/scripts/jquery.imgareaselect.pack.js" type="text/javascript" charset="utf-8"></script>
    
<script>
    $(document).ready(function () {
        var url = window.location.href;
        var tabName = url.substring(url.indexOf('#tab'));
        $('a[href="'+tabName+'"]').click();

        $('#notes').summernote({
            minHeight: 200,
            lang: 'ru-RU',
            toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
          ]
        });

        var semail_len = <?php echo strlen(trim($user->semail)); ?>;
        if(semail_len >= 3){
            $('#semailDiv').show();
        }
        var progressBar = $('#progress-bar');
        var progressBarTitle = $('#progress-bar-title');

        $('#image').change(function(e){
            e.preventDefault();
            $('input[name="image_height"]').val($('#avatar').height());
            $('input[name="image_width"]').val($('#avatar').width());
            
            var token  = $('meta[name=_token]').attr('content');
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        
            $.ajax({
		type: "POST",
		url: "./upload_photo",
		cache: false,
		data:new FormData($("#upload_form")[0]),
		dataType: 'json', 
                async:true,
                contentType: false, 
                processData:false,
                xhr: function(){
                    var xhr = $.ajaxSettings.xhr();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = Math.ceil(evt.loaded / evt.total * 100);
                            progressBar.html('<div class="progress-bar animated" data-width="'+percentComplete+'%" style="width: '+percentComplete+'%;"></div>');
                            progressBarTitle.html('<h5>Загрузка <span style="left:'+percentComplete+'%">'+percentComplete+'%</span></h5>');
                        }
                    }, false);
                    return xhr;
                  },
		success: function (response) {
                    if(response){
                        progressBar.show();
                        progressBarTitle.show();
                        $('#avatar').unbind();
                        $('.imgareaselect-outer').attr("style", "");
                        
                        var avatarSrc = $('#avatar').attr('src');
                        if(avatarSrc.indexOf("temp") !== -1){
                            //console.log(avatarSrc);
                            DeleteTempImage(avatarSrc);
                        }
                        $('#avatar').attr("class", "");
                        $('#avatar').attr("src", "");
                        $('#avatar').attr("style", "max-height: 300px; max-width: 300px; position: relative; left: 50%;margin-left: -150px;");
                        
                        $('#avatar').attr("src","../"+response);
                        var ias = $('#avatar').imgAreaSelect({
                            x1: 0, y1: 0, x2: 50, y2: 50,
                            aspectRatio: '1:1',
                            instance: true,
                            onSelectEnd: function (img, selection) {
                                $('input[name="x1"]').val(selection.x1);
                                $('input[name="y1"]').val(selection.y1);
                                $('input[name="x2"]').val(selection.x2);
                                $('input[name="y2"]').val(selection.y2);
                                $('input[name="image_height"]').val($('#avatar').height());
                                $('input[name="image_width"]').val($('#avatar').width());
                                
                                $('#temp_image').val(response);
                            }
                        });
                        ias.update();
                        
                        $('#btn-submit').show();
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
        
    });
    
    function DeleteTempImage(avatarSrc){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['avatarSrc'] = avatarSrc; 
        
        $.ajax({
		method: "POST",
		url: "./deleteTempImage",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    console.log(response);
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
</script>
@endsection
