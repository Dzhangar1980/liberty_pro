@extends('layouts.milo-cabinet')
@section('script')

@endsection
@section('content')
<br>
	<br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">ВАШ АПЛАЙН</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">единомыслие создает дружбу (демокрит)</font>
            </h5>
            <br><br> 
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
                <span style="font-size: 14px;">
					Человек от которого Вы получили рекомендацию - это Ваш прямой Спо́нсор (от лат. «spondeo» - ручаюсь, гарантирую). Спонсор будет вести Вас и помогать в PROцессе Вашего PROдвижения в Клубе. Цепочка рекомендаций, составляющая Ваш спонсорский ряд, называется 
					Аплайн. Если прямой спонсор (первый в списке) по какой-то причине не имеет возможности в определенный момент Вам помочь, Вы можете обратиться к любому предследующему Партнеру из Аплайна.    
				</span>
			</p>
			<br>
    @foreach($sponsors as $sponsor)
    
    <div class="net_owner">
        <div class="row">    
            <div class="col-sm-3">
                <div class="icon_set right_part">                                   
                    <a href="./personal_messages?tuid={{ $sponsor->id }}&uid={{ $user->id }}" target="_blank" class="popup" title="Сообщения" data-text="Сообщения">
                        <i class="el el-envelope"></i>
                    </a>
                </div>								
                <a href="" class="photo_box">
                    <img src="../images/users/avatars/{{ $sponsor->profile->photo }}" alt="img">
                </a>
                <div class="name_box">
                    <div class="qualification_box">
                        @if($sponsor->profile->company_status == 2)
                            @if($sponsor->profile->company_pack != 0 && $sponsor->profile->company_pack_confirmed != 0)
                                @if($sponsor->profile->company_pack == 1)
                                    <?php $pack_logo = "basic"; ?>
                                @endif
                                @if($sponsor->profile->company_pack == 2)
                                    <?php $pack_logo = "supreme"; ?>
                                @endif
                                @if($sponsor->profile->company_pack == 3)
                                    <?php $pack_logo = "jumbo"; ?>
                                @endif
                                @if($sponsor->profile->company_pack == 4)
                                    <?php $pack_logo = "ambassador"; ?>
                                @endif
                                @if($sponsor->profile->company_pack == 5)
                                    <?php $pack_logo = "jumbo1"; ?>
                                @endif
                                @if($sponsor->profile->company_pack == 6)
                                    <?php $pack_logo = "founder"; ?>
                                @endif
                                @if($sponsor->profile->company_pack == 7)
                                    <?php $pack_logo = "pres_founder"; ?>
                                @endif
                                <div class="qualification" style="background-image: url(../images/packs/{{ $pack_logo }}.png);"></div>
                                                            @endif
                                                            @else
                                                            <div class="qualification" style="background-image: url(../images/qualifications/{{ $sponsor->profile->company_status }}.png);"></div>
                                                            @endif
                                                        </div>
                                                        <a href="">
                                                            <div class="net_owner_name">
                                                                <span style="font-family: Open Sans, Arial, sans-serif;">{{ $sponsor->name }}</span>
                                                                <br/>
                                                                <span style="font-family: Open Sans, Arial, sans-serif;">{{ $sponsor->family }}</span></div>
                                                        </a>
                                                    </div>
                                                    <div class="online">
                                                        @if($sponsor->isOnline())
                                                            <span class="fa fa-circle" style="font-size: 16px;color: lime;"></span>
							@else
                                                            <!-- <span class="fa fa-circle" style="font-size: 20px;color: red;"></span> -->
							@endif
                                                    </div>
						</div>
						<div class="col-sm-4">
						<p>
                                                    <span class="fa fa-map-marker"> 
                                                        <span style="font-family: Open Sans, Arial, sans-serif;">
                                                            {{ $sponsor->profile->mycity->country['country_name_ru'] }},  
                                                            {{ $sponsor->profile->mycity->city_name_ru }}
                                                        </span>
                                                    </span>
                                                    <br>
                                                    <span class="fa fa-envelope-o"> 
                                                        <span style="font-family: Open Sans, Arial, sans-serif;">
                                                            {{ $sponsor->email }}
                                                        </span>
                                                    </span>
                                                    <br>
                                                    <span class="fa fa-skype"> 
                                                        <span style="font-family: Open Sans, Arial, sans-serif;">
                                                            {{ $sponsor->profile->skype }}
                                                        </span>
                                                    </span>
                                                    @if($sponsor->profile->phones)
                                                        @foreach($sponsor->profile->phones as $phone)
                                                            <br>
                                                            <span class="fa fa-phone"> 
                                                                <span style="font-family: Open Sans, Arial, sans-serif;">
                                                                    {{ $phone->number }} 
                                                                </span>
                                                                @if($phone->viber == 1)
                                                                    <img src="../images/viber-50x50.png" width="18px" height="18px">
								@endif
								@if($phone->whatsapp == 1)
                                                                    <img src="../images/whatsapp-50x50.png" width="18px" height="18px">
								@endif
                                                            </span>
							@endforeach
                                                    @endif
						</p>
						<p>
                                                    @if($sponsor->profile->fb_id == NULL)
                                                        <span class="btn fa fa-facebook" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                                    @else
                                                        <a href="{{ $sponsor->profile->fb_id }}" class="btn fa fa-facebook" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;"></a>
                                                    @endif
										
                                                    @if($sponsor->profile->vk_id == NULL)
                                                        <span class="btn fa fa-vk" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                                    @else
                                                        <a href="{{ $sponsor->profile->vk_id }}" class="btn fa fa-vk" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;"></a>
                                                    @endif

                                                    @if($sponsor->profile->ok_id == NULL)
                                                        <span class="btn fa fa-odnoklassniki" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                                                    @else
                                                        <a href="{{ $sponsor->profile->ok_id }}" class="btn fa fa-odnoklassniki" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;"></a>
                                                    @endif
						</p>         
                                            </div>		
                                            <div class="col-sm-5">                                            
                                                <span class="fa fa-sign-in"> 
                                                    <span style="font-family: Open Sans, Arial, sans-serif;">
                                                        Дата регистрации: {{ date("d.m.Y г.", strtotime($sponsor->created_at)) }}
                                                    </span>
                                                </span>
                                                <br>
                                                <span class="fa fa-calendar-o"> 
                                                    <span style="font-family: Open Sans, Arial, sans-serif;">
                                                        Посл. посещение: {{ date("d.m.Y г.", strtotime($sponsor->updated_at)) }}
                                                    </span>
                                                </span>
                                                <br>
                                                <img src="../images/logoliberty/jlogo.png" width="15px" height="20px"> 
                                                <span style="font-family: Open Sans, Arial, sans-serif;">
                                                    {{ $sponsor->profile->company_login }}
                                                </span>
                                                @if($sponsor->profile->pack)
                                                    <br>
                                                    <img src="../images/packs/basic.png" width="15px" height="20px"> 
                                                    <span style="font-family: Open Sans, Arial, sans-serif;">
                                                        {{ $sponsor->profile->pack->name }}
                                                    </span>
                                                @endif
                                            </div>
        				</div>
				</div>
    <hr>
    @endforeach
	<div class="row">
    
    </div>
    
@endsection
@section('script1')
<script>

</script>
@endsection
