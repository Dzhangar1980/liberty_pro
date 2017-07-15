@extends('layouts.milo-cabinet')
@section('content')
<?php
//echo $url;
?>
<h2 align="center" style="font-family: Open Sans, Arial, sans-serif; color: #ff6b00;">
    Гостиная
</h2>

<h5 align="center" style="font-family: Open Sans, Arial, sans-serif; color: #f79421;">
    посетители сайта и ваши приглашенные
</h5>
<br>

<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;font-size: 14px;">
    Здесь Вы как участник Клуба сможете принимать Гостей из числа случайных посетителей сайта, а также принимать посетителей пришедших 
    на сайт по Вашей индивидуальной ссылке (инвайту), которые в случае успешного получения рекомендаций и присоединения к Клубу, 
    станут Вашими партнерами.</p>

@if($user_abonement)
<div class="elements-section" id="counters">
    <div class="headline style-1">
        <div class="col-sm-6">
            <h2>Информация 
                <a href="#" onclick="$('#counters_panel').toggle('slow')">
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>
            </h2>
        </div>
        <div class="col-sm-6">
            <?php
            if($count_guests == 0){
                $error_msg = "Нет доспутных гостей. Зайдите позже.";
            }
            if(count($guests) > 0){
                $error_msg = "У Вас есть непринятые гости";
            }
            ?>
            @if($count_guests > 0 && count($guests) == 0 && $lidsSaldo != 0)
                <form method="post" action="" name="inviteGuests">
                     {{ csrf_field() }}
                    <input type="hidden" name="task" value="inviteGuest">
                    <input type="submit" class="btn-liberty btn-liberty-black" value="Принять Гостя">
                </form>
            @endif
                
            @if(isset($error_msg))
                <div class="alert alert-info">
                    <i class="fa fa-times-circle"></i> {{ $error_msg }}
                </div>
            @endif
        </div>
    </div><!-- headline -->

    <div id="counters_panel" style="display: none;">
    <div class="row">
        <div class="col-sm-3">
            <div class="counter">
                <i class="fa fa-users"></i>
                <div class="counter-value animated" data-value="{{ $lidsSaldo }}">{{ $lidsSaldo }}</div>
                <div class="counter-details">
                    <p>Баланс трафика</p>
                </div><!-- counter-details -->
            </div><!-- counter -->
        </div><!-- col -->

        <div class="col-sm-3">
            <div class="counter">
                <i class="miu-icon-editor_alarm_clock_outline_stroke"></i>
                <div class="counter-value animated" data-value="{{ $user->profile->status['lids'] }}">{{ $user->profile->status['lids'] }}</div>
                <div class="counter-details">
                    <p>Суточный лимит</p>
                </div><!-- counter-details -->
            </div><!-- counter -->
        </div><!-- col -->
        
        <div class="col-sm-3">
            <div class="counter">
                <i class="fa fa-user"></i>
                <div class="counter-value animated" data-value="{{ $user->profile->status['lids'] - count($TodayLidsProtocols) }}">{{ $user->profile->status['lids'] - count($TodayLidsProtocols) }}</div>
                <div class="counter-details">
                    <p>Остаток на сегодня</p>
                </div><!-- counter-details -->
            </div><!-- counter -->
        </div><!-- col -->
        
        <div class="col-sm-3">
            <div class="counter">
                <i class="fa fa-pencil-square-o"></i>
                <div class="counter-value animated" data-value="{{ count($TotalLidsProtocols) }}">{{ count($TotalLidsProtocols) }}</div>
                <div class="counter-details">
                    <p>Обработано рекомендаций</p>
                </div><!-- counter-details -->
            </div><!-- counter -->
        </div><!-- col -->
    </div><!-- row -->    
    </div>
