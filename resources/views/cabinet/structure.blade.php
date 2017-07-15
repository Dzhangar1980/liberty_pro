@extends('layouts.milo-cabinet')
@section('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>
@endsection
@section('content')
<br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Сеть</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">новички и партнеры вашей сети</font>
            </h5>
            <br>
@if($user_abonement)
<div class="net_owner">
    <div class="row">    
        <div class="col-sm-3">
            <div class="icon_set left_part"> 
                @if($net_owner->video)
                <?php $opacity1 = $net_owner->video->video1/100; ?>
                <?php $opacity2 = $net_owner->video->video2/100; ?>
                <div class="video_active" style="opacity: {{ $opacity1 }};">
                    <i class="fa fa-play" title="Видео 1 просмотрено {{ number_format($opacity1*100, 0) }}%"></i>
                </div>
                <div class="video_active" style="opacity: {{ $opacity2 }};">
                    <i class="fa fa-play" title="Видео 2 просмотрено {{ number_format($opacity2*100, 0) }}%"></i>
                </div>
                @endif
            </div>
            
            <div class="icon_set right_part">                                   
                <a href="./user?id={{ $net_owner->id }}&task=notes" class="popup" title="Заметки" data-text="Заметки">
                    <i class="fa fa-thumb-tack"></i>
                </a>
                <a href="./personal_messages?tuid={{ $net_owner->id }}&uid={{ $net_owner->id }}" target="_blank" class="popup" title="Сообщения" data-text="Сообщения">
                    <i class="el el-envelope"></i>
                </a>
                
                <form name="net{{ $net_owner->id }}" method="post" action="">
                    {{ csrf_field() }}
                    <input type="hidden" name="net_owner_id" value="{{ $net_owner->id }}">
                    <a href="#" class="popup" title="Сеть" data-text="Сеть" 
                       onclick="document.forms['net{{ $net_owner->id }}'].submit();">
                           <i class="el el-network"></i>
                    </a>
                </form>
                
            </div>
            
            <a href="" class="photo_box"><img src="../images/users/avatars/{{ $net_owner->profile->photo }}" alt="img"></a>
            <div class="name_box">
                    <div class="qualification_box">
                        @if($net_owner->profile->company_status == 2)
                            @if($net_owner->profile->company_pack != 0 && $net_owner->profile->company_pack_confirmed != 0)
                                @if($net_owner->profile->company_pack == 1)
                                    <?php $pack_logo = "basic"; ?>
                                @endif
                                @if($net_owner->profile->company_pack == 2)
                                    <?php $pack_logo = "supreme"; ?>
                                @endif
                                @if($net_owner->profile->company_pack == 3)
                                    <?php $pack_logo = "jumbo"; ?>
                                @endif
                                @if($net_owner->profile->company_pack == 4)
                                    <?php $pack_logo = "ambassador"; ?>
                                @endif
                                @if($net_owner->profile->company_pack == 5)
                                    <?php $pack_logo = "jumbo1"; ?>
                                @endif
                                @if($net_owner->profile->company_pack == 6)
                                    <?php $pack_logo = "founder"; ?>
                                @endif
                                @if($net_owner->profile->company_pack == 7)
                                    <?php $pack_logo = "pres_founder"; ?>
                                @endif
                                <div class="qualification" 
                                style="background-image: url(../images/packs/{{ $pack_logo }}.png);"></div>
                            @endif
                        @else
                            <div class="qualification" 
                             style="background-image: url(../images/qualifications/{{ $net_owner->profile->company_status }}.png);"></div>
                        @endif
                        
                    </div>
                <a href="">
                    <div class="net_owner_name">{{ $net_owner->name }}<br/>{{ $net_owner->family }}</div>
                </a>
            </div>
            <div class="online">
            @if($net_owner->isOnline())
                <span class="fa fa-circle" style="font-size: 16px;color: lime;"></span>
            @else
               <!-- <span class="fa fa-circle" style="font-size: 20px;color: red;"></span> -->
            @endif
            </div>
            
        </div>
        <div class="col-sm-4">
            <p>
                <span class="fa fa-map-marker"> {{ $net_owner->profile->mycity->country['country_name_ru'] }},  {{ $net_owner->profile->mycity->city_name_ru }}</span>
                <br><span class="fa fa-envelope-o"> {{ $net_owner->email }}</span>
                <br><span class="fa fa-skype"> {{ $net_owner->profile->skype }}</span>
                @if($net_owner->profile->phones)
                    @foreach($net_owner->profile->phones as $phone)
                        <br><span class="fa fa-phone"> {{ $phone->number }} 
                        @if($phone->viber == 1)
                            <img src="../images/viber-50x50.png" width="18px" height="18px">
                        @endif
                        @if($phone->whatsapp == 1)
                            <img src="../images/whatsapp-50x50.png" width="18px" height="18px">
                        @endif</span>
                    @endforeach
                @endif
            </p>            
        </div>
        <div class="col-sm-5">
            <p>
                <span class="fa fa-sign-in"> Дата регистрации: {{ date("d.m.Y г.", strtotime($net_owner->created_at)) }}</span>
                <br><span class="fa fa-calendar-o"> Посл. посещение: {{ date("d.m.Y г.", strtotime($net_owner->updated_at)) }}</span>
                <br><img src="../images/logoliberty/jlogo.png" width="15px" height="20px"> {{ $net_owner->profile->company_login }}
                @if($net_owner->profile->pack)
                <br><img src="../images/logoliberty/jlogo.png" width="15px" height="20px"> {{ $net_owner->profile->pack->name }}
                @endif
                <br><span class="fa fa-handshake-o"> Спонсор: 
                    <a href="./user?id={{ $net_owner->profile->mysponsor->id }}">
                        {{ $net_owner->profile->mysponsor->name }} {{ $net_owner->profile->mysponsor->family }} 
                    </a>
                    <a class="btn btn-default el el-chevron-down" onclick="$('.sponsors').toggle(300);"></a></span>
                <!-- sponsors -->
                <div class="sponsors" style="display: none;">
                    @foreach($net_owner_sponsors as $sponsor)
                    <p><a href="./user?id={{ $sponsor->id }}">{{ $sponsor->name }} {{ $sponsor->family }}</a></p>
                    @endforeach
                </div>
            </p>
            
            <p>
                @if($net_owner->profile->fb_id == NULL)
                    <span class="btn fa fa-facebook" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                @else
                    <a href="{{ $net_owner->profile->fb_id }}" class="btn fa fa-facebook" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                    </a>
                @endif
                    
                @if($net_owner->profile->vk_id == NULL)
                    <span class="btn fa fa-vk" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                @else
                    <a href="{{ $net_owner->profile->vk_id }}" class="btn fa fa-vk" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                    </a>
                @endif

                @if($net_owner->profile->ok_id == NULL)
                    <span class="btn fa fa-odnoklassniki" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                @else
                    <a href="{{ $net_owner->profile->ok_id }}" class="btn fa fa-odnoklassniki" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                    </a>
                @endif
            </p>            
        </div>
        
    </div>
</div>
<hr style="color: #88A8EA; margin-bottom: 10px;">    
<div class="form-filter" style="position: relative; left: 10px;">
        {!! Form::open(array('url'=>'cabinet/structure',
                'method'=>'POST',
                'class'=>'form-inline',
                'id'=>'structure_filter-form',
                'name'=>'structure_filter-form'
                )) !!}
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-sm-3"><i class="el el-user" style="position: absolute;top:12px;left: -2px;"></i>
            {!!Form::text('name', null, array('placeholder'=>'Имя','id'=>'name', 'class'=>'form-control'))!!}
            </div>                
            <div class="col-sm-3"><i class="el el-user" style="position: absolute;top:12px;left: -2px;"></i>
            {!!Form::text('family', null, array('placeholder'=>'Фамилия','id'=>'family', 'class'=>'form-control'))!!}
            </div>
            <div class="col-sm-3"><i class="el el-globe" style="position: absolute;top:12px;left: -2px;"></i>
                <select name="country" id="country" onchange="changeCountry(this)" onkeyup="changeCountry(this)">
                    <option value="0"> Все страны</option>
                    @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->country_name_ru }}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="col-sm-3" id="divCity"><i class="el el-map-marker" style="position: absolute;top:12px;left: -2px;"></i>
                <select name="CountryCity" id="CountryCity" disabled="disabled">
                    <option value="0">Все города</option>
                </select>
                <!--<p class="form-element_description">Выберите страну...</p>-->
            </div>
        </div> <!--row-->
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-sm-3"><i class="el el-align-justify" style="position: absolute;top:12px;left: -2px;"></i>
                {!!Form::select('level', array(
                    '0' => 'Все уровни', 
                    '1' => 'Первый уровень', 
                    '2' => 'Второй уровень', 
                    '3' => 'Третий уровень',
                    '4' => 'Четвертый уровень',
                    '5' => 'Пятый уровень',
                    '6' => 'Шестой уровень'
                    ), 0)!!} 
            </div>
            <div class="col-sm-3"><i class="el el-key" style="position: absolute;top:12px;left: -2px;"></i>
                {!!Form::text('login', null, array('placeholder'=>'Логин в Компании','id'=>'login', 'class'=>'form-control'))!!}
            </div>
            <div class="col-sm-3"><i class="el el-bookmark" style="position: absolute;top:12px;left: -2px;"></i>
                <select name="pack" id="pack">
                    <option value="0">Все пакеты</option>
                    @foreach($packs as $pack)
                    <option value="{{ $pack->id }}">{{ $pack->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3"><i class="el el-asl" style="position: absolute;top:12px;left: -2px;"></i>
                <select name="qualification" id="qualification">
                    <option value="0">Все квалификации</option>
                    @foreach($qualifications as $qualification)
                    <option value="{{ $qualification->id }}">{{ $qualification->name }}</option>
                    @endforeach
                </select>
            </div>
        </div> <!--row-->   
        <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-3"><i class="el el-star" style="position: absolute;top:12px;left: -2px;"></i>
            {!!Form::select('club_status', array(
                '0' => 'Все статусы Клуба', 
                '1' => 'Новички', 
                '2' => 'В клубе', 
                '3' => 'Вне клуба', 
                ), 0)!!} 
        </div>
        <div class="col-sm-3"><i class="el el-video" style="position: absolute;top:12px;left: -2px;"></i>
            {!!Form::select('video_meeting', array(
                '0' => 'Не важно', 
                '2' => 'Посмотрел 2 видео', 
                '1' => 'Посмотрел только 1ое видео', 
                '3' => 'Не смотрел видео вообще', 
                ), 0)!!} 
        </div>
                        
        <div class="col-sm-3"><i class="el el-phone" style="position: absolute;top:12px;left: -2px;"></i>
            {!!Form::text('phone', null, array('placeholder'=>'Номер телефона','id'=>'phone', 'class'=>'form-control'))!!}
        </div>
        <div class="col-sm-3"> 
            <input type="hidden" name="task" value="filter">
            <button class="btn-liberty btn-liberty-black" id="submit" type="submit" name="submit">
                Показать 
                <!-- <i class="fa fa-arrow-right"></i> -->
            </button>
        </div>
            
        <div class="col-sm-6">
        @if($moderate == TRUE)
                <button type="button" onclick="moderation()" 
                        class="btn-liberty btn-liberty-black hot" 
                        title="Требуется Ваше подтверждение данных партнеров" 
                        style="margin-bottom: 10px;">Требуется подтверждение
                </button>
        @endif    
        </div>
        
        {!!Form::close()!!}
        </div> <!--row-->   
    </div>
<hr style="color: #88A8EA; margin-top: -20px;">
<div class="row" >
    <div class="col-sm-6">
    @if($level == 0)
        <h3 id="level_title">Все уровни</h3>
    @else
        <h3 id="level_title">{{ $level }} уровень</h3>
    @endif
    </div>
    <div class="col-sm-6" style="text-align: right;">
        <p>Найдено {{ count($data) }}</p>
    </div>
</div>

@if(count($data) > 0)
    <div class="preview_set">
        @foreach($data as $child)
            <div class="user_card">
            <div class="icon_set left_part"> 
                @if($child->user->video && $child->status_id < 3)
                <?php 
                $opacity1 = $child->user->video->video1/100; 
                $opacity2 = $child->user->video->video2/100; 
                ?>
                <div class="video_active" style="opacity: {{ $opacity1 }};">
                    <i class="fa fa-play" title="Видео 1 просмотрено {{ number_format($opacity1*100, 0) }}%"></i>
                </div>
                <div class="video_active" style="opacity: {{ $opacity2 }};">
                    <i class="fa fa-play" title="Видео 2 просмотрено {{ number_format($opacity2*100, 0) }}%"></i>
                </div>
                @endif
                @if(count($child->user->abonements) > 0)
                        <?php 
                        foreach($child->user->abonements as $abonement){
                        $today = date("Y-m-d H:i:s"); 
                        if($abonement->srok >= $today && $abonement->created_at <= $today){
                        ?>
                            <div class="video_active">
                                <img src="../images/logoliberty/32blue.png" width="15px" height="15px">
                            </div>
                        <?php
                        }
                        }
                        ?>
                @endif
                
                @if($child->status_id >= 5)
                <div class="video_active">
					<img src="../images/logoliberty/diamondblue.png" width="16px" height="16px" title="PRO-аккаунт">
                </div>
                @endif
            </div>
            
            <div class="icon_set right_part">  
                <a href="./user?id={{ $child->user->id }}&task=notes" class="popup" title="Заметки" data-text="Заметки">
                    <i class="fa fa-thumb-tack"></i>
                </a>
                
                <a href="./personal_messages?tuid={{ $child->user->id }}&uid={{ $user->id }}" 
                   target="_blank" class="popup" title="Сообщения" data-text="Сообщения">
                    <i class="el el-envelope"></i>
                </a>
                
                <form name="net{{ $child->user->id }}" method="post" action="">
                    {{ csrf_field() }}
                    <input type="hidden" name="net_owner_id" value="{{ $child->user->id }}">
                    <a href="#" class="popup" title="Сеть"  data-text="Сеть"
                       onclick="document.forms['net{{ $child->user->id }}'].submit();">
                           <i class="el el-network"></i>
                    </a>
                </form>
                
            </div>
            
            <a href="" class="photo_box"><img src="../images/users/avatars/{{ $child->photo }}" alt="img"></a>
            <div class="structure_info_block">
                                <div class="line">
                                    <span class="ico"><i class="fa fa-map-marker"></i></span> 
                                    <div class="text">
                                        @if($child->mycity->country)
                                        {{ $child->mycity->country['country_name_ru'] }}
                                        @endif
                                    </div>
                                    <span id="copy-button-child_{{ $child->user_id }}_country" 
                                            data-clipboard-text="{{ $child->mycity->country['country_name_ru'] }}"
                                            class="popup copy_ico" 
                                            data-text="Копировать">
                                            <i class="fa fa-clone"></i>
                                    </span>
                                </div>
                                <div class="line">
                                    <span class="ico"><i class="fa fa-map-marker"></i></span> 
                                    <div class="text">
                                    {{ $child->mycity->city_name_ru }}
                                    </div>
                                    <span id="copy-button-child_{{ $child->user_id }}_city_name_ru" 
                                            data-clipboard-text="{{ $child->mycity->city_name_ru }}" 
                                            class="popup copy_ico" data-text="Копировать"><i class="fa fa-clone"></i>
                                    </span>
                                </div>
                                <div class="line">
                                    <span class="ico"><img src="../images/logoliberty/jlogo.png" width="15px" height="20px"> </span> 
                                    <div class="text">
                                    {{ $child->company_login }}
                                    </div>
                                    <span  id="copy-button-child_{{ $child->user_id }}_company_login" 
                                            data-clipboard-text="{{ $child->company_login }}" 
                                            class="popup copy_ico" data-text="Копировать"><i class="fa fa-clone"></i></span>
                                </div>
                                <div class="line">
                                    <span class="ico"><i class="fa fa-envelope-o"></i></span> 
                                    <div class="text">{{ $child->user->email }}</div>
                                    <span id="copy-button-child_{{ $child->user_id }}_email" 
                                            data-clipboard-text="{{ $child->user->email }}" 
                                            class="popup copy_ico" data-text="Копировать"><i class="fa fa-clone"></i></span>
                                </div>
                                <div class="line">
                                    <span class="ico"><i class="fa fa-skype"></i></span> 
                                    <div class="text">{{ $child->skype }}</div>
                                    <span id="copy-button-child_{{ $child->user_id }}_skype" 
                                            data-clipboard-text="{{ $child->skype }}" 
                                            class="popup copy_ico" data-text="Копировать"><i class="fa fa-clone"></i></span>
                                </div>
                                @if($child->phones)
                                    @foreach($child->phones as $phone)
                                        <div class="line">
                                            <span class="ico"><i class="fa fa-phone"></i></span> 
                                            <div class="text">{{ $phone->number }}</div>
                                            <span id="copy-button-child_{{ $child->user_id }}_phone{{ $phone->id }}" 
                                                data-clipboard-text="{{ $phone->number }}" 
                                                class="popup copy_ico" data-text="Копировать"><i class="fa fa-clone"></i></span>
                                        </div>
                                        @if($phone->viber == 1)
                                            <img src="../images/viber-50x50.png" width="18px" height="18px">
                                        @endif
                                        @if($phone->whatsapp == 1)
                                            <img src="../images/whatsapp-50x50.png" width="18px" height="18px">
                                        @endif</span>
                                    @endforeach
                                @endif
                                
                                <div class="line">
                                    <span class="ico"><i class="fa fa-sign-in"></i></span> 
                                    <div class="text">
                                        {{ date("d.m.Y г.", strtotime($child->user->created_at)) }}
                                    </div>
                                    <span id="copy-button-child_{{ $child->user_id }}_created_at" 
                                            data-clipboard-text="{{ date("d.m.Y г.", strtotime($child->user->created_at)) }}" 
                                            class="popup copy_ico" data-text="Копировать"><i class="fa fa-clone"></i></span>
                                </div>
                                <div class="line">
                                    <span class="ico"><i class="fa fa-calendar-o"></i></span> 
                                    <div class="text">
                                        {{ date("d.m.Y г.", strtotime($child->user->updated_at)) }}
                                    </div>
                                    <span id="copy-button-child_{{ $child->user_id }}_updated_at" 
                                            data-clipboard-text="{{ date("d.m.Y г.", strtotime($child->user->updated_at)) }}" 
                                            class="popup copy_ico" data-text="Копировать"><i class="fa fa-clone"></i></span>
                                </div>
                                <div class="social_set">
                                    <a href="" class="vk active"></a>
                                    <a href="" class="fb active"></a>
                                    <a href="" class="ok"></a>
                                    <a href="" class="tw"></a>
                                    <a href="" class="gp"></a>
                                </div>
                                <div class="copy_icons">
                                    <!-- 
                                    <div class="popup right_pos" data-text="Копировать&nbsp;все"><i class="fa fa-file-text-o"></i></div>
                                    -->
                                </div>
                                <div class="clear"></div>
                            </div>
            
            <div class="name_box">
                <?php
                if($child->company_status_confirmed == 0){
                    $isConfirmed = 'class="qualification_box puls popup left_pos" data-text="Подтвердить квалификацию"';
                }else{
                    $isConfirmed = 'class="qualification_box"';
                }
                ?>
                         
                    <div <?php echo $isConfirmed; ?>>
                        @if($child->company_status_confirmed == 0)
                            <a href="moderation">
                        @endif
                        <div class="qualification" 
                             style="background-image: url(../images/qualifications/{{ $child->company_status }}.png);"></div>
                        
                        @if($child->company_status_confirmed == 0)
                            </a>
                        @endif
                    </div>
                <a href="">
                    <div class="net_owner_name">{{ $child->user->name }}<br/>{{ $child->user->family }}</div>
                </a>
            </div>
            <div class="online">
            @if($child->user->isOnline())
                <span class="fa fa-circle" style="font-size: 16px;color: lime;"></span>
            @else
                <!-- <span class="fa fa-circle" style="font-size: 20px;color: red;"></span> -->
            @endif
            </div>
            
            </div>
       
        <!------------------------------------------------------------ -->
        
        @endforeach
        <div class="row">
            <div class="col-sm-12">
                {!! $data->render() !!}
            </div>
        </div>
    </div>
    @else
    <h3>Никого не найдено...</h3>
   @endif
   
@else
    <!-- нет абонемента -->
	
@if($user->profile->status_id == 2)
<!-- Новичкам -->
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
		В этом разделе Вы сможете видеть Новичков, получивших рекомендацию от Вас, а так же всех Партнеров в Вашей сети.
		Это позволит Вам быстро находить тех или иных партнеров в зависимости от их Квалификации, уровня и населенного пункта, 
		делать заметки по каждому из них, писать сообщения и связываться по указанным ими контактным данным. 
		</span></p>
		<br>
		<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#c41a19">функция доступна только участникам клуба</font>
            </h5>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">			
            Для того, чтобы стать участником Клуба, Вы должны иметь статус "Партнер" в Компании и иметь оплаченный абонемент в Клубе.
			Если Вы уже зарегистрировались в Компании как Партнер, Вам необходимо указать логин Вашего сайта Компании в разделе Профиль.
			После подтверждения логина Вашим Спонсором, Вы сможете активировать виртуальную клубную карту оплатив абонемент в разделе 
			Клуб/Баланс.</span></p>
		<br>
@elseif($user->profile->status_id >= 3)
<!-- Партнерам и выше -->
		<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#c41a19">доступ к фунциям клуба закрыт</font>
            </h5>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">			
            Функции предоставляемые Клубом доступны Партнерам, являющимися уастниками Клуба при наличии абонентской платы.
			Продлить абонемент Вы можете в разделе Клуб/Баланс.</span></p>
		<br>

@endif
@endif
   
@endsection

@section('script1')
<script>
    (function(){
        <?php
        foreach($data as $child){
            echo "new Clipboard('#copy-button-child_".$child->user_id."_country');";
            echo "new Clipboard('#copy-button-child_".$child->user_id."_city_name_ru');";
            echo "new Clipboard('#copy-button-child_".$child->user_id."_company_login');";
            echo "new Clipboard('#copy-button-child_".$child->user_id."_email');";
            echo "new Clipboard('#copy-button-child_".$child->user_id."_skype');";
            echo "new Clipboard('#copy-button-child_".$child->user_id."_created_at');";
            echo "new Clipboard('#copy-button-child_".$child->user_id."_updated_at');";
            if($child->phones){
                foreach($child->phones as $phone){
                    echo "new Clipboard('#copy-button-child_".$child->user_id."_phone".$phone->id."');";
                }
            }
        }
        ?>
        })();
        
    function liberty_select(id){
        var ls = $('#liberty_select'+id).attr('class');
        if(ls == 'fa fa-square'){
            $('#liberty_select'+id).attr('class', 'fa fa-check-square');
            
        }else{
            $('#liberty_select'+id).attr('class', 'fa fa-square');
        }
    }
    
    function moderation(){
        document.location = 'moderation';
    }
    
    function changeCountry(selectedObject){
        var value = selectedObject.value;
        //console.log('changeCountry '+value);
        if(value == 0){
            $('#CountryCity').prop("disabled", true);
        }else{
            
            
            var token  = $('meta[name=_token]').attr('content');
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
            var mydata = {};
            mydata['_token'] = token;           
            mydata['country_id'] = value;           

            $.ajax({
		method: "POST",
		url: "./getCountryCities",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    $('#submit').prop("disabled", true);
                    $('#CountryCity').prop("disabled", true);
                    $('#submit').html("загрузка городов...");
                    var cities = {};
                    var citiesValues = [];
                    for(var i in response){
                        citiesValues.push(response[i]);
                    }
                    citiesValues.sort();
                    
                    citiesValues.forEach(function(item, i, citiesValues) {
                        for(var key in response){
                            if(response[key] == item){
                                cities[item] = key;
                            }
                        }
                    });
                    
                    var city_ids = Object.keys(response);
                    
                    var CountryCity = $("#CountryCity");
                    CountryCity.empty();
                    CountryCity.append('<option value="0">Все города</option>');
                    for(var key in cities){
                        CountryCity.append('<option value="' + cities[key] + '">' + key + '</option>');
                    }
                    $('#submit').prop("disabled", false);
                    $('#CountryCity').prop("disabled", false);
                    $('#submit').html("Показать");
		},
		error: function (data) {
                    console.log('Error:', data);
                }
            });
        } //endif
        $('#CountryCity').val(0);
    }
    
</script>
@endsection

