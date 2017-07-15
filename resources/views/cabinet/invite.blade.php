@extends('layouts.milo-cabinet')

@section('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>
@endsection

@section('content')
    <br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">ИНВАЙТ - СТРАНИЦА</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">создайте команду вместе со своими друзьями</font>
            </h5>
            <br>
    @if($user_abonement)
    <p>Адрес Вашей страницы:</p>
    <p><a id="invite_page" href="http://{{ mb_strtolower($user->profile->company_login) }}.liberty.dev" target="_blank">
            http://{{ mb_strtolower($user->profile->company_login) }}.liberty.dev
        </a>
        <button class="button" id="copy-button" data-clipboard-target="#invite_page">Скопировать</button>
    </p>
    
    <hr/>
    <h3>Делитесь своей страницей и приглашайте гостей</h3>
<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div 
    class="pluso" 
    data-background="transparent" 
    data-options="big,square,line,horizontal,counter,theme=04" 
    data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print" 
    data-url="http://{{ mb_strtolower($user->profile->company_login) }}.liberty.dev" 
    data-title="Liberty club" 
    data-description="My Liberty club"></div>    
@else
<!-- нет абонемента -->
	
@if($user->profile->status_id == 2)
<!-- Новичкам -->
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
		"Invite" - приглашение (англ.)<br>
		Когда Вы станете Партнером и подтвердите свое членство в Клубе, Вам будет будет предоставлена автоматически созданная страница,
		с помощью которой Вы сможете пригласить своих друзей и знакомых с любой точки Мира для развития Вашей сети. Посетители пришедшие 
		по Вашему инвайту будут привязаны к Вашему аккаунту в Клубе, все ссылки для заказов, регистрации в качестве партнера или покупателя для этих посетителей,
		также будут вести на Ваши страницы в Компании, что позволит Вашему новому посетителю стать именно Вашим партнером, а Вам его Спонсором.
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
    new Clipboard('#copy-button');
    })();
    </script>
@endsection
