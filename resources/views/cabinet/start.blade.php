@extends('layouts.milo-cabinet')
@section('script')

@endsection
@section('content')

	@if($user->visit == 1)
			<p align="left">
			<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif; color: #7d7d7d; line-height: 1.5;">
			Ваш пароль <b>{{ $pass }}</b> оправлен на <b>{{ $user->email }}</b>
			</span>
			</p>
	@endif
	@if($user->profile->status_id == 1)
		<br>
    <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Добро пожаловать, {{ $user->name }}!</font>
            </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">мы рады приветствовать вас на нашем сайте</font>
            </h5>
			<br>
			<div class="row">
	<div class="col-sm-4">
		<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">LIBERTY</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            LIBERTY - СВОБОДА, НЕЗАВИСИМОСТЬ<br>
			Наш сайт помогает стать независимым финансово и географически, обрести личную свободу, расширить свои внешние и внутренние 
			границы, не зависеть от места жительства и уровня безработицы, возраста и образования. Если это похоже на Вас, то мы подружимся.
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-1.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	<div class="col-sm-4">
			<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">CLUB</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            КЛУБ - МЕСТО ВСТРЕЧИ ЛЮДЕЙ С ОБЩИМИ ИНТЕРЕСАМИ<br>
			Войдите на сайт и обретите настоящих друзей по всему миру, на которых всегда можно положиться. Для того, чтобы попасть в любой клуб, 
			нужна рекомендация его участника. Если Вы еще не получили рекомендацию, то Вы ее сможете получить после заполнения профиля.
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-2.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	<div class="col-sm-4">
		<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">.PRO</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            PRO - ПРОГРЕССИВНЫЙ, ПРОФЕССИОНАЛЬНЫЙ.<br>
			Так же от слова Promotion (продвигать). Как правило означает самую лучшую (pro) версию чего либо. Станьте лучше - узнайте на что 
			Вы способны. Пространство .pro было создано только для ресурсов, предоставляющих профессиональный уровень сервиса
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-3.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	</div><!--row--->
	<div class="row">
		<div class="col-sm-12">
			<?php
				//echo count($user->profile->phones);
			?>
			<br><br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Любое общение начинается с знакомства</font>
            </h5>
			<br>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				Для того, чтобы получить рекомендацию, познакомиться с возможностями для участников клуба и всеми функциями сайта, заполните пожалуйста <b>ПРОФИЛЬ</b>,
				который послужит небольшим резюме. От полноты заполнения профиля, будет зависеть успешность нашего дальнейшего сотрудничества. Обязательными
				для заполнения, являются следующие разделы:
				</span>
			
			<div class="col-sm-12">
			
				<ul>
				<li><span style="font-size: 14px; color: rgb(0, 0, 0)"><b>ФОТОГРАФИЯ</b> - загрузите Ваше фото</span></li>
				<li><span style="font-size: 14px; color: rgb(0, 0, 0)"><b>ЛИЧНЫЕ ДАННЫЕ</b> - укажите Ваши Имя, Фамилию, место жительства (Город) </span></li>
				<li><span style="font-size: 14px; color: rgb(0, 0, 0)"><b>КОНТАКТЫ</b> - укажите контакты по которым мы сможем связаться с Вами для короткого 
			очного знакомства, помощи в следующих шагах и просто дабы убедиться, что Вы не бот.</span></li> 
			<br>
			<span style="font-size: 14px; color: rgb(0, 0, 0)">
			Поскольку мы работаем в 145 странах Мира, будет хорошо если Вы укажете номер телефона с <font color="#7d519e"><b>Viber</b></font> или 
			<font color="#29b200"><b>WhatsApp</b></font>, либо укажете Ваш <font color="#00aff0"><b>Skype</b></font>.
			</span>
			</p>
			</ul>
			</div>
			<div class="col-sm-12">
				<br><br>
				<p align="center">
				<a class="btn-liberty btn-liberty-black" href="profile">Заполнить Профиль</a>
				</p>
			</div>
		</div><!--col-sm-12--->
		</div><!--row--->
		@endif
	
		@if($user->profile->status_id == 2)
		@if($user->visit == 1)	
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Поздравляем, {{ $user->name }}!</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Ваш новый статус "новичок"</font>
            </h5>
		@else
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">{{ $user->name }}, ваш статус</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">По прежнему "новичок"</font>
            </h5>	
		@endif
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				Человек от которого Вы получили рекомендацию в клуб, будет Вашим Спонсором.
				Спо́нсор (от лат. «spondeo» - ручаюсь, гарантирую) будет вести Вас и помогать в PROцессе Вашего PROдвижения в Клубе.
				Данные Спонсора Вы всегда можете найти сразу под блоком отображения Вашего аккаунта слева и обратиться к нему по любым вопросам,
				связанным с работой сайта. Также Вы можете обратиться за помощью к любому квалифицированному партнеру из аплайна, которых Вы можете увидеть
				кликнув на иконку <a href="sponsors"><span class="fa fa-handshake-o"></span></a> в левой части экрана.
				</span>
			</p>
				<br>
				<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">что дальше</font>
				</h5>
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				Теперь Вы можете ознакомиться с возможностями ведения домашнего онлайн-бизнеса, которые используют участники нашего Клуба.
				Для этого войдите в раздел Видео/Знакомство в верхнем меню, где Вы сможете посмотреть два видео.<br><br>
				<b>- Часть 1. Ознакомление.</b><br>
				Перед просмотром, приготовьте ручку и бумагу для того, чтобы пометить возможные вопросы.
				Для большей вероятности правильного усвоения информации, видео не прокручивается, есть кнопка паузы.
				Если как и тысячи наших партнеров в 145 странах, Вы увидите перспективу, то после завершения первой части  
				Вы сможете посмотреть второе видео, где подробно узнаете сколько и как Вы с этим сможете зарабатывать.<br><br>
				<b>- Часть 2. Виды доходов и квалификации</b><br>
				В процессе ознакомления делайте себе пометки, записывайте. От того, как хорошо Вы разберетесь, будет зависеть сможем ли 
				мы с Вами вместе работать дальше. 
				<br><br>
				</span>
			</p>
			<div class="row">
			<div class="col-sm-12">
				<br><br>
				<p align="center">
				<a class="btn-liberty btn-liberty-black" href="video-0" target="blank">Перейти к просмотру</a>
				</p>
			</div><!--col-sm-12--->
			</div><!--row--->
	<br>		
	<br><br>		
	<div class="row">		
	<div class="col-sm-4">
		<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">LIBERTY</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            LIBERTY - СВОБОДА, НЕЗАВИСИМОСТЬ<br>
			Наш сайт помогает стать независимым финансово и географически, обрести личную свободу, расширить свои внешние и внутренние 
			границы, не зависеть от места жительства и уровня безработицы, возраста и образования. Если это похоже на Вас, то мы подружимся.
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-1.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	<div class="col-sm-4">
			<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">CLUB</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            КЛУБ - МЕСТО ВСТРЕЧИ ЛЮДЕЙ С ОБЩИМИ ИНТЕРЕСАМИ<br>
			Общайтесь с участниками и обретите настоящих друзей по всему миру, на которых всегда можно положиться. Для того, чтобы попасть в любой клуб, 
			нужна рекомендация его участника. Гости нашего клуба получают рекомендацию, в скором времени, после короткого живого общения.
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-2.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	<div class="col-sm-4">
		<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">.PRO</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            PRO - ПРОГРЕССИВНЫЙ, ПРОФЕССИОНАЛЬНЫЙ.<br>
			Так же от слова Promotion (продвигать). Как правило означает самую лучшую (pro) версию чего либо. Станьте лучше - узнайте на что 
			Вы способны. Пространство .pro было создано только для ресурсов, предоставляющих профессиональный уровень сервиса
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-3.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	</div><!--row--->
	
		<div class="col-sm-12">
						
			
		</div><!--col-sm-12--->
		
		@endif
		@if($user->profile->status_id == 3)
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Поздравляем, {{ $user->name }}!</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Ваш новый статус "партнер"</font>
            </h5>	
		
		@endif
		@if($user->profile->status_id == 4)
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Привет, {{ $user->name }}!</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Ваш текущий статус "Дистрибьютор"</font>
            </h5>	
		
		@endif
		@if($user->profile->status_id == 5)
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Привет, {{ $user->name }}!</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Ваша квалификация "Дистрибьютор"<br><br>PRO-аккаунт</font>
            </h5>	
		
		@endif
		@if($user->profile->status_id == 6)
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Привет, {{ $user->name }}!</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Ваша квалификация "Специалист"<br><br>PRO-аккаунт</font>
            </h5>	
		
		@endif
		@if($user->profile->status_id == 7)
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Привет, {{ $user->name }}!</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Ваша квалификация "Нефрит"<br><br>PRO-аккаунт</font>
            </h5>	
		
		@endif
		@if($user->profile->status_id == 8)
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Привет, {{ $user->name }}!</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Ваша квалификация "Жемчуг"<br><br>PRO-аккаунт</font>
            </h5>	
		
		@endif
		@if($user->profile->status_id == 9)
		<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Привет, {{ $user->name }}!</font>
        </h2>
		<br>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Ваша квалификация "Сапфир"<br><br>PRO-аккаунт</font>
            </h5>	
		<br>
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				<b>Квалификация "Сапфир"</b> (QS, Sapphire)<br>
				Позволяет Вам получать 4 вида дохода, предусмотренных Планом компенсаций Компании:<br>
				- Доход от прямых продаж<br>
				- Прямые премии<br>
				- Командные комиссионные<br>
				- Лидерский бонус от 1, 2 и 3 уровня.<br>
				Если Ваша квалификация изменилась, Вам необходимо указать новую квалификацию в данных Профиля Вашего Аккаунта и связаться со спонсором
				или любым партнером из <a href="sponsors">аплайна</a>, для подтверждения.
				<br><br>
				<b>PRO - аккаунт LibertyClub</b> (Pro - Professional, Progress, Promotion)<br>
				1. Позволяет Вам, в соответствии с Вашей калификацией, иметь доступ к PRO - тренингам, которые помогут Вам повысить свой уровень 
				профессионализма в бизнесе C2C, что в свою очередь будет способствовать росту квалификации в Компании и уровня дохода.<br>
				2. Пользоваться "Органайзером", включающим в себя дополнительные инструменты для более успешной работы.<br>
				3. Принимать Гостей из числа свободных посетителей сайта из различных стран и городов, для расширения Вашей сети партнеров и потребителей.
				</span>
			</p>
			<br><br>		
	<div class="row">		
	<div class="col-sm-4">
		<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">LIBERTY</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            LIBERTY - СВОБОДА, НЕЗАВИСИМОСТЬ<br>
			Наш сайт помогает стать независимым финансово и географически, обрести личную свободу, расширить свои внешние и внутренние 
			границы, не зависеть от места жительства и уровня безработицы, возраста и образования. Если это похоже на Вас, то мы подружимся.
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-1.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	<div class="col-sm-4">
			<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">CLUB</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            КЛУБ - МЕСТО ВСТРЕЧИ ЛЮДЕЙ С ОБЩИМИ ИНТЕРЕСАМИ<br>
			Общайтесь с участниками и обретите настоящих друзей по всему миру, на которых всегда можно положиться. Для того, чтобы попасть в любой клуб, 
			нужна рекомендация его участника. Гости нашего клуба получают рекомендацию, в скором времени, после короткого живого общения.
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-2.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	<div class="col-sm-4">
		<h3 align="left" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">.PRO</font>
        </h3>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            PRO - ПРОГРЕССИВНЫЙ, ПРОФЕССИОНАЛЬНЫЙ.<br>
			Так же от слова Promotion (продвигать). Как правило означает самую лучшую (pro) версию чего либо. Станьте лучше - узнайте на что 
			Вы способны. Пространство .pro было создано только для ресурсов, предоставляющих профессиональный уровень сервиса
			</span>
			<img style="float: left; margin: 10px 20px 10px 0px;" src="../milo/images/about/tabs/image-3.jpg" width="100%" alt="" />
		</p>
	</div><!--col-sm-4 --->
	</div><!--row--->
		@endif
@endsection
@section('script1')
<script>

</script>
@endsection
