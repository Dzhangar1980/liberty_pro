@if(isset($user))
@endif
<div class="row">
    <div class="circle" style="margin-left: 12px;">
        @if($user->profile['photo'] == null)
        <img src="../images/users/avatars/nophoto.png" 
             title="Ваша фотография">
        @else
        <img src="../images/users/avatars/{{ $user->profile['photo'] }}" 
             title="Ваша фотография">
        @endif
    </div>
    <div class="widget-text text-left"> 
        <font color="#11388B"><b>{{ $user['name'] }}</b><br/><b>{{ $user['family'] }}</b></font>
    </div>
</div>
<br/>
<div class="row">
    <div class="widget-text">
        <div class="col-sm-4 text-center">
            @if($user->profile['status_id'] > 2)
                @if($user_abonement)
                <img src="../images/logoliberty/32blue.png" width="26px" height="26px" 
                     onclick="showAbonement()" title="Клубная карта активна" style="cursor: pointer;">
                @else
                    <img src="../images/logoliberty/32grey.png" width="26px" height="26px" 
                         onclick="showAbonement()" title="Клубная карта не активна" style="cursor: pointer;">
                @endif
            @else
                <img src="../images/logoliberty/32contur.png" width="26px" height="26px" 
                         onclick="showAbonement()" title="Ваш статус - {{ $user->profile->status->title }}" style="cursor: pointer;">
            @endif
        </div>
        <div class="col-sm-4 text-center">
            @if($user->profile->status_id < 5)
                <img src="../images/logoliberty/VIPgrey.png" style="cursor: pointer;height: 20px; width: auto;"
                 onclick="showVIP()" title="VIP-статус">
            @elseif($user->profile->status_id >= 5)
                <img src="../images/logoliberty/VIP.png" style="cursor: pointer;height: 20px; width: auto;"
                 onclick="showVIP()" title="VIP-статус">
            @endif
        </div>
        <!--
        @if($user->profile->sponsor != Null)
        <div class="col-sm-3 text-center">
            <div class="circle" style="margin-left: 0px;width: 30px;height: 30px;">
                <img src="../images/users/avatars/{{ $user->profile->mysponsor->profile['photo'] }}" 
                             title="Ваш спонсор" width="30px" height="30px" onclick="showSponsor()" style="cursor: pointer;">
            </div>
        </div>
        @endif
        -->
        <div class="col-sm-4 text-center">
            @if($user->profile->company_status == 2)
                @if($user->profile->company_pack != 0 && $user->profile->company_pack_confirmed != 0)
                    @if($user->profile->company_pack == 1)
                        <?php $pack_logo = "basic"; ?>
                    @endif
                    @if($user->profile->company_pack == 2)
                        <?php $pack_logo = "supreme"; ?>
                    @endif
                    @if($user->profile->company_pack == 3)
                        <?php $pack_logo = "jumbo"; ?>
                    @endif
                    @if($user->profile->company_pack == 4)
                        <?php $pack_logo = "ambassador"; ?>
                    @endif
                    @if($user->profile->company_pack == 5)
                        <?php $pack_logo = "jumbo1"; ?>
                    @endif
                    @if($user->profile->company_pack == 6)
                        <?php $pack_logo = "founder"; ?>
                    @endif
                    @if($user->profile->company_pack == 7)
                        <?php $pack_logo = "pres_founder"; ?>
                    @endif
                    
                    <img src="../images/packs/{{ $pack_logo }}.png" 
                     onclick="showQualification()" title="Ваш пакет" style="cursor: pointer;width: 26px;height: auto;">
                @endif
            @else
                <img src="../images/qualifications/{{ $user->profile->company_status }}.png" 
                     onclick="showQualification()" title="Ваша квалификация" style="cursor: pointer;width: 26px;height: auto;">
                @if($user->profile->company_status_confirmed == 0)
                    <i class="fa fa-question-circle"></i>
                @endif
            @endif
        </div>
    </div>
</div>
<br/>
<div class="widget-text">     
    <div id="abonement" style="display: none;">
        @if($user->profile['status_id'] > 2)
            @if($user_abonement)
                <h5>Доступ в клуб открыт</h5>
                <p>до <?php echo date("d.m.Y г. H:i ч.", strtotime($user_abonement->srok)); ?><br/>
                осталось <?php echo floor((strtotime($user_abonement->srok)- time()) / (60 * 60 * 24)); ?> дней</p>
            @else
            <hr/>
            <h5>Доступ в клуб закрыт</h5>
            <br/>
                <a href="balance" class="btn-liberty btn-liberty-black">Получить доступ</a>
            <hr/>
            @endif
        @elseif($user->profile['status_id'] == 1)     <!-- Guest -->
        
        <h5>Ваш статус - {{ $user->profile->status->title }}</h5>
        <p>Для начала заполните <a href="profile" target="_blank">Профиль</a>, чтобы получить Рекомендацию.<br/>
        Если Вы уже заполнили Профиль и он одобрен, <a href="#" onclick="location.reload(true);">обновите страницу</a>.</p>
        @elseif($user->profile['status_id'] == 2) <!-- Newer -->
        
        <h5>Ваш статус - {{ $user->profile->status->title }}</h5>
        <p>Стать членом клуба Вы сможете будучи Партнером.<br/>
            Как стать партнером смотрите в разделе <a href="video-0" target="_blank">Видео - Знакомство</a></p>
        @endif
    </div>
