@extends('layouts.milo-cabinet')
@section('content')
<br><br>
		<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Вы прошли ознакомление</font>
        </h2>
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">теперь вам доступно</font>
            </h5>
			<br>
			<div class="widget widget-tags" align="center">
				<div>
					<a onclick="$('#assotiate').show();$('#client').hide();$('#moreinfo').hide();$('#scott').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">СТАТЬ ПАРТНЕРОМ</span>
					</a>
					<a onclick="$('#assotiate').hide();$('#client').show();$('#moreinfo').hide();$('#scott').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">СТАТЬ КЛИЕНТОМ</span>
					</a>
					<a onclick="$('#moreinfo').show();$('#assotiate').hide();$('#client').hide();$('#scott').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">НОВЫЕ РАЗДЕЛЫ</span>
					</a>
				</div>
				<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #7d7d7d;">
				<span style="font-size: 14px;">
				кликните по интересующей вас кнопке
				</span>
				</p>
			</div>
			<div id="scott">
				<img align="center" src="../images/people/scott1200logo.jpg" width="100%" alt="" />
			</div>
			<div id="moreinfo" style="display: none">
				<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
                <span style="font-size: 16px;">
                    <font><b>
                    ВИДЕО НОВИЧКАМ</b><br/> 
					</font>
                </span>
				</p>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				Открыв раздел <a href="video-1" target="_blank"><b>Новичкам</b></a> в пункте <b>Видео</b> в верхнем меню, Вы можете посмотреть три видео, которые помогут Вам
				принять окончательное решение в отношении начала бизнеса с Jeunesse в рамках нашего Клуба. Также как происходило Видеознакомство, ролики будут 
				открываться по мере их просмотра.<br/>
				1. Бизнес C2C - что это такое?<br/>
				2. Возражения и неудачи в бизнесе.<br/>
				3. Цели и их достижение.<br/>
				</span>
			</p>
			<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
                <span style="font-size: 16px;">
                    <font><b>
                    КОМПАНИЯ</b><br/> 
					</font>
                </span>
				</p>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				<a href="company_about" target="_blank"><b>О Компании</b></a> (в разделе Компания в верхнем меню) - подробно познакомьтесь с историей компании,
				создателями и руководством, событиями, возможностями, программой премиальных путешествий и благотворительной программой JKids.<br>
				<a href="company_about" target="_blank"><b>Продукция</b></a> - подробно ознакомьтесь с продукцией Jeunesse. После выбора тех 
				или иных продуктов на странице раздела, Вам откроются описания, видео, результаты применения, сертификаты, а так же Вы сможете приобрести ту или иную продукцию
				как обычный клиент, как клиент со скидкой или как партнер, выбрав тот или иной способ во вкладке "Как купить".<br>
				<a href="company_about" target="_blank"><b>Рейтинг DSA</b></a> - что такое Ассоциация Прямых Продаж. Посмотрите тенденцию роста компании, сравните скорость продвижения Jeunesse с другими
				компаниями мирового рынка.<br>
				<a href="company_about" target="_blank"><b>Справка</b></a> - в этот раздел Вы всегда можете обратиться, чтобы посмотреть инструкции по регистрации, предлагаемые стартовые пакеты, квалификации,
				информацию об автошипе и активности, а также адреса офисов Jeunesse, контакты служб поддержки и найти другие ответы на вопросы, касаемо работы компании.<br>
				</span>
			</p>
			<br>
			
			<br>
			</div>
			<div id="assotiate" style="display: none">
				<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
                <span style="font-size: 16px;">
                    <font><b>
                    РЕГИСТРАЦИЯ ПАРТНЕРА</b><br/> 
					</font>
                </span>
				</p>
				<a name="registration"></a>
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					<span style="font-size: 14px;">
					Пройдя по специальной<a href="https://joffice.jeunesseglobal.com/signup.asp?locale=ru-RU&siteurl={{ $user->profile->mysponsor->profile->company_login }}" target="_blank">
					ссылке регистрации нового ПАРТНЕРА</a> Jeunesse, Вам нужно выполнить несколько шагов.
					Для перехода к форме регистрации также можно зайти на <a href="https://{{ $user->profile->mysponsor->profile->company_login }}.jeunesseglobal.com/" target="_blank">
					официальный сайт партнера</a>, давшего Вам рекомендацию и нажать на пункт "СТАНЬТЕ УЧАСТНИКОМ" в верхнем меню.
					<br>
					</span>
				</p>
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					<span style="font-size: 14px;">
									ВНИМАНИЕ: <i>Все поля заполняются английскими буквами!</i><br><br>
									<font color="#00a7b5"><b>JEUNESSE GLOBAL APPLICATION</b></font><br>
									Выберите страну проживания в пункте<br> 
									<b>"Please select the region you are signing up from"</b><br> 
									Например: "RUSSIAN FEDERATION".<br> 
									<b>"Please select language"</b> - выберите язык (Russian).<br>
									Независимо от выбранной страны, можете выбрать любой из предложенных.<br>
									После этого нажимайте на кнопку "Continue" (Продолжить).<br>
									<br>
									<font color="#00a7b5"><b>ДИСТРИБЬЮТОР И ЗАЯВКА НА ЗАКАЗ</b></font><br>								
									Ставим галочку "Я согласен".<br>
									Кликаем кнопку "Continue".<br>
									<br>
									<font color="#00a7b5"><b>ВЫБОР АДРЕСА САЙТА</b></font><br>
									<b>URL главного сайта</b><br>
									нужно выбрать логин - название для Вашего партнерского сайта (латинницей).<br> 
									Например, если написать "lotus", то адрес вашего сайта будет: lotus.jeunesseglobal.com.<br>
									Затем нажмите <font color="#00a7b5">"Проверьте, есть ли в наличии"</font><br> 
									<font color="#ea4335">"Requested Siteurl not available for use."</font>, значит логин занят и нужно придумать другой.<br>
									<font color="#34a853">"Requested Siteurl is available for use."</font>, значит логин свободен и можно заполнять пароль.<br>
									<b>Пароль</b>: придумайте и впишите пароль<br>
									<b>Подтвердить пароль</b>: впишите пароль еще раз<br>
									<br>
									<font color="#00a7b5"><b>ИНФОРМАЦИЯ О ДИСТРИБЬЮТОРЕ</b></font><br>
									<b>Имя</b> (английский): Ivan<br>
									<b>Фамилия</b> (английский): Ivanov<br>
									Название компании: оставить пустым<br>
									<b>Отобразить имя</b>: Ivan Ivanov<br>
									<b>Имя на чеке</b>: Ivan Ivanov<br>
									<b>Дата рождения</b>: месяц/день/год<br>
									Тип идентификации: SSN<br>
									Идентификационный номер: оставить пустым<br>
									Имя созаявителя: оставить пустым<br>
									Идентификационный номер созаявителя: оставить пустым<br>
									<br>
									<font color="#00a7b5"><b>КОНТАКТНАЯ ИНФОРМАЦИЯ</b></font><br>
									Укажите ваш действительный электронный адрес<br>
									и телефон без "+", скобок и пробелов. Например: 79659876543<br><br>
									<font color="#00a7b5">
									<b>ПОЧТОВЫЙ АДРЕС</b></font><br>
									<b>Имя для доставки</b>: в первом поле Имя, во втором Фамилию (латинницей)<br>
									<b>Адресная строка 1</b>: указываем улицу, дом, квартиру (ul. Lenina 5, kv. 10)<br>
									<b>Адресная строка 2</b>: указываем улицу, дом, квартиру на русском<br>
									<b>City</b>: Выберите свой город. Если Вашего города нет, впишите название своего нас. пункта в графе "Город" так же латинницей<br>
									<b>Штат</b>: Выберите свой регион - область, край, республику
									(если Вы живете в Москве, выберите Moskva)
									<b>Postal Code</b>: Почтовый индекс
									<br><br>
									<font color="#00a7b5">
									<b>АДРЕС ДОСТАВКИ</b></font><br>
									Если желаемый адрес доставки совпадает с фактическим адресом, поставьте галочку и поля заполнятся автоматически.
									В ином случае можете указать другой адрес, который будет отображаться при дальнейших заказах. 
									Адрес доставки так же можно будет редактировать во время оформления заказов.<br>
									<br>
									<font color="#00a7b5">
									<b>Регистрационный набор</b></font>: Выбирайте "StarterKit"<br>
									<br>
									<b>Выберите вид автошипа</b> (поле может отсутвовать):<br>
									укажите "Do not wish to signup for Autoship" (не подписываться на автошип)<br>
									<br>
									Заполнив форму, нажмите на кнопку "Роспись" внизу страницы.<br><br> 
									После этого откроется страница совершения оплаты годового технического обслуживания вашей системы управления бизнесом - StarterKit, включающей в себя 
									интернет-магазин и бэкофис. Эта система обеспечит Вас всем необходимым для ведения бизнеса Jeunesse® онлайн. Вы cможете вести наблюдение за продвижением 
									Вашего бизнеса, настраивать установки автошипа, контролировать отчеты по бизнесу, покупать продукцию, иметь доступ к отчетам по комиссионным и многое другое.
									Стоимость годового обслуживания StarterKit составляет $29,95 без ндс, в валюте страны указанной при регистрации.<br>
					</span>
				</p>
				<div class="elements-section" id="accordion">
					<div class="panel-group" id="accordion-0">
						<div class="panel">   
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-0" href="#collapse01" class="collapsed" aria-expanded="false">ВИДЕОИНСТРУКЦИЯ</a>
								</h4>
						</div><!-- panel-heading -->   
						<div id="collapse01" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<br>
									<div class="videoWrapper">
										<iframe frameborder="0" src="//www.youtube.com/embed/g6jo6JmZw1U?rel=0&showinfo=0" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
									</div>
							</div><!-- panel-body -->
						</div><!-- panel-collapse -->  
						</div><!-- panel -->
					</div><!-- accordion 4 -->
				</div><!-- elements-section -->
				</div><!-- assotiate -->
			<div id="client" style="display: none">
				<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
                <span style="font-size: 16px;">
                    <font><b>
                    1. КУПИТЬ У ПРЕДСТАВИТЕЛЯ</b><br/> 
					</font>
                </span>
				</p>
					<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					<span style="font-size: 14px;">
					Продукция Jeunesse не продается в обычных магазинах, в сторонних интернет-магазинах и на других торговых интернет-площадках.
					Для гарантированного приобретения качественной продукции и во избежание покупки подделок, Вы можете воспользоваться любым из 
					4-х представленных способов. Первый из них - это связаться с официальным представителем Jeunesse, давшим Вам ссылку на этот сайт.
					Таким образом Вы сможете приобрести тот или иной продукт по цене представленной на официальном сайте без оформления заказа.
					Если представитель находится с Вами в одном городе, Вы сэкономите на доставке, самостоятельно купив продукцию у представителя. 
					В ином случае представитель, после получения необходимой
					суммы, оформит заказ нужной Вам продукции через свой кабинет в компании, указав Ваш адрес в качестве адреса доставки и Вы получите 
					продукцию с доставкой на дом.
					</span>
					</p>
					<p style="text-align: center; font-family: Open Sans, Arial, sans-serif; color: #658FEA; line-height: 1.5;">
					<span style="font-size: 14px;">
					КОНТАКТЫ
					</span>
					</p>
					<div class="net_owner">
						<div class="row">    
							<div class="col-sm-3">
								<div class="icon_set right_part">                                   
										<a href="./personal_messages?tuid={{ $user->profile->mysponsor->id }}&uid={{ $user->profile->mysponsor->id }}" target="_blank" class="popup" title="Сообщения">
										<i class="el el-envelope"></i>
									</a>
								</div>
								
								<a href="" class="photo_box"><img src="../images/users/avatars/{{ $user->profile->mysponsor->profile->photo }}" alt="img"></a>
								<div class="name_box">
										<div class="qualification_box">
											@if($user->profile->mysponsor->profile->company_status == 2)
												@if($user->profile->mysponsor->profile->company_pack != 0 && $user->profile->mysponsor->profile->company_pack_confirmed != 0)
													@if($user->profile->mysponsor->profile->company_pack == 1)
														<?php $pack_logo = "basic"; ?>
													@endif
													@if($user->profile->mysponsor->profile->company_pack == 2)
														<?php $pack_logo = "supreme"; ?>
													@endif
													@if($user->profile->mysponsor->profile->company_pack == 3)
														<?php $pack_logo = "jumbo"; ?>
													@endif
													@if($user->profile->mysponsor->profile->company_pack == 4)
														<?php $pack_logo = "ambassador"; ?>
													@endif
													@if($user->profile->mysponsor->profile->company_pack == 5)
														<?php $pack_logo = "jumbo1"; ?>
													@endif
													@if($user->profile->mysponsor->profile->company_pack == 6)
														<?php $pack_logo = "founder"; ?>
													@endif
													@if($user->profile->mysponsor->profile->company_pack == 7)
														<?php $pack_logo = "pres_founder"; ?>
													@endif
													<div class="qualification" 
													style="background-image: url(../images/packs/{{ $pack_logo }}.png);"></div>
												@endif
											@else
												<div class="qualification" 
												 style="background-image: url(../images/qualifications/{{ $user->profile->mysponsor->profile->company_status }}.png);"></div>
											@endif
											
										</div>
									<a href="">
										<div class="net_owner_name">{{ $user->profile->mysponsor->name }}<br/>{{ $user->profile->mysponsor->family }}</div>
									</a>
								</div>
								<div class="online">
								@if($user->profile->mysponsor->isOnline())
									<span class="fa fa-circle" style="font-size: 16px;color: lime;"></span>
								@else
								   <!-- <span class="fa fa-circle" style="font-size: 20px;color: red;"></span> -->
								@endif
								</div>
							</div>
							<div class="col-sm-4">
								<p>
									<span class="fa fa-map-marker"> {{ $user->profile->mysponsor->profile->mycity->country['country_name_ru'] }},  {{ $user->profile->mysponsor->profile->mycity->city_name_ru }}</span>
									<br><span class="fa fa-envelope-o"> {{ $user->profile->mysponsor->email }}</span>
									<br><span class="fa fa-skype"> {{ $user->profile->mysponsor->profile->skype }}</span>
									@if($user->profile->mysponsor->profile->phones)
										@foreach($user->profile->mysponsor->profile->phones as $phone)
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
									@if($user->profile->mysponsor->profile->fb_id == NULL)
										<span class="btn fa fa-facebook" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
									@else
										<a href="{{ $user->profile->mysponsor->profile->fb_id }}" class="btn fa fa-facebook" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
										</a>
									@endif
										
									@if($user->profile->mysponsor->profile->vk_id == NULL)
										<span class="btn fa fa-vk" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
									@else
										<a href="{{ $user->profile->mysponsor->profile->vk_id }}" class="btn fa fa-vk" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
										</a>
									@endif

									@if($user->profile->mysponsor->profile->ok_id == NULL)
										<span class="btn fa fa-odnoklassniki" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
									@else
										<a href="{{ $user->profile->mysponsor->profile->ok_id }}" class="btn fa fa-odnoklassniki" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
										</a>
									@endif
								</p>         
							</div>		
							<div class="col-sm-5">
                                                            <span class="fa fa-sign-in"> Дата регистрации: {{ date("d.m.Y г.", strtotime($user->profile->mysponsor->created_at)) }}</span>
                                                            <br><span class="fa fa-calendar-o"> Посл. посещение: {{ date("d.m.Y г.", strtotime($user->profile->mysponsor->updated_at)) }}</span>
                                                            <br><img src="../images/logoliberty/jlogo.png" width="15px" height="20px"> {{ $user->profile->mysponsor->profile->company_login }}
                                                            @if($user->profile->mysponsor->profile->pack)
                                                            <br><img src="../images/packs/basic.png" width="15px" height="20px"> {{ $user->profile->mysponsor->profile->pack->name }}
                                                            @endif
							</div>
        				</div>
					</div>
				<br><br>
					<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
						<span style="font-size: 16px;">
						<font><b>
						2. КУПИТЬ НА САЙТЕ</b><br/> 
						</font>
						</span>
					</p>
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					<span style="font-size: 14px;">
					Для самостоятельного оформления заказа с сайта Jeunesse, Вам нужно перейти в 
					<a href="https://{{ $user->profile->mysponsor->profile->company_login }}.jeunesseglobal.com/" target="_blank">
					официальный интернет магазин</a> представителя
					компании, кликнуть "ПРОДУКЦИЯ", выбрать необходимый вам товар и сделать заказ как в любом обычном интернет-магазине с доставкой на дом.
					На странице официального сайта представителя Jeunesse Вы так же можете получить статус "Приоритетный покупатель" и совершать покупки
					со скидкой до 20%, либо зарегистрироваться как партнер компании и иметь возможность совершать покупки со скидкой 35% и более.
					</span>
					</p>
					<p align="center"><font color="#952181">
						<a href="https://{{ $user->profile->mysponsor->profile->company_login }}.jeunesseglobal.com/" target="_blank">ПОСЕТИТЬ МАГАЗИН</a>
					</font></p>
					<div class="hover01 column">
						<div>   
									<figure>
										<a href="#" data-featherlight="../images/products/shopscreen.JPG">
											<a href="https://{{ $user->profile->mysponsor->profile->company_login }}.jeunesseglobal.com/" target="_blank">
												<img src="../images/products/shopscreen.JPG" width="100%" height="100%" alt="Пример">
											</a>
										</a>
									</figure>
						</div>
					</div>
					<br><br>
					<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
						<span style="font-size: 16px;">
						<font><b>
						3. ПРИОРИТЕТНЫЙ ПОКУПАТЕЛЬ</b><br/> 
						</font>
						</span>
					</p>
						<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
						<span style="font-size: 14px;">
						Людям, желающим просто приобретать продукцию по более выгодной цене, Jeunesse предоставляет такую возможность. Для этого 
						достаточно бесплатно зарегистрироваться на сайте в качестве "ПРИОРИТЕТНОГО ПОКУПАТЕЛЯ", указав свое Имя и Фамилию, контактные данные и адрес доставки.
						Сделать это можно на <a href="https://{{ $user->profile->mysponsor->profile->company_login }}.jeunesseglobal.com/" target="_blank">
						официальным сайте партнера</a>, давшего Вам рекомендацию, кликнув по пункту "ПРИОРИТЕТНЫЙ ПОКУПАТЕЛЬ" в верхнем меню.<br><br>
						Статус ПРИОРИТЕТНОГО ПОКУПАТЕЛЯ позволит Вам иметь следующие преимущества:<br>
						1. Возможность заказывать продукцию со скидкой 10%<br>
						2. Подписавшись в своем кабинете на автоматический заказ (автошип) иметь скидку 20%<br>
						3. Регистрировать других клиентов по программе "Get 2" (Двойная выгода)<br><br>
						Программа "Двойной выгоды Get 2" выгодна как для клиента в статусе ПРИОРИТЕТНОГО ПОКУПАТЕЛЯ, так и для партнера давшего рекомендацию клиенту.<br>
						а) ПРИОРИТЕТНЫЙ ПОКУПАТЕЛЬ может регистрировать других клиентов, желающих пользоваться продукцией Jeunesse и приобретать ее со скидкой.
						Зарегистрировав первых двух таких же приоритетных покупателей, Вы получите сыворотку LUMINESCE в подарок! Зарегистрировав следующих двух клиентов
						в качестве приоритетных покупателей, Вы бесплатно получаете в дополнение 5 пробников сывортки LUMINESCE.<br>
						б) Партнер в статусе Дистрибьютора зарегистрировавший двух клиентов в качесте Приоритетных покупателей получит<br>
						- Вознаграждение 50$<br>
						- Активность на текущий месяц<br>
						- Два флакона сывотки LUMINECSE в подарок<br>
						</span>
						</p>
						<div class="elements-section" id="accordion">
							<div class="panel-group" id="accordion-01">
								<div class="panel">   
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion-01" href="#collapse02" class="collapsed" aria-expanded="false">инструкция по регистрации</a>
										</h4>
									</div><!-- panel-heading -->   
								<div id="collapse02" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
									<div class="panel-body">
										<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
										<span style="font-size: 14px;">
										Пройдя по специальной <a href="https://joffice.jeunesseglobal.com/v2/newsignup/prefcustsignup.aspx?siteurl={{ $user->profile->mysponsor->profile->company_login }}&loc=ru-RU" target="_blank">
										ссылке регистрации ПРИОРИТЕТНОГО ПОКУПАТЕЛЯ</a> Jeunesse, Вам нужно заполнить простую короткую форму.
										Для перехода к форме регистрации также можно зайти на <a href="https://{{ $user->profile->mysponsor->profile->company_login }}.jeunesseglobal.com/" target="_blank">
										официальный сайт партнера</a>, давшего Вам рекомендацию, и нажать на пункт "ПРИОРИТЕТНЫЙ ПОКУПАТЕЛЬ" в верхнем меню.
										<br>
										</span>
										</p>
										<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
										<span style="font-size: 14px;">
											ВНИМАНИЕ: <i>Все поля заполняются английскими буквами!</i><br><br>
											<font color="#1d3f8e">
											<b>Выбор адреса сайта</b></font><br>
											Выбрать имя пользователя: придумайте логин<br>
											Затем нажмите <font color="#3367D6">"Проверьте, доступен ли логин"</font><br> 
											<font color="#ea4335">"Requested Siteurl not available for use."</font>, значит логин занят и нужно придумать другой.<br>
											<font color="#34a853">"Requested Siteurl is available for use."</font>, значит логин свободен и можно заполнять пароль.<br>
											<br>
											<font color="#1d3f8e">
											<b>Информация о клиенте</b></font><br>
											Укажите ваши Имя и Фамилию (латинницей)<br>
											Поле "Компания" можно не заполнять<br>
											<br>
											<font color="#1d3f8e">
											<b>Контактная информация</b></font><br>
											Укажите ваш действительный электронный адрес<br>
											и телефон без "+", скобок и пробелов<br>
											<br>
											<font color="#1d3f8e">
											<b>Почтовый адрес</b></font><br>
											Почтовый адрес: в первом поле Имя, во втором Фамилию (латинницей)<br>
											Адресная строка 1: указываем улицу, дом, квартиру (ul. Lenina 5, kv. 10)<br>
											Адресная строка 2: указываем улицу, дом, квартиру на русском<br>
											Ниже заполняем поля "Город", "Почтовый индекс", "Страна", "Область"<br>
											<br>
											<font color="#1d3f8e">
											<b>Адрес доставки</b></font><br>
											Если желаемый адрес доставки совпадает с фактическим адресом, поставьте галочку и поля заполнятся автоматически.
											В ином случае можете указать другой адрес, который будет отображаться при дальнейших заказах. 
											Адрес доставки так же можно будет редактировать во время оформления заказов.<br>
											<br>
											<font color="#1d3f8e">
											<b>Регистрационные пакеты</b></font><br>
											Выберите интересующую Вас продукцию и нажмите "Подписаться". После этого откроется страница совершения оплаты заказа<br>
										</span>
										</p>
									</div><!-- panel-body -->
								</div><!-- panel-collapse -->  
								</div><!-- panel -->
							</div><!-- accordion 4 -->
						</div><!-- elements-section -->
			</div><!-- client -->
			<br><br>
		</div>
@endsection