</div>
@if($lidsSaldo > 0 && ($user->profile->status['lids'] - count($TodayLidsProtocols)) > 0)
@else
    <div class="col-sm-12" style="align-content: center">
        <h3>Прием Гостей не доступен</h3>
        @if($lidsSaldo == 0)
            <div class="alert alert-danger">
                <i class="fa fa-times-circle"></i>Баланс трафика равен 0 лидов... 
            </div>
            <a href="balance" class="btn-liberty btn-liberty-black">Купить трафик</a>
            <br/>
            <br/>
        @endif
        @if(($user->profile->status['lids'] - count($TodayLidsProtocols)) == 0)
            <div class="alert alert-info">
                <i class="fa fa-times-circle"></i>Вы исчерпали лимит на сегодня. Лимит обновиться в 00:00 часов. 
            </div>
            <br/>
            <br/>
        @endif
    </div>
@endif

<hr/>
@if(count($inviters)>0)
<div class="row">
<div class="col-sm-12">
    <div class="alert alert-info">
        <i class="fa fa-user-plus"></i>У Вас новые приглашенные. 
    </div>
</div>
</div>
@endif
<div class="elements-section" id="tabs">
    <div class="headline style-1">
        <!-- <h2>Гости и приглашенные</h2> -->
    </div><!-- headline -->                                                                            
    
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-2-1" data-toggle="tab">Гости</a></li>
            @if(count($inviters)>0)
            <li style="background-color: red;">
                <a href="#tab-2-2" data-toggle="tab" style="color: gold;text-shadow: 1px 1px 2px black, 0 0 1em black;">Приглашенные</a>
            </li>
            @endif
        </ul>                                            
                        
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-2-1">
                @if(session('status'))
                    <div class="alert alert-success">
                        <i class="fa fa-check"></i>
                        {{ session('status') }}
                    </div>
                @endif
                @if($guests)
                    @foreach($guests as $guest)
                    <?php
                    if($guest->recommendation->status == 0){
                        $bg = '#ffffff';
                    }elseif($guest->recommendation->status == 1){
                        $bg = '#e6ffe6';
                    }elseif($guest->recommendation->status == 2){
                        $bg = '#ffe6e6';
                    }
                    ?>
                    <div class="net_owner" id='Recommendation{{ $guest->recommendation->id }}' style="background-color: {{ $bg }};">
                        <div class="row">    
                            <div class="col-sm-3">
                                <div class="icon_set right_part">                                   
                                    <a href="./user?id={{ $guest->id }}&task=notes" class="popup" data-text="Заметки">
                                        <i class="fa fa-thumb-tack"></i>
                                    </a>
                                    <a href="./personal_messages?tuid={{ $guest->id }}&uid={{ $guest->id }}" target="_blank" class="popup" data-text="Сообщения">
                                        <i class="el el-envelope"></i>
                                    </a>
                                </div>
            
                                <a href="" class="photo_box">
                                    <img src="../images/users/avatars/{{ $guest->profile->photo }}" alt="img">
                                </a>
                                <div class="name_box">
                                    <a href="#">
                                        <div class="net_owner_name">
                                            {{ $guest->name }}<br/>
                                            {{ $guest->family }}
                                        </div>
                                    </a>
                                </div>
                                <div class="online">
                                @if($guest->isOnline())
                                    <span class="fa fa-circle" style="font-size: 16px;color: lime;"></span>
                                @else
                                   <!-- <span class="fa fa-circle" style="font-size: 20px;color: red;"></span> -->
                                @endif
                                </div>
            
                            </div>
                            <div class="col-sm-4">
                                <p>
                                    @if($guest->profile->mycity)
                                    <span class="fa fa-map-marker"> 
                                        {{ $guest->profile->mycity->country['country_name_ru'] }},  
                                        {{ $guest->profile->mycity->city_name_ru }}
                                    </span>
                                    @endif
                                    <br><span class="fa fa-envelope-o"> {{ $guest->email }}</span>
                                    <br><span class="fa fa-skype"> {{ $guest->profile->skype }}</span>
                                    @if($guest->profile->phones)
                                        @foreach($guest->profile->phones as $phone)
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
                                <p>
                                    @if($guest->profile->fb_id == NULL)
                                        <span class="btn fa fa-facebook" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                    @else
                                        <a href="{{ $guest->profile->fb_id }}" class="btn fa fa-facebook" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                                        </a>
                                    @endif

                                    @if($guest->profile->vk_id == NULL)
                                        <span class="btn fa fa-vk" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                    @else
                                        <a href="{{ $guest->profile->vk_id }}" class="btn fa fa-vk" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                                        </a>
                                    @endif

                                    @if($guest->profile->ok_id == NULL)
                                        <span class="btn fa fa-odnoklassniki" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                    @else
                                        <a href="{{ $guest->profile->ok_id }}" class="btn fa fa-odnoklassniki" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                                        </a>
                                    @endif
                                </p>            
                            </div>
                            <div class="col-sm-5">
                                <p>
                                    <span class="fa fa-sign-in"> Дата регистрации: 
                                        {{ date("d.m.Y г.", strtotime($guest->created_at)) }}</span>
                                    <br><span class="fa fa-calendar-o"> Посл. посещение: 
                                        {{ date("d.m.Y г.", strtotime($guest->updated_at)) }}</span>                                   
                                </p>
                                
                                <div id="RecommendationStatus{{ $guest->recommendation->id }}">
                                    @if($guest->recommendation->status == 0)
                                    <h4>Ожидает Вашего решения: </h4>
                                    <span >
                                        <?php
                                        $datetime1 = new DateTime("now");
                                        $datetime2 = new DateTime($guest->recommendation->created_at);
                                        $interval = $datetime1->diff($datetime2);
                                        //echo $interval->format('%R%Y лет, %R%M месяцев, %R%D дней, %R%H часов, %R%I минут, %R%S секунд');
                                        $d = abs($interval->format('%R%D'));
                                        $h = abs($interval->format('%R%H'));
                                        $i = abs($interval->format('%R%I'));
                                        $s = abs($interval->format('%R%S'));
                                        //echo $interval->format('%R%H часов, %R%I минут, %R%S секунд');
                                        if($d>0){ echo $d .' дней '; }
                                        echo $h .' часов ';
                                        echo $i .' минут ';
                                        echo $s .' секунд';
                                        ?>
                                    </span>
                                    <table width="100%" border="0">
                                        <tr>
                                            <td>
                                    <form method="post" action="" name="approveGuest">
                                         {{ csrf_field() }}
                                        <input type="hidden" name="task" value="approveGuest">
                                        <input type="hidden" name="recommendation_id" value="{{ $guest->recommendation->id }}">
                                        <button type="submit" class="btn btn-liberty-black">Одобрить и <br/>принять в сеть</button>
                                    </form>
                                            </td>
                                            <td>
                                    <form method="post" action="" name="refuseGuests">
                                         {{ csrf_field() }}
                                        <input type="hidden" name="task" value="refuseGuest">
                                        <input type="hidden" name="recommendation_id" value="{{ $guest->recommendation->id }}">
                                        <button type="submit" class="btn btn-liberty-white">Отказать и <br/>заблокировать</button>
                                    </form>
                                          </td>
                                    </tr>
                                    </table>
                                @endif
                                @if($guest->recommendation->status == 1) 
                                    <div class="alert alert-success"><i class="fa fa-check"></i>Одобрен(а)</div>
                                @endif
                                @if($guest->recommendation->status == 2) 
                                    <div class="alert alert-danger"><i class="fa fa-times-circle"></i>Заблокирован(а)</div>
                                @endif
                            </div>
                            </div>

                        </div>
                    </div>
                    <hr/>
                    @endforeach
                @endif
            </div><!-- tab-pane -->

            <div class="tab-pane fade" id="tab-2-2">
                @if($inviters)
                    @foreach($inviters as $inviter)
                    <?php
                    if($inviter->recommendation->status == 0){
                        $bg = '#ffffff';
                    }elseif($inviter->recommendation->status == 1){
                        $bg = '#e6ffe6';
                    }elseif($inviter->recommendation->status == 2){
                        $bg = '#ffe6e6';
                    }
                    ?>
                    <div class="net_owner" id='Recommendation{{ $inviter->recommendation->id }}' style="background-color: {{ $bg }};">
                        <div class="row">    
                            <div class="col-sm-3">
                                <div class="icon_set right_part">                                   
                                    <a href="./user?id={{ $inviter->id }}&task=notes" class="popup" data-text="Заметки">
                                        <i class="fa fa-thumb-tack"></i>
                                    </a>
                                    <a href="./personal_messages?tuid={{ $inviter->id }}&uid={{ $inviter->id }}" target="_blank" class="popup" data-text="Сообщения">
                                        <i class="el el-envelope"></i>
                                    </a>
                                </div>
            
                                <a href="" class="photo_box">
                                    <img src="../images/users/avatars/{{ $inviter->profile->photo }}" alt="img">
                                </a>
                                <div class="name_box">
                                    <a href="#">
                                        <div class="net_owner_name">
                                            {{ $inviter->name }}<br/>
                                            {{ $inviter->family }}
                                        </div>
                                    </a>
                                </div>
                                <div class="online">
                                @if($inviter->isOnline())
                                    <span class="fa fa-circle" style="font-size: 16px;color: lime;"></span>
                                @else
                                   <!-- <span class="fa fa-circle" style="font-size: 20px;color: red;"></span> -->
                                @endif
                                </div>
            
                            </div>
                            <div class="col-sm-4">
                                <p>
                                    @if($inviter->profile->mycity)
                                    <span class="fa fa-map-marker"> 
                                        {{ $inviter->profile->mycity->country['country_name_ru'] }},  
                                        {{ $inviter->profile->mycity->city_name_ru }}
                                    </span>
                                    @endif
                                    <br><span class="fa fa-envelope-o"> {{ $inviter->email }}</span>
                                    <br><span class="fa fa-skype"> {{ $inviter->profile->skype }}</span>
                                    @if($inviter->profile->phones)
                                        @foreach($inviter->profile->phones as $phone)
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
                                <p>
                                    @if($inviter->profile->fb_id == NULL)
                                        <span class="btn fa fa-facebook" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                    @else
                                        <a href="{{ $inviter->profile->fb_id }}" class="btn fa fa-facebook" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                                        </a>
                                    @endif

                                    @if($inviter->profile->vk_id == NULL)
                                        <span class="btn fa fa-vk" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                    @else
                                        <a href="{{ $inviter->profile->vk_id }}" class="btn fa fa-vk" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                                        </a>
                                    @endif

                                    @if($inviter->profile->ok_id == NULL)
                                        <span class="btn fa fa-odnoklassniki" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                    @else
                                        <a href="{{ $inviter->profile->ok_id }}" class="btn fa fa-odnoklassniki" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                                        </a>
                                    @endif
                                </p>            
                            </div>
                            <div class="col-sm-5">
                                <p>
                                    <span class="fa fa-sign-in"> Дата регистрации: 
                                        {{ date("d.m.Y г.", strtotime($inviter->created_at)) }}</span>
                                    <br><span class="fa fa-calendar-o"> Посл. посещение: 
                                        {{ date("d.m.Y г.", strtotime($inviter->updated_at)) }}</span>
                                    @if($inviter->profile->mysponsor)
                                    <br>Спосор: <a href="./user?id={{ $inviter->profile->mysponsor->id }}">
                                        {{ $inviter->profile->mysponsor->name }} 
                                        {{ $inviter->profile->mysponsor->family }} 
                                    </a>
                                    @endif
                                </p>
                                
                                <div id="RecommendationStatus{{ $inviter->recommendation->id }}">
                                    @if($inviter->recommendation->status == 0)
                                    <h4>Ожидает Вашего решения: </h4>
                                    <span >
                                        <?php
                                        $datetime1 = new DateTime("now");
                                        $datetime2 = new DateTime($inviter->recommendation->created_at);
                                        $interval = $datetime1->diff($datetime2);
                                        //echo $interval->format('%R%Y лет, %R%M месяцев, %R%D дней, %R%H часов, %R%I минут, %R%S секунд');
                                        $d = abs($interval->format('%R%D'));
                                        $h = abs($interval->format('%R%H'));
                                        $i = abs($interval->format('%R%I'));
                                        $s = abs($interval->format('%R%S'));
                                        //echo $interval->format('%R%H часов, %R%I минут, %R%S секунд');
                                        if($d>0){ echo $d .' дней '; }
                                        echo $h .' часов ';
                                        echo $i .' минут ';
                                        echo $s .' секунд';
                                        ?>
                                    </span>
                                    <table width="100%" border="0">
                                        <tr>
                                            <td>
                                    <form method="post" action="" name="approveGuest">
                                         {{ csrf_field() }}
                                        <input type="hidden" name="task" value="approveGuest">
                                        <input type="hidden" name="recommendation_id" value="{{ $inviter->recommendation->id }}">
                                        <button type="submit" class="btn btn-liberty-black">Одобрить и <br/>принять в сеть</button>
                                    </form>
                                            </td>
                                            <td>
                                    <form method="post" action="" name="refuseGuests">
                                         {{ csrf_field() }}
                                        <input type="hidden" name="task" value="refuseGuest">
                                        <input type="hidden" name="recommendation_id" value="{{ $inviter->recommendation->id }}">
                                        <button type="submit" class="btn btn-liberty-white">Отказать и <br/>заблокировать</button>
                                    </form>
                                          </td>
                                    </tr>
                                    </table>
                                @endif
                                @if($inviter->recommendation->status == 1) 
                                    <div class="alert alert-success"><i class="fa fa-check"></i>Одобрен(а)</div>
                                @endif
                                @if($inviter->recommendation->status == 2) 
                                    <div class="alert alert-danger"><i class="fa fa-times-circle"></i>Заблокирован(а)</div>
                                @endif
                            </div>
                            </div>

                        </div>
                    </div>
                    <hr/>
                    @endforeach
                @endif
            </div><!-- tab-pane -->
            
        </div><!-- tab-content -->
        <div class="row">
            <div class="col-sm-12">
                <p>
                    <b>Гости</b> - это привлеченные администрацией Liberty club посетители, желающие начать бизнес с Вами.
                <br/>
                    <b>Приглашенные</b> - это посетители Вашей инвайт-страницы, желающие начать бизнес с Вами.
                <br/>
                <b>Получившие Рекомендацию</b> становятся Новичками и появляются у Вас в <a href="structure" target="_blank">Сети</a>.
                <br/>
                    Гости и приглашенные, кому <b>отказано в Рекомендации</b> блокируются.
                </p>
            </div>
        </div>
</div>    
@else
<!-- нет абонемента -->
	
@if($user->profile->status_id == 2)
<!-- Новичкам -->
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
    function changeRecommendation(task, id){
        var token  = $('meta[name=_token]').attr('content');
        
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
            mydata['_token'] = token;           
            mydata['id'] = id;
            mydata['task'] = task;
        
            $.ajax({
		method: "POST",
		url: "./updateRecommendation",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    //RecommendationStatus
                    if(response['msg'] == 'approve'){
                        $('#RecommendationStatus'+id).css('background-color', '#e6ffe6');
                        $('#RecommendationStatus'+id).html('<div class="alert alert-success"><i class="fa fa-check"></i>Одобрен(а)</div>');    
                    }
                    if(response['msg'] == 'refuse'){
                        $('#RecommendationStatus'+id).css('background-color', '#ffe6e6');
                        $('#RecommendationStatus'+id).html('<div class="alert alert-danger"><i class="fa fa-times-circle"></i>Заблокирован(а)</div>');
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
</script>   
@endsection            