</div>     
<div id="VIP" style="display: none;">     
    <div class="widget-text"> 
        <h5>PRO-аккаунт</h5>
        @if($user->profile->status_id < 5)
            <p>О том как получить Pro-аккаунт и его преимуществах,
                смотрите в разделе <a href="video-0">Видео - Знакомство</a></p>
        @elseif($user->profile->status_id >= 5)
            <p>PRO-аккаунт предоставляет Вам доступ к специальным тренигам,
			   а также возможность принимать гостей клуба из общего трафика.</p>
        @endif
    </div>
</div>
    
<div id="qualification" style="display: none;">
    <div class="widget-text"> 
        <h5>Логин</h5>
	@if(strlen($user->profile->company_login) > 1 && $user->profile->company_login_confirmed != 0)
            {{ $user->profile->company_login }}<br>
        @else
            <p>Регистрация в компании отсутствует</p>
        @endif
        
        <h5>Квалификация</h5>
	@if($user->profile->qualification && $user->profile->company_status_confirmed != 0)
            {{ $user->profile->qualification->name }}<br>
        @else
            <p>Квалификация отсутствует</p>
        @endif
        
        <h5>Пакет</h5>
	@if($user->profile->company_pack != 0 && $user->profile->company_pack_confirmed != 0)
            {{ $user->profile->pack->name }}<br>
        @else
            <p>Пакет отсутствует</p>
        @endif
    </div>
	<br>
</div>

<div class="row">
    <div class="col-sm-12">
        <h4 class="panel-title">
        <a href="#" class="" onclick="showSponsor()">
            Спонсор 
        </a>
        </h4>
    </div>
</div>
<div id="sponsor" style="display: none;"> 
    <div class="widget-text">
        @if($user->profile->sponsor != Null)
        <div class="row">
                    <div class="circle" style="margin-left: 12px;">
                        <img src="../images/users/avatars/{{ $user->profile->mysponsor->profile['photo'] }}" 
                             title="Ваша фотография">
                    </div>
                    <div class="widget-text"> 
                        <font color="#11388B"><b>{{ $user->profile->mysponsor->name }}</b><br/>
                        <b>{{ $user->profile->mysponsor->family }}</b></font>
                    </div>
                </div>
        <br/>
                <div class="row">
                    <div class="col-sm-4 text-center">
                        @if($user_sponsor_abonement)
                            <img src="../images/logoliberty/32blue.png" width="26px" height="26px" 
                             title="Клубная карта активна">
                        @else
                            <img src="../images/logoliberty/32grey.png" width="26px" height="26px" 
                              title="Клубная карта не активна">
                        @endif
                    </div>
                    <div class="col-sm-4 text-center">
                        @if($user->profile->mysponsor->profile->status_id < 5)
                            <img src="../images/logoliberty/VIPgrey.png" style="height: 20px; width: auto;" title="VIP-статус">
                        @elseif($user->profile->mysponsor->profile->status_id >= 5)
                            <img src="../images/logoliberty/VIP.png" style="height: 20px; width: auto;" title="VIP-статус">
                        @endif
                    </div>
                    <div class="col-sm-4 text-center">
                        <img src="../images/qualifications/{{ $user->profile->mysponsor->profile->company_status }}.png" 
                             width="30px" height="30px" title="Квалификация">
                    </div>
                </div>
        <br/>
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Контакты</h5>
                    </div>
                    <div class="col-sm-12">
                        <a href="mailto:{{ $user->profile->mysponsor->email }}">{{ $user->profile->mysponsor->email }}</a>
                    </div>
                    <div class="col-sm-12">
                        @if($user->profile->mysponsor->profile->phones)
                            @foreach($user->profile->mysponsor->profile->phones as $phone)
                            <a href="tel:{{ $phone->number }}" target ="_blank">{{ $phone->number }}</a>
                                @if($phone->viber == 1)
                                    <img src="../images/viber-50x50.png" width="20px" height="20px">
                                @endif
                                @if($phone->whatsapp == 1)
                                    <img src="../images/whatsapp-50x50.png" width="20px" height="20px">
                                @endif
                                <br/>
                            @endforeach
                        @endif
                    </div>
                    @if($user->profile->mysponsor->profile->skype)
                    <div class="col-sm-12">
                        <a href="skype:{{ $user->profile->mysponsor->profile->skype }}?call">
                        <span class="fa fa-skype" style="color: #00aff0"> {{ $user->profile->mysponsor->profile->skype }}</span>
                        </a>
                    </div>
                    @endif
                </div>
        @endif
    </div>    
</div>     
<br/>
<!-- мигрирующий блок, мультикнопочный для разных статусов, видимый для мобильных -->
<div class="row">
    <div class="col-sm-12">
        
        @if($user->profile->status_id > 2)
        <a href="balance" class="">
		<img style="float: left; margin: 0px 20px 0px 10px;" src="../images/logoliberty/clubcard.png" width="30px" alt="" /> 
                <p style="text-align: justify; font-size: 12px; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
                    АБОНЕМЕНТ И ТРАФИК 
                </p>
        </a>
        @endif
        
        @if($user->profile->status_id > 4)
        <a href="guests" class="btn-liberty btn-liberty-white">
                    Гостей доступно {{ $count_guests }} 
        </a>
        @endif
        
    </div>
</div>