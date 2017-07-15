@extends('layouts.milo-cabinet')
@section('title')
    <title>Справка</title>
@show

@section('content')
<div class="elements-section" id="tabs">
    <div class="headline style-1">
	<br>
        <h2 align="center"><font color="#658FEA">Что и как в jeunesse</font></h2>
    </div><!-- headline -->           

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Регистрация</a></li>
        <li><a href="#tab2" data-toggle="tab">Пакеты</a></li>
        <li><a href="#tab3" data-toggle="tab">Карьера</a></li>
		<li><a href="#tab4" data-toggle="tab">Активность</a></li>
        <li><a href="#tab5" data-toggle="tab">Автошип</a></li>
        <li><a href="#tab6" data-toggle="tab">Кошелек</a></li>
        <li><a href="#tab7" data-toggle="tab">Прочее</a></li>
    </ul>                                            
    <div class="tab-content">
		<div class="tab-pane fade in active" id="tab1"><!-- registration -->
		<br>
			<div class="widget widget-tags" align="center">
				<div>
					<a onclick="$('#assotiate').show();$('#client').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">ПАРТНЕР</span>
					</a>
					<a onclick="$('#assotiate').hide();$('#client').show();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">ПОКУПАТЕЛЬ</span>
					</a>
				</div>
			</div>
			<div id="assotiate">
				<p align="left"><font color="#25bed5">
						<b>РЕГИСТРАЦИЯ ПАРТНЕРА (StarterKit)</b>
					</font></p>
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
				</div><!-- assotiate -->
			<div id="client" style="display: none">
				<p align="left"><font color="#1d3f8e">
					<b>ПРИОРИТЕТНЫЙ ПОКУПАТЕЛЬ</b>
				</font></p>
				<div class="elements-section" id="accordion">
					<div class="panel-group" id="accordion-01">
						<div class="panel">   
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-01" href="#collapse02" class="collapsed" aria-expanded="false">Get 2 ДВОЙНАЯ ВЫГОДА</a>
								</h4>
						</div><!-- panel-heading -->   
						<div id="collapse02" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
								<span style="font-size: 14px;">
								Программа "Двойной выгоды Get 2" выгодна как для клиента в статусе ПРИОРИТЕТНОГО ПОКУПАТЕЛЯ, так и для партнера давшего рекомендацию клиенту.<br><br>
								а) ПРИОРИТЕТНЫЙ ПОКУПАТЕЛЬ может<br> 
								- Покупать продукцию со скидкой в 10% или 20% через автошип.<br>
								- Регистрировать других клиентов, желающих приобретать продукцию со скидкой.<br>
								Зарегистрировав первых двух таких же приоритетных покупателей, Вы получите сыворотку LUMINESCE в подарок! Зарегистрировав следующих двух клиентов
								в качестве приоритетных покупателей, Вы бесплатно получаете в дополнение 5 пробников сывортки LUMINESCE.<br><br>
								б) ПАРТНЕР в статусе Дистрибьютора зарегистрировавший двух клиентов в качесте Приоритетных покупателей получит<br>
								- Вознаграждение 50$<br>
								- Активность на текущий месяц<br>
								- Два флакона сывотки LUMINECSE в подарок<br>
								</span>
								</p>
							</div><!-- panel-body -->
						</div><!-- panel-collapse -->  
						</div><!-- panel -->
					</div><!-- accordion 4 -->
				</div><!-- elements-section -->
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
			</div><!-- client -->
		</div><!-- tab-pane -->
		<div class="tab-pane fade" id="tab2"><!-- packs -->
		<br>
			<div class="widget widget-tags" align="center">
				<div><!-- tags panel -->
					<a onclick="$('#RUSpacks').show();$('#USApacks').hide();$('#EuropePacks').hide();$('#Ukrainpacks').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">РОССИЯ,KZ,BY</span>
					</a>
					<a onclick="$('#RUSpacks').hide();$('#USApacks').hide();$('#EuropePacks').hide();$('#Ukrainpacks').show();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">УКРАИНА,СНГ</span>
					</a>
					<a onclick="$('#RUSpacks').hide();$('#USApacks').hide();$('#EuropePacks').show();$('#Ukrainpacks').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">Евросоюз, MN</span>
					</a>
					<a onclick="$('#RUSpacks').hide();$('#USApacks').show();$('#EuropePacks').hide();$('#Ukrainpacks').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">США</span>
					</a>
				</div><!-- tags panel -->
			</div>
			<div id="RUSpacks">
				<div class="row">
					<div class="col-sm-6">
					<p align="left"><font color="#11388B">
						РОССИЯ, КАЗАХСТАН, БЕЛАРУСЬ
					</font></p>
					</div><!-- col-sm-6 -->
					<div class="col-sm-6">
					<p align="right"><font color="#952181">
						<a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">ПЕРЕЙТИ В БЭКОФИС ДЛЯ ЗАКАЗА</a>
					</font></p>
					</div><!-- col-sm-6 -->
				</div><!-- row -->
						<div class="elements-section" id="accordion">
							<div class="panel-group" id="accordion-1">
								<div class="panel"><!-- JUMBO 1 -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse5" class="collapsed" aria-expanded="false">JUMBO 1 YEAR</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">100097 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(1820 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>По 60CV в теч. 12 мес. </td>
																<td align="right" valign="bottom">+720 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">200 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">90 дней</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Активность</td>
																<td align="right" valign="bottom">12 мес</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">147125 ₽</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel -->
								<div class="panel"><!-- Ambassador IA-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse4b" class="collapsed" aria-expanded="false">AMBASSADOR IA</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse4b" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">61872 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(1124 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">500 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">250 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI (сет 2 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">7 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">96520 ₽</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Ambassador IA-->
								<div class="panel"><!-- Ambassador -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse4a" class="collapsed" aria-expanded="false">AMBASSADOR</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse4a" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">61597 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(1120 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">500 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">250 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">96250 ₽</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Ambassador-->
								<div class="panel"><!-- Upgrade to Ambassador -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse4" class="collapsed" aria-expanded="false">UPGRADE to AMBASSADOR</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">50432 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(917 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">225 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">78800 ₽</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Upgrade to Ambassador-->
								<div class="panel"><!-- Jumbo -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse3" class="collapsed" aria-expanded="false">JUMBO</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">49717 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(904 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">200 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">90 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">76450 $</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel -->
								<div class="panel"><!-- Supreme IA -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse2c" class="collapsed" aria-expanded="false">SUPREME IA</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse2c" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">34100 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(620 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">100 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">13 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">64701 ₽</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Supreme IA-->
								<div class="panel"><!-- Supreme Nutritional -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse2b" class="collapsed" aria-expanded="false">SUPREME Nutritional</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse2b" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">29150 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(525 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">75 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AmPm Essentials</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI (сет 2 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Shape (баночка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">44631 ₽</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Supreme Nutritional-->
								<div class="panel"><!-- Supreme Scin-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse2a" class="collapsed" aria-expanded="false">SUPREME Scincare</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse2a" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">28872 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(525 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">100 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищ. гель</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">41972 ₽</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Supreme Scin-->
								<div class="panel"><!-- Supreme -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse2" class="collapsed" aria-expanded="false">SUPREME</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">28872 ₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(525 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">100 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">44000 ₽</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel -->
								<div class="panel"><!-- Basic Zen-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse1e" aria-expanded="false" class="collapsed">BASIC ZEN
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse1e" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">14022&nbsp;₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(255 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">ZEN Shape (баночка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Pro (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Pro (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">18229 ₽</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Zen-->
								<div class="panel"><!-- Basic Nevo-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse1d" aria-expanded="false" class="collapsed">BASIC NEVO
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse1d" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">12650&nbsp;₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(230 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">NEVO лимон имбирь (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO персик манго (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO смесь ягод (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO асаи виногр (кейс 24 б.)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">13968 ₽</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Nevo-->
								<div class="panel"><!-- Basic Nutritional-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse1c" aria-expanded="false" class="collapsed">BASIC Nutritional
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse1c" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">12100&nbsp;₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(220 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AmPm essentials (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Shape (баночка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">18441 ₽</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Nutritional-->
								<div class="panel"><!-- Basic Scincare-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse1b" aria-expanded="false" class="collapsed">BASIC Scincare
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse1b" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">12097&nbsp;₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(200 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищ гель</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">24692 ₽</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Scin-->
								<div class="panel"><!-- Basic IA-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse1a" aria-expanded="false" class="collapsed">BASIC IA
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse1a" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">11825&nbsp;₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(215 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" width="80%">Доставка БЕСПЛАТНО</td>
																<td align="right" valign="bottom"></td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">19908 ₽</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic IA-->		
								<div class="panel"><!-- Basic -->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapse1" aria-expanded="false" class="collapsed">BASIC
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">10997&nbsp;₽</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(200 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">22000 ₽</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
							</div><!-- accordion 4 -->
					</div><!-- elements-section -->
					<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					<span style="font-size: 14px;">
					Если страна вашего проживания не представлена в данных списках, Вы можете посмотреть предлагаемые в Вашей стране пакеты,
					зайдя в свой бэкофис в компании, кликнув "Магазин" в верхнем меню и раздел "Пакеты" слева. Поскольку стартовый пакет приобретается однажды,
					после того как Вы закажете Стартовый пакет и получите статус Дистрибьютора, в последующем Пакеты больше отображаться в вашем внутреннем Магазине не будут. 
					В этом случае ,чтобы узнать как посмотреть предлагаемые пакеты в той или иной стране, обратитесь к своему спонсору. 
					</span>
					</p>
					<p align="center">
						<font color="#952181">
							<a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">ПЕРЕЙТИ В БЭКОФИС</a>
						</font>
					</p>
			</div><!-- RUSpacks -->
			<div id="Ukrainpacks" style="display: none">
				<div class="row">
					<div class="col-sm-6">
					<p align="left"><font color="#11388B">
						УКРАИНА И СТРАНЫ БЫВШЕГО СНГ
					</font></p>
					</div><!-- col-sm-6 -->
					<div class="col-sm-6">
					<p align="right"><font color="#952181">
						<a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">ПЕРЕЙТИ В БЭКОФИС ДЛЯ ЗАКАЗА</a>
					</font></p>
					</div><!-- col-sm-6 -->
				</div><!-- row -->
				<div class="elements-section" id="accordion">
							<div class="panel-group" id="accordion-2">
								<div class="panel"><!-- JUMBO 1 -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse10" class="collapsed" aria-expanded="false">JUMBO 1 YEAR</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse10" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">35999 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(1820 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>По 60CV в теч. 12 мес. </td>
																<td align="right" valign="bottom">+720 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">200 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">90 дней</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Активность</td>
																<td align="right" valign="bottom">12 мес</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">₴</td>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel -->
								<div class="panel"><!-- Ambassador -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse9b" class="collapsed" aria-expanded="false">AMBASSADOR</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse9b" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">22499 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(1120 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">500 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">250 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">35098 ₴</td>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Ambassador-->
								<div class="panel"><!-- Ambassador IA-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse9a" class="collapsed" aria-expanded="false">AMBASSADOR IA</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse9a" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">22000 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(1124 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">500 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">250 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI (сет 2 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">7 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">34320 ₴</td>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Ambassador IA-->
								<div class="panel"><!-- Upgrade to Ambassador -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse9" class="collapsed" aria-expanded="false">UPGRADE to AMBASSADOR</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse9" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">18499 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(917 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">225 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">28800 ₽</td>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Upgrade to Ambassador-->
								<div class="panel"><!-- Jumbo -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse8" class="collapsed" aria-expanded="false">JUMBO</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse8" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">18179 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(904 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">200 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">90 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AM&PM (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">27950 ₴</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Jumbo-->
								<div class="panel"><!-- Supreme IA -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse7c" class="collapsed" aria-expanded="false">SUPREME IA</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse7c" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">12400 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(620 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">100 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">13 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">21550 ₴</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Supreme IA-->
								<div class="panel"><!-- Supreme Nutritional -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse7b" class="collapsed" aria-expanded="false">SUPREME Nutritional</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse7b" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">10600 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(525 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">75 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AmPm Essentials</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI (сет 2 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Shape (баночка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">16230 ₴</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Supreme Nutritional-->
								<div class="panel"><!-- Supreme Scin-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse7a" class="collapsed" aria-expanded="false">SUPREME Scincare</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse7a" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">10599 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(525 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">100 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищ. гель</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">15400 ₴</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Supreme Scin-->
								<div class="panel"><!-- Supreme -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse7" class="collapsed" aria-expanded="false">SUPREME</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapse7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">10599 ₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(525 $)</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">100 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE лифтинг-маска</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">16150 ₴</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel -->
								<div class="panel"><!-- Basic Zen-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse6e" aria-expanded="false" class="collapsed">BASIC ZEN
													</a> 
												</h4>
									</div><!-- panel-heading -->    
											<div id="collapse6e" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">5099&nbsp;₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(255 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">ZEN Shape (баночка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Pro (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Pro (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">6628 ₴</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
								</div><!-- panel Basic Zen-->
								<div class="panel"><!-- Basic Nevo-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse6d" aria-expanded="false" class="collapsed">BASIC NEVO
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse6d" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">4600&nbsp;₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(230 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">NEVO лимон имбирь (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO персик манго (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO смесь ягод (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO асаи виногр (кейс 24 б.)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">₴</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Nevo-->
								<div class="panel"><!-- Basic Nutritional-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse6c" aria-expanded="false" class="collapsed">BASIC Nutritional
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse6c" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">4400&nbsp;₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(220 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">AmPm essentials (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Shape (баночка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">₴</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Nutritional-->
								<div class="panel"><!-- Basic Scincare-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse6b" aria-expanded="false" class="collapsed">BASIC Scincare
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse6b" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">4399&nbsp;₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(200 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищ гель</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">₴</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Scin-->
								<div class="panel"><!-- Basic -->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse6a" aria-expanded="false" class="collapsed">BASIC
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse6a" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">4399&nbsp;₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(200 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">₴</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
								<div class="panel"><!-- Basic IA-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse6" aria-expanded="false" class="collapsed">BASIC IA
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapse6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">4300&nbsp;₴</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(215 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" width="80%">Доставка БЕСПЛАТНО</td>
																<td align="right" valign="bottom"></td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">19908 ₽</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic IA-->	
							</div><!-- accordion 2 -->
				</div><!-- elements-section --> 
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				Киевский склад обслуживает Грузию ,Армению, Азербайджан, Молдову и другие страны бывшего СССР, за исключением 
				Казахстана и Беларуси. В связи с этим цены указаны в гривнах<br>
				Если страна вашего проживания не представлена в данных списках, Вы можете посмотреть предлагаемые в Вашей стране пакеты,
				зайдя в свой бэкофис в компании, кликнув "Магазин" в верхнем меню и раздел "Пакеты" слева. Поскольку стартовый пакет приобретается однажды,
				после того как Вы закажете Стартовый пакет и получите статус Дистрибьютора, в последующем Пакеты больше отображаться в вашем внутреннем Магазине не будут. 
				В этом случае ,чтобы узнать как посмотреть предлагаемые пакеты в той или иной стране, обратитесь к своему спонсору. 
				</span></p>
				<p align="center"><font color="#952181">
						<a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">ПЕРЕЙТИ В БЭКОФИС</a>
					</font></p>
			</div>
			<div id="EuropePacks" style="display: none">
				<div class="row">
					<div class="col-sm-6">
					<p align="left"><font color="#11388B">
						СТРАНЫ ЕВРОСОЮЗА, МОНГОЛИЯ
					</font></p>
					</div><!-- col-sm-6 -->
					<div class="col-sm-6">
					<p align="right"><font color="#952181">
						<a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">ПЕРЕЙТИ В БЭКОФИС ДЛЯ ЗАКАЗА</a>
					</font></p>
					</div><!-- col-sm-6 -->
				</div><!-- row -->
					<div class="elements-section" id="accordion">
							<div class="panel-group" id="accordion-3">
								<div class="panel"><!-- Ambassador 1 Year-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse31" class="collapsed" aria-expanded="false">AMBASSADOR 1 YEAR</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse31" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без ндс</td>
																<td align="right" valign="bottom">2927 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">1000 CV</td>
																<tr>
																<td>по 60CV в теч. 11 мес. </td>
																<td align="right" valign="bottom">+660 CV</td>
																</tr>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">300 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Активность</td>
																<td align="right" valign="bottom">12 мес.</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI (сет 2 б.)</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">VIDACELL</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"> $</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
								</div><!-- panel -->
								<div class="panel"><!-- Ambassador Variety-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse32" class="collapsed" aria-expanded="false">AMBASSADOR VARIETY</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse32" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без ндс</td>
																<td align="right" valign="bottom">2254 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">1000 CV</td>
																</tr>
																<tr>
																<td>по 60CV в теч. 3 мес.</td>
																<td align="right" valign="bottom">+180 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">300 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Активность</td>
																<td align="right" valign="bottom">4 мес.</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">VIDACELL</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"> €</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel -->
								<div class="panel"><!-- JUMBO 1 -->   
										<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse33" class="collapsed" aria-expanded="false">JUMBO 1 YEAR</a>
												</h4>
										</div><!-- panel-heading -->   
											<div id="collapse33" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без ндс </td>
																<td align="right" valign="bottom">1830 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>+ по 60CV в теч. 11 мес. </td>
																<td align="right" valign="bottom">660 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">200 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">90 дней</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Активность</td>
																<td align="right" valign="bottom">12 мес</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI (сет 2 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">VIDACELL (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
								</div><!-- panel -->
								<div class="panel"><!-- Ambassador-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse34" class="collapsed" aria-expanded="false">AMBASSADOR</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse34" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без ндс</td>
																<td align="right" valign="bottom">1075 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">500 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">250 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI (сет 2 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">VIDACELL (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Ambassador-->
								<div class="panel"><!-- Ambassador Scincare-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse35" class="collapsed" aria-expanded="false">AMBASSADOR SCINCARE</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse35" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без ндс</td>
																<td align="right" valign="bottom">1079 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">500 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">250 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">3 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit Box</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
								</div><!-- panel Ambassador Scincare-->
								<div class="panel"><!-- Ambassador Boutique-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse36" class="collapsed" aria-expanded="false">AMBASSADOR Boutique</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse36" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">1078 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">500 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">250 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">180 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">5 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">5 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">5 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Upgrade to Ambassador-->
								<div class="panel"><!-- Jumbo -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse37" class="collapsed" aria-expanded="false">JUMBO</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse37" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">847 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">200 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">90 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN SHAPE</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN FIT</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN PRO</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel -->
								<div class="panel"><!-- Jumbo Skincare-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse38" class="collapsed" aria-expanded="false">JUMBO Skincare</a>
												</h4>
											</div><!-- panel-heading -->   
											<div id="collapse38" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">795 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">400 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">200 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Сапфир<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/6.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>от 3 уровня</td>
																<td align="right" valign="bottom">10 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">90 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищающее средство</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу</td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Jumbo Scincare-->
								<div class="panel"><!-- Supreme -->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapse39" class="collapsed" aria-expanded="false">SUPREME</a>
												</h4>
										</div><!-- panel-heading -->   
											<div id="collapse39" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">532 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">100 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">FINITI</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel -->
								<div class="panel"><!-- Supreme Scin-->   
											<div class="panel-heading">
												<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/supreme1.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseSScin" class="collapsed" aria-expanded="false">SUPREME Scincare</a>
												</h4>
											
											</div><!-- panel-heading -->   
											<div id="collapseSScin" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС </td>
																<td align="right" valign="bottom">553 €</td>
																</tr>
																<tr>
																<td>Комиссионный объем </td>
																<td align="right" valign="bottom">300 CV</td>
																</tr>
																<tr>
																<td>Прямая премия</td>
																<td align="right" valign="bottom">100 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td>Статус</td>
																<td align="right">Жемчуг<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/5.png" width="20px" alt=""></td>
																</tr>
																<tr>
																<td>Лидерский бонус</td>
																</tr>
																<tr>
																<td>от 1 уровня</td>
																<td align="right" valign="bottom">20 %</td>
																</tr>
																<tr>
																<td>от 2 уровня</td>
																<td align="right" valign="bottom">15 %</td>
																</tr>
																<tr>
																<td>на период</td>
																<td align="right" valign="bottom">60 дней</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE дневной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE ночной крем</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE очищ. гель</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE крем для тела</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
											</div><!-- panel-collapse -->  
										</div><!-- panel Supreme Scin-->
								<div class="panel"><!-- Basic Zen-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseBZen" aria-expanded="false" class="collapsed">BASIC ZEN
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapseBZen" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">207 €</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">ZEN Shape (баночка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Pro (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Pro (коробка)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Zen-->
								<div class="panel"><!-- Basic Nutritional-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseBNut" aria-expanded="false" class="collapsed">BASIC Nutritional
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapseBNut" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">207 €</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">ZEN Shape (баночка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Fit (комплект)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">ZEN Pro</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Nutritional-->
								<div class="panel"><!-- Basic Nevo-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseBNevo" aria-expanded="false" class="collapsed">BASIC NEVO
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapseBNevo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">206 €</td>
																</tr>
																<tr>
																<td></td>
																<td align="right" valign="bottom">(230 $)</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">NEVO лимон имбирь (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO персик манго (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO смесь ягод (кейс 24 б.)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">NEVO асаи виногр (кейс 24 б.)</td>
																<td align="right" valign="bottom">2 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Nevo-->
								<div class="panel"><!-- Basic IA-->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-1" href="#collapseBIA" aria-expanded="false" class="collapsed">BASIC IA
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapseBIA" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">219 €</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">4 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel Basic Scin-->
								<div class="panel"><!-- Basic -->
									<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/basic.png" width="30px" alt="">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion-3" href="#collapseB" aria-expanded="false" class="collapsed">BASIC
													</a> 
												</h4>
											</div><!-- panel-heading -->    
											<div id="collapseB" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
												<div class="panel-body">
													<br>
													<div class="row">
														<div class="col-sm-5">
															<table width="100%">
																<tr>
																<td>Без доставки и НДС</td>
																<td align="right" valign="bottom">203 €</td>
																</tr>
																<tr>
																<td align="left" width="80%">Комиссионный объем </td>
																<td align="right" valign="bottom">100 CV</td>
																</tr>
																<tr>
																<td align="left" width="80%">Прямая премия</td>
																<td align="right" valign="bottom">25 $</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
															</table>
															<table width="100%">
																<tr>
																<td align="left" width="40%">Статус</td>
																<td align="right">Дистрибьютор<img style="float: right; margin: 0px 0px 0px 5px;" src="../images/qualifications/2.png" width="20px" alt=""></td>
																</tr>
															</table>
														</div><!-- col-sm-5 -->
														<div class="col-sm-7">
															<table width="100%">
																<tr>
																<td align="left" width="80%">LUMINESCE сыворотка</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">RESERVE (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">INSTANTLY AGELESS (коробка)</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td align="left" width="80%">JKit USB-браслет</td>
																<td align="right" valign="bottom">1 шт.</td>
																</tr>
																<tr>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																</tr>
																<tr>
																<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">Сумма для клиента в розницу </td>
																<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif">€</td>
																</tr>
															</table>
															<br>
														</div><!-- col-sm-7 -->
													</div><!-- row -->
												</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
							</div><!-- accordion 4 -->
					</div><!-- elements-section --> 
					<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					<span style="font-size: 14px;">
					Если страна вашего проживания не представлена в данных списках, Вы можете посмотреть предлагаемые в Вашей стране пакеты,
					зайдя в свой бэкофис в компании, кликнув "Магазин" в верхнем меню и раздел "Пакеты" слева. Поскольку стартовый пакет приобретается однажды,
					после того как Вы закажете Стартовый пакет и получите статус Дистрибьютора, в последующем Пакеты больше отображаться в вашем внутреннем Магазине не будут. 
					В этом случае ,чтобы узнать как посмотреть предлагаемые пакеты в той или иной стране, обратитесь к своему спонсору. 
					</span></p>
					<p align="center"><font color="#952181">
							<a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">ПЕРЕЙТИ В БЭКОФИС</a>
						</font></p>
				</div>
			<div id="USApacks" style="display: none">
			<div class="row">
				<div class="col-sm-6">
				<p align="left"><font color="#11388B">
					СТАРТОВЫЕ ПАКЕТЫ В США
				</font></p>
				</div><!-- col-sm-6 -->
				<div class="col-sm-6">
				<p align="right"><font color="#952181">
					<a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">ПЕРЕЙТИ В БЭКОФИС ДЛЯ ЗАКАЗА</a>
				</font></p>
				</div><!-- col-sm-6 -->
			</div><!-- row -->
				<div class="elements-section" id="accordion">
						<div class="panel-group" id="accordion-4">
							<div class="panel"><!-- Ambassador-->   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-4" href="#collapse41" class="collapsed" aria-expanded="false">AMBASSADOR</a>
											</h4>
										</div><!-- panel-heading -->   
										<div id="collapse41" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<table width="100%">
															<tr>
															<td>Price</td>
															<td align="right" valign="bottom">1145 $</td>
															</tr>
															<tr>
															<td>Comission Volume </td>
															<td align="right" valign="bottom">600 CV</td>
															</tr>
															<tr>
															<td>Retail Sales Bonus</td>
															<td align="right" valign="bottom">200 $</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
														</table>
														<br>
													</div><!-- col-sm-5 -->
													<div class="col-sm-7">
														<table width="100%">
															<tr>
															<td align="left" width="80%">LUMINESCE cellular rejuvenation serum</td>
															<td align="right" valign="bottom">3 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE daily moisturizing complex</td>
															<td align="right" valign="bottom">2 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE advanced night repair</td>
															<td align="right" valign="bottom">1 jar</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE  youth restoring cleanser</td>
															<td align="right" valign="bottom">2 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE essential body renewal</td>
															<td align="right" valign="bottom">1 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE ultimate lifting masque</td>
															<td align="right" valign="bottom">1 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
															<td align="right" valign="bottom">3 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">INSTANTLY AGELESS</td>
															<td align="right" valign="bottom">2 box</td>
															</tr>
															<tr>
															<td align="left" width="80%">RESERVE</td>
															<td align="right" valign="bottom">1 box</td>
															</tr>
															<tr>
															<td align="left" width="80%">M1ND</td>
															<td align="right" valign="bottom">1 box</td>
															</tr>
															<tr>
															<td align="left" width="80%">AmPm Essentials</td>
															<td align="right" valign="bottom">2 set</td>
															</tr>
															<tr>
															<td align="left" width="80%">ZEN Prime</td>
															<td align="right" valign="bottom">1 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">ZEN Fuze</td>
															<td align="right" valign="bottom">1 bag</td>
															</tr>
															<tr>
															<td align="left" width="80%">5-pack of  We live Jeunesse magazine</td>
															<td align="right" valign="bottom">1 pс</td>
															</tr>
															<tr>
															<td align="left" width="80%">5-pack of 7-day serum samples</td>
															<td align="right" valign="bottom">1 pc</td>
															</tr>
															<tr>
															<td align="left" width="80%">5-pack Instantly Ageless handouts</td>
															<td align="right" valign="bottom">2 pcs</td>
															</tr>
															<tr>
															<td align="left" width="80%">ZEN Detox phase guide</td>
															<td align="right" valign="bottom">1 pc</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
															<tr>
															<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															</tr>
														</table>
													</div><!-- col-sm-7 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->
							</div><!-- panel Ambassador-->
							<div class="panel"><!-- Ambassador NV PACKAGE-->   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-4" href="#collapse42" class="collapsed" aria-expanded="false">AMBASSADOR NV PACKAGE</a>
											</h4>
										</div><!-- panel-heading -->   
										<div id="collapse42" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<table width="100%">
															<tr>
															<td>Price</td>
															<td align="right" valign="bottom">$1149.95</td>
															</tr>
															<tr>
															<td>Comission Volume </td>
															<td align="right" valign="bottom">600 CV</td>
															</tr>
															<tr>
															<td>Retail Sales Bonus</td>
															<td align="right" valign="bottom">200 $</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
														</table>
														<br>
													</div><!-- col-sm-5 -->
													<div class="col-sm-7">
														<table width="100%">
															<tr>
															<td align="left" width="80%">NV Primer</td>
															<td align="right" valign="bottom">3 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV Perfecting Mist</td>
															<td align="right" valign="bottom">9 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV Bronzer</td>
															<td align="right" valign="bottom">1 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV Brochures</td>
															<td align="right" valign="bottom">25 pcs</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV Display Stand</td>
															<td align="right" valign="bottom">1 pc</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV Perfect Match Guide</td>
															<td align="right" valign="bottom">1 pc</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV Head Bands</td>
															<td align="right" valign="bottom">2 pcs</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV puffs</td>
															<td align="right" valign="bottom">2 set</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE cellular rejuvenation serum</td>
															<td align="right" valign="bottom">2 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE daily moisturizing complex</td>
															<td align="right" valign="bottom">2 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE advanced night repair</td>
															<td align="right" valign="bottom">1 jar</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE  youth restoring cleanser</td>
															<td align="right" valign="bottom">2 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE ultimate lifting masque</td>
															<td align="right" valign="bottom">2 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE essential body renewal</td>
															<td align="right" valign="bottom">1 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE flawless skin brightener</td>
															<td align="right" valign="bottom">2 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">INSTANTLY AGELESS</td>
															<td align="right" valign="bottom">1 box</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
															<tr>
															<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															</tr>
														</table>
													</div><!-- col-sm-7 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->
							</div><!-- panel Ambassador NV PACKAGE-->
							<div class="panel"><!-- Supreme-->   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-4" href="#collapse43" class="collapsed" aria-expanded="false">SUPREME</a>
											</h4>
										</div><!-- panel-heading -->   
										<div id="collapse43" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<table width="100%">
															<tr>
															<td>Price</td>
															<td align="right" valign="bottom">$499.95</td>
															</tr>
															<tr>
															<td>Comission Volume </td>
															<td align="right" valign="bottom">300 CV</td>
															</tr>
															<tr>
															<td>Retail Sales Bonus</td>
															<td align="right" valign="bottom">100 $</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
														</table>
														<br>
													</div><!-- col-sm-5 -->
													<div class="col-sm-7">
														<table width="100%">
															<tr>
															<td align="left" width="80%">LUMINESCE cellular rejuvenation serum</td>
															<td align="right" valign="bottom">1 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE daily moisturizing complex</td>
															<td align="right" valign="bottom">1 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE advanced night repair</td>
															<td align="right" valign="bottom">1 jar</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE  youth restoring cleanser</td>
															<td align="right" valign="bottom">1 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE essential body renewal</td>
															<td align="right" valign="bottom">1 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">INSTANTLY AGELESS</td>
															<td align="right" valign="bottom">1 box</td>
															</tr>
															<tr>
															<td align="left" width="80%">RESERVE</td>
															<td align="right" valign="bottom">1 box</td>
															</tr>
															<tr>
															<td align="left" width="80%">AmPm Essentials</td>
															<td align="right" valign="bottom">1 set</td>
															</tr>
															<tr>
															<td align="left" width="80%">We live Jeunesse brochure</td>
															<td align="right" valign="bottom">1 pc</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
															<tr>
															<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															</tr>
														</table>
													</div><!-- col-sm-7 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->
							</div><!-- panel Supreme-->
							<div class="panel"><!-- Supreme NV-->   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-4" href="#collapse44" class="collapsed" aria-expanded="false">SUPREME NV</a>
											</h4>
										</div><!-- panel-heading -->   
										<div id="collapse44" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<table width="100%">
															<tr>
															<td>Price</td>
															<td align="right" valign="bottom">$499.95</td>
															</tr>
															<tr>
															<td>Comission Volume </td>
															<td align="right" valign="bottom">300 CV</td>
															</tr>
															<tr>
															<td>Retail Sales Bonus</td>
															<td align="right" valign="bottom">100 $</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
														</table>
														<br>
													</div><!-- col-sm-5 -->
													<div class="col-sm-7">
														<table width="100%">
															<tr>
															<td align="left" width="80%">NV Primer</td>
															<td align="right" valign="bottom">2 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV Perfecting Mist</td>
															<td align="right" valign="bottom">10 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">NV Brochures</td>
															<td align="right" valign="bottom">5 pcs</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE  cellular rejuvenation serum</td>
															<td align="right" valign="bottom">1 bot</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
															<tr>
															<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															</tr>
														</table>
													</div><!-- col-sm-7 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->
							</div><!-- panel Supreme-->
							<div class="panel"><!-- Basic nutritinal-->   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-4" href="#collapse45" class="collapsed" aria-expanded="false">BASIC NUTRITIONAL</a>
											</h4>
										</div><!-- panel-heading -->   
										<div id="collapse45" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<table width="100%">
															<tr>
															<td>Price</td>
															<td align="right" valign="bottom">$199.95</td>
															</tr>
															<tr>
															<td>Comission Volume </td>
															<td align="right" valign="bottom">100 CV</td>
															</tr>
															<tr>
															<td>Retail Sales Bonus</td>
															<td align="right" valign="bottom">25 $</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
														</table>
														<br>
													</div><!-- col-sm-5 -->
													<div class="col-sm-7">
														<table width="100%">
															<tr>
															<td align="left" width="80%">ZEN Prime</td>
															<td align="right" valign="bottom">2 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">RESERVE</td>
															<td align="right" valign="bottom">1 box</td>
															</tr>
															<tr>
															<td align="left" width="80%">AmPm Essentials</td>
															<td align="right" valign="bottom">1 set</td>
															</tr>
															<tr>
															<td align="left" width="80%">Nevo variety (4-pack)</td>
															<td align="right" valign="bottom">1 set</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
															<tr>
															<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															</tr>
														</table>
													</div><!-- col-sm-7 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->
							</div><!-- panel Basic Nutritional-->
							<div class="panel"><!-- Basic nutritinal-->   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/packs/jumbo1.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-4" href="#collapse46" class="collapsed" aria-expanded="false">BASIC SKINCARE</a>
											</h4>
										</div><!-- panel-heading -->   
										<div id="collapse46" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<table width="100%">
															<tr>
															<td>Price</td>
															<td align="right" valign="bottom">$199.95</td>
															</tr>
															<tr>
															<td>Comission Volume </td>
															<td align="right" valign="bottom">100 CV</td>
															</tr>
															<tr>
															<td>Retail Sales Bonus</td>
															<td align="right" valign="bottom">25 $</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
														</table>
														<br>
													</div><!-- col-sm-5 -->
													<div class="col-sm-7">
														<table width="100%">
															<tr>
															<td align="left" width="80%">LUMINESCE cellular rejuvenation serum</td>
															<td align="right" valign="bottom">1 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE daily moisturizing complex</td>
															<td align="right" valign="bottom">1 bot</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE youth restoring cleanser</td>
															<td align="right" valign="bottom">1 tub</td>
															</tr>
															<tr>
															<td align="left" width="80%">LUMINESCE™ essential body renewal</td>
															<td align="right" valign="bottom">1 tub</td>
															</tr>
															<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															</tr>
															<tr>
															<td align="left" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															<td align="right" style="color: #B8B8B8; font-family: Open Sans, Arial, sans-serif"></td>
															</tr>
														</table>
													</div><!-- col-sm-7 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->
							</div><!-- panel Basic Scincare-->
						</div><!-- accordion 4 -->
				</div><!-- elements-section -->
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				Если страна вашего проживания не представлена в данных списках, Вы можете посмотреть предлагаемые в Вашей стране пакеты,
				зайдя в свой бэкофис в компании, кликнув "Магазин" в верхнем меню и раздел "Пакеты" слева. Поскольку стартовый пакет приобретается однажды,
				после того как Вы закажете Стартовый пакет и получите статус Дистрибьютора, в последующем Пакеты больше отображаться в вашем внутреннем Магазине не будут. 
				В этом случае ,чтобы узнать как посмотреть предлагаемые пакеты в той или иной стране, обратитесь к своему спонсору.
				</span>
				</p>
				<p align="center"><font color="#952181">
						<a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">ПЕРЕЙТИ В БЭКОФИС</a>
					</font></p>
			</div>
		</div><!-- tab-pane2 -->
        <div class="tab-pane fade" id="tab3"><!-- career -->
            <br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#952181">КВАЛИФИКАЦИИ</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#c784bb">план вашего успешного роста</font>
            </h5>
            <br>
			<p align="right"><font color="#952181">
					<a href="https://d2dqksvx8j00ig.cloudfront.net/JFront/Cms/Prod/Images/Session/814/RussianCompPlan_en-US.pdf" target="_blank">МАРКЕТИНГ ПЛАН в PDF</a>
				</font></p>
		    <div class="elements-section" id="accordion">
				<div class="panel-group" id="accordion-2">
					<div class="panel">   
						<div class="panel-heading">
							<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/15.png" width="30px" alt="">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse25" class="collapsed" aria-expanded="false">КОРОНОВАННЫЙ БРИЛЛИАНТ</a>
							</h4>
						</div><!-- panel-heading -->   
						<div id="collapse25" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<br>
								<div class="row">
									<div class="col-sm-5">
										<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
											<span style="font-size: 16px;">
												<font><b>
												ТРЕБОВАНИЯ
												</b></font>
											</span>
										</p>
										<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
										<span style="font-size: 14px;">
										- Минимальный статус: Бриллиант<br> 
										- 10 Бриллиантов в разных ветвях<br> 
										- Накопить 5 млн CV в команде за месяц<br>
										&nbsp;&nbsp;(до 500 тыс CV с одной ветви)<br>
										- 25 тыс партнеров в команде на автошипе<br>
										- Соблюдать условия 6 месяцев подряд
										</span>
										</p>   
									</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 4 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 5 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 6 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 7 уровня<br>
														5. Алмазный фонд:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;доля от 3% продаж компании<br>
														6. Бонус 1 000 000 $ по достижении квалификации<br>  
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Emerald Experience<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Diamond Discovery
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
					<div class="panel">   
						<div class="panel-heading">
							<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/14.png" width="30px" alt="">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse24" class="collapsed" aria-expanded="false">ИМПЕРСКИЙ БРИЛЛИАНТ</a>
							</h4>
										
						</div><!-- panel-heading -->   
						<div id="collapse24" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<br>
								<div class="row">
									<div class="col-sm-5">
										<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
											<span style="font-size: 16px;">
												<font><b>
												ТРЕБОВАНИЯ
												</b></font>
											</span>
										</p>
										<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
										<span style="font-size: 14px;">
										- Минимальный статус: Бриллиант<br> 
										- 8 Бриллиантов в разных ветвях<br> 
										- Накопить 4 млн CV в команде за месяц<br>
										&nbsp;&nbsp;(до 500 тыс CV с одной ветви)<br>
										- Минимум 500 тыс CV в одной ветви<br>
										- 20 тыс партнеров в команде на автошипе<br>
										- Соблюдать условия 3 месяца подряд
										</span>
										</p>   
									</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 4 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 5 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 6 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 7 уровня<br>
														5. Алмазный фонд:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;доля от 3% продаж компании<br>
														6. Бонус 500 000 $ по достижении квалификации<br> 
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Emerald Experience<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Diamond Discovery
														</span>
														</p>   
													</div><!-- col-sm-6 -->
								</div><!-- row -->
							</div><!-- panel-body -->
						</div><!-- panel-collapse -->  
					</div><!-- panel -->
					<div class="panel">   
						<div class="panel-heading">
							<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/13.png" width="30px" alt="">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse23" class="collapsed" aria-expanded="false">ПРЕЗИДЕНТСКИЙ БРИЛЛИАНТ</a>
							</h4>
						</div><!-- panel-heading -->   
						<div id="collapse23" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<br>
								<div class="row">
									<div class="col-sm-5">
										<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
											<span style="font-size: 16px;">
												<font><b>
												ТРЕБОВАНИЯ
												</b></font>
											</span>
										</p>
										<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
										<span style="font-size: 14px;">
										- Минимальный статус: Бриллиант<br> 
										- 6 Бриллиантов в разных ветвях<br> 
										- Накопить 3 млн CV в команде за месяц<br>
										&nbsp;&nbsp;(до 500 тыс CV с одной ветви)<br>
										- Минимум 500 тыс CV в одной ветви<br>
										- 15 тыс партнеров в команде на автошипе<br>
										- Соблюдать условия 3 месяца подряд
										</span>
														</p>   
													</div><!-- col-sm-6 -->
									<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 4 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 5 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 6 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 7 уровня<br>
														5. Алмазный фонд:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;доля от 3% продаж компании<br>
														6. Бонус 250 000 $ по достижении квалификации<br> 
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Emerald Experience<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Diamond Discovery<br>
														</span>
														</p>   
									</div><!-- col-sm-6 -->
								</div><!-- row -->
							</div><!-- panel-body -->
						</div><!-- panel-collapse -->  
					</div><!-- panel -->
					<div class="panel">   
						<div class="panel-heading">
							<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/12.png" width="30px" alt="">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse22" class="collapsed" aria-expanded="false">ТРОЙНОЙ БРИЛЛИАНТ</a>
							</h4>
										
					</div><!-- panel-heading -->   
						<div id="collapse22" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<br>
								<div class="row">
									<div class="col-sm-5">
										<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
											<span style="font-size: 16px;">
												<font><b>
												ТРЕБОВАНИЯ
												</b></font>
											</span>
										</p>
										<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
										<span style="font-size: 14px;">
										- Минимальный статус: Бриллиант<br> 
										- 4 Бриллианта в разных ветвях<br> 
										- Накопить 2 млн CV в команде за месяц<br>
										&nbsp;&nbsp;(до 500 тыс CV с одной ветви)<br>
										- 10 тыс партнеров в команде на автошипе<br>
										- Соблюдать условия 2 месяца подряд
										</span>
										</p>   
												</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 4 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 5 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 6 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 7 уровня<br>
														5. Алмазный фонд:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;доля от 3% продаж компании<br>
														6. Бонус 100 000 $ по достижении квалификации<br> 
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Emerald Experience<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Diamond Discovery<br>
														&nbsp;&nbsp;&nbsp;&nbsp;(после соблюдения требований 3 мес. в году)
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
					<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/11.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse21" class="collapsed" aria-expanded="false">ДВОЙНОЙ БРИЛЛИАНТ</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse21" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														- Минимальный статус: Бриллиант<br> 
														- 2 Бриллианта в команде<br> 
														&nbsp;&nbsp;(минимум 3 в одной из сторон)<br>
														- Не менее 1500 циклов за 1 отчетный месяц
														&nbsp;&nbsp;(52500$ комиссионных)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 4 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 5 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 6 уровня<br>
														5. Алмазный фонд:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;доля от 3% продаж компании<br>
														6. Бонус 100 000 $ раз в год<br> 
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Emerald Experience<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Diamond Discovery<br>
														&nbsp;&nbsp;&nbsp;&nbsp;(после соблюдения требований 3 мес. в году)
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
					<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/10.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse20" class="collapsed" aria-expanded="false">БРИЛЛИАНТ</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse20" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														- Минимальный статус: Сапфир<br> 
														- 6 Сапфиров в команде<br> 
														&nbsp;&nbsp;(минимум 3 в одной из сторон)<br>
														- Не менее 1000 циклов за 1 отчетный месяц
														&nbsp;&nbsp;(35000$ комиссионных)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 4 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 5 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 6 уровня<br>
														5. Алмазный фонд:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;доля от 3% продаж компании<br>
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Emerald Experience<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Diamond Discovery<br>
														&nbsp;&nbsp;&nbsp;&nbsp;(после соблюдения требований 3 мес. в году)
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
					<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/9.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse19" class="collapsed" aria-expanded="false">ИЗУМРУД</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse19" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														- Минимальный статус: Сапфир<br> 
														- 4 Сапфира в команде<br> 
														&nbsp;&nbsp;(минимум 1 в одной из сторон)<br>
														- Не менее 500 циклов за 1 отчетный месяц
														&nbsp;&nbsp;(17500$ комиссионных)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 4 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 5 уровня<br>
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Путешествие Emerald Experience<br>
														&nbsp;&nbsp;&nbsp;&nbsp;(после соблюдения требований 3 мес. в году)
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
					<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/8.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse18" class="collapsed" aria-expanded="false">РУБИН</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse18" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														- Минимальный статус: Сапфир<br> 
														- 2 Сапфира в команде<br> 
														&nbsp;&nbsp;(минимум 1 в одной из сторон)<br>
														- Не менее 200 циклов за 1 отчетный месяц
														&nbsp;&nbsp;(7000$ комиссионных)
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;5% от значения комиссионных 4 уровня<br>
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Приглашение на Sapphire nights
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
					</div><!-- panel -->
					<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/7.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse17" class="collapsed" aria-expanded="false">САПФИР ЭЛИТ</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse17" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														- Минимальный статус: Сапфир<br> 
														- 12 Специалистов в 1 уровне<br> 
														&nbsp;&nbsp;(минимум 3 в одной из сторон)<br>
														- Не менее 100 циклов за 1 отчетный месяц
														&nbsp;&nbsp;(3500$ комиссионных)
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Приглашение на Sapphire nights
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/6.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse16" class="collapsed" aria-expanded="false">САПФИР</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse16" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														-  Минимальный статус: Специалист<br> 
														-  12 Специалистов в 1 уровне<br> 
														&nbsp;&nbsp;(минимум 3 в одной из сторон)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;10% от значения комиссионных 3 уровня<br>
														<br>
														&nbsp;&nbsp;&nbsp;&nbsp;Приглашение на Sapphire nights
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/5.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse15" class="collapsed" aria-expanded="false">ЖЕМЧУГ</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse15" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														-  Минимальный статус: Специалист<br> 
														-  12 Дистрибьюторов в 1 уровне<br> 
														&nbsp;&nbsp;(минимум 3 в одной из сторон) или<br>
														&nbsp;&nbsp;8 Специалистов в 1 уровне<br> 
														&nbsp;&nbsp;(минимум 2 в одной из сторон)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														&nbsp;&nbsp;&nbsp;&nbsp;15% от значения комиссионных 2 уровня<br>
														
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/4.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse14" class="collapsed" aria-expanded="false">НЕФРИТ</a>
											</h4>
										</div><!-- panel-heading -->   
										<div id="collapse14" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														-  Минимальный статус: Специалист<br> 
														-  8 Дистрибьюторов в 1 уровне<br> 
														&nbsp;&nbsp;(минимум 3 в одной из сторон) или<br>
														&nbsp;&nbsp;4 Специалиста в 1 уровне<br> 
														&nbsp;&nbsp;(минимум 1 в одной из сторон)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														4. Лидерский бонус:<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;20% от значения комиссионных 1 уровня<br>
														
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/3.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse13" class="collapsed" aria-expanded="false">СПЕЦИАЛИСТ</a>
											</h4>
										</div><!-- panel-heading -->   
										<div id="collapse13" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														-  Минимальный статус: Дистрибьютор<br> 
														-  2 Дистрибьютора в 1 уровне<br> 
														&nbsp;&nbsp;(минимум 1 в одной из сторон)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Командные комиссионные - циклы.<br> 
														&nbsp;&nbsp;&nbsp;&nbsp;(не более 100 т. $ в неделю)<br>
														
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">   
										<div class="panel-heading">
											<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/2.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse12" class="collapsed" aria-expanded="false">ДИСТРИБЬЮТОР</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse12" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														-  Интернет магазин (Starter Kit 29.95$)<br>
														-  Стартовый пакет, либо покупка с Вашего сайта от 100CV.<br>   
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														3. Накопление комиссионного объема (CV)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">
										<div class="panel-heading">
										<img style="float: left; margin: 15px 0px 0px 10px;" src="../images/qualifications/1.png" width="30px" alt="">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse11" aria-expanded="false" class="collapsed">ПАРТНЕР</a> 
											</h4>
										</div><!-- panel-heading -->    
										<div id="collapse11" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
											  	<br>
												<div class="row">
													<div class="col-sm-5">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ТРЕБОВАНИЯ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														-  Интернет магазин (Starter Kit 29.95$)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
													<div class="col-sm-7">
														<p align="left" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
															<span style="font-size: 16px;">
																<font><b>
																	ВИДЫ ДОХОДОВ
																</b></font>
															</span>
														</p>
														<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
														<span style="font-size: 14px;">
														1. Розничные покупки (25-40%)<br>
														2. Прямые премии ($25, $100, $200, $250)<br>
														</span>
														</p>   
													</div><!-- col-sm-6 -->
												</div><!-- row -->
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
				</div><!-- accordion 2 -->
			</div><!-- elements-section -->
				<p align="center"><font color="#952181">
					<a href="https://d2dqksvx8j00ig.cloudfront.net/JFront/Cms/Prod/Images/Session/814/RussianCompPlan_en-US.pdf" target="_blank">МАРКЕТИНГ ПЛАН в PDF</a>
				</font></p>
        </div><!-- tab-pane3 -->
        <div class="tab-pane fade" id="tab4"><!-- active -->
			<br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#ff6b00">АКТИВНОСТЬ</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#f79421">залог эффективности вашего бизнеса</font>
            </h5>
            <br>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					<span style="font-size: 14px;">
					АКТИВНОСТЬ - термин, который характеризует Ваш бизнес как действующий.
					Этот критерий актуален для партнеров от статуса "Дистрибьютор", поскольку связан с видами доходов, которые открывает этот статус.
					Для того, чтобы баллы комисионого объема (CV) накапливались, необходимо чтобы в вашем аккаунте - интернет-магазине или бэкофисе, 
					происходила минимальная активность, показывающая, что Вы также участвуете в товарообороте компании, как и те партнеры, баллы от
					которых будут Вам зачисляться. Это справедливо позволит Вам получать Командные комиссионные от товарооборота партнеров Вашей структуры и 
					Спиловера, а также лидерский бонус.<br><br>
					Активность может подтверждаться различными способами:<br>
					1. Если через Ваш интернет-магазин совершена покупка минимум на 60CV<br>
					2. Если у Вас зарегистрировались 2 приоритетных покупателя<br>
					3. Если в Вашем бэкофисе совершается ежемесячный или предварительный АВТОШИП, минимум на 60CV.
					<br><br>
					Если ни одно из этих действий не совершается, это означает, что Ваш бизнес не активен. В этом случае Дистрибьютор не получает командных комиссионных
					и лидерских бонусов за неактивный период. Накопленные баллы командных комиссионных обнуляются и вновь начнут накопление с отчетного периода, который будет иметь Активность.
					</span>
				</p>
				<br><br>
				<p align="center">
					<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif; color: #7d7d7d; line-height: 1.5;">
					Чтобы правильно спланировать свою Активность и подписаться на Автошип, свяжитесь со своим спонсором или любым квалифицированным партнером из аплайна.	
					</span>
					</p>
		</div><!-- tab-pane4 -->
        <div class="tab-pane fade" id="tab5"><!-- autoship -->
        <br>
			<div class="widget widget-tags" align="center">
				<div>
					<a onclick="$('#advance').show();$('#monthly').hide();$('#conditional').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">ПРЕДВАРИТЕЛЬНЫЙ</span>
					</a>
					<a onclick="$('#advance').hide();$('#monthly').show();$('#conditional').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">ЕЖЕМЕСЯЧНЫЙ</span>
					</a>
					<a onclick="$('#advance').hide();$('#monthly').hide();$('#conditional').show();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">УСЛОВНЫЙ</span>
					</a>
				</div>
			</div>
		<div id="advance">
		<p align="left">
			<font color="#ff6b00">
					ПРЕДВАРИТЕЛЬНЫЙ АВТОШИП
			</font></p>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            Когда Вы делаете заказ через предварительный автошип, сумма комиссионного объема заказанной Вами продукции распределяется по 60 CV на последующие
			отчетные периоды, засчитывая активность наперед, начиная:<br> 
			а) с даты окончания крайнего месяца с зачтенной активностью<br> 
			Либо если в текущий отчетный период активность истекает<br>
			б) с даты окончания текущего отчетного периода.<br>
			Если текущий отчетный период не активен, активность также зачтется с начала следующего отчетного периода.<br>
			<br>
			Отчетный период - это временной промежуток между датами автошипа величиной в месяц.<br>
			Дата автошипа у каждого индивидуальна, как правило, это число месяца в которое Вы заказали Стартовый пакет.
			Посмотреть свою дату автошипа можно зайдя в <a href="https://joffice.jeunesseglobal.com/login.asp" target="_blank">свой бэкофис</a> 
			(Joffice™) компании, в разделе "Мой профиль" (формат даты месяц/день/год). Предварительный автошип осуществляется не позднее чем за 
			день до истечения последнего текущего отчетного периода.
			<br><br>
			ПРИМЕР 1: Дата Вашего автошипа 10 число каждого месяца, текущий отчетный период у вас активен. 
			Для личного пользования, для своей семьи или по просьбе клиентов Вы хотите заказать две коробки Reserve. Дата Вашего автошипа 10 число каждого месяца, 
			текущий отчетный период у вас активен. Одна коробка Reserve составляет 60CV комиссионного объема. Если к примеру сегодня январь и на 
			последующий после 10 января отчетный период у Вас активности нет, то заказав две коробки Reserve не позднее 9 января через ПРЕДВАРИТЕЛЬНЫЙ автошип,
			Вы сделаете активность на два месяца вперед. Таким образом Дата следующего автошипа у вас будет 10 марта и весь комиссионный объем появляющийся 
			в вашей структуре, включая спиловер, в этот промежуток времени будет суммироваться.
			Если в течение периода, теперь уже предоплаченного до 10 марта автошипа, Вы закажете еще что-то, то дата следующего автошипа передвинется на соответсвующее 
			количество месяцев из расчета 60CV в месяц.
			</span></p>
		</div><!-- advance -->
		<div id="monthly" style="display: none">
		<p align="left"><font color="#ff6b00">
					ЕЖЕМЕСЯЧНЫЙ АВТОШИП
				</font></p>
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				Если текущий отчетный период закончился и вместе с ним закончилась активность, то есть наступил новый отчетный период на который уже не распространяется
				сделанный Вами ранее Предварительный Автошип, то во избежание обнуления накопленных баллов командных комиссионных (CV), Вам предоставляется возможность
				в течение 7 дней, начиная с Даты Автошипа, сделать Ежемесячный Автошип, совершив заказ на 60CV в разделе Автошип вашего бэкофиса.
				Если Вы сделаете Ежемесячный Автошип после истечения указанного срока, то Активность на текущий месяц будет учтена и баллы комиссионных будут накапливаться 
				с этого же дня, баллы накопленные ранее будут утеряны.
				Таким образом Ежемесячный Автошип дает Активность только на текущий месяц отчетного периода. Баллы комиссионного объема в заказе данного Автошипа, превышающие 60CV
				будут зачислены в слабую сторону накопления Вашего комиссионного объема - туда, где у Вас меньше баллов CV.<br>
				(На текущий отчетный период так же дает Активность и регистрация 2-х приоритетных покупателей - см. Справка/Регистрация/Покупатель "Get2 Двойная выгода")
				<br><br>
				ПРИМЕР 2: Дата Вашего автошипа 10 число каждого месяца, текущий отчетный период истекает 9 числа в 23:59 и как только наступило 10-е число, начался новый отчетный
				период. Если в наступившем отчетном периоде нет активности, то в течение 7 дней баллы комиссионного объема будут отображаться и продолжать накапливаться, 
				для того, чтобы Вы могли совершить Ежемесячный Автошип и сохранить накопившийся ранее комиссионный объем.<br>
				Если к примеру это 10 января, то до 17 января будут отображаться и продолжать копиться баллы CV.
				В течении указанного периода, Вы заходите в Бэкофис/Автошип, выбираете "Ежемесячный Автошип" и делаете заказ на 60 CV. В этом случае все баллы сохраняются и продолжают накапливаться, 
				Дата следующего автошипа меняется на 10 февраля.<br>
				Если Вы никаким способом не подтвердили Активность в период с 10 по 17 января, то 18 января в вашем бэкофисе значение Баллов слева (LCV) будет равно "0" и Баллов справа (RCV) "0".
				Если Вы хотитие возобновить Активность в текущем периоде, делаете Ежемесячный Автошип и баллы начнут вновь накапливаться с фактической даты совершения Автошипа и до 10 февраля.
				Если же Вы сделаете Предварительный Автошип, то баллы начнут накапливаться с 10 февраля - даты начала следующего отчетного периода.
				
				</span></p>
		</div><!-- monthly -->
		<div id="conditional" style="display: none">
		<p align="left"><font color="#ff6b00">
					УСЛОВНЫЙ АВТОШИП
				</font></p>
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
				<span style="font-size: 14px;">
				Это вид ежемесячного автошипа, который срабатывает лишь в том случае, если в начавшийся отчетный период у Вас нет Активности.
				Условный автошип отличается от ежемесячного тем, что самостоятельно отслеживает необходимость совершения автошипа, при этом не собирает остающиеся 
				от заказа лишние баллы в слабую ногу.
				<br><br>
				ПРИМЕР 3: Дата Вашего автошипа 10 число каждого месяца, Вы подписаны на Условный автошип, при этом Вы сделали Предварительный автошип также как описано в ПРИМЕРЕ 1. 
				Таким образом у Вас также имеется активность до 9 марта и если до этой даты Вы не сделаете следующий Предварительный автошип, то вступит в силу Условный, 
				который сделает автоматически заказ выбранного Вами ранее продукта и сохранит тем самым Вашу активность.
				<br>
				</span></p>
		</div><!-- conditional -->
            <br>
        </div><!-- tab-pane4 -->
        
        <div class="tab-pane fade" id="tab6"><!-- wallet -->
            <br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#5CBC5C">JEUNESSE WALLET</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#67C567">активация кошелька и вывод средств</font>
            </h5>
            <br>
			<div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/d0HNOvEMskM?rel=0&showinfo=0" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
			</div>
			<br><br>
			<p align="center"><font color="#5CBC5C" style="font-size: 16px;">
					<b>ПЛАТЕЖНАЯ КАРТА PAYLUTION</b>
				</font></p>
			<div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/JvmJDLyhwEM?rel=0&showinfo=0" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
			</div>
        </div><!-- tab-pane5 -->

        <div class="tab-pane fade" id="tab7"><!-- other -->
		<br><br>
        <div class="elements-section" id="accordion">
						<div class="panel-group" id="accordion-6">
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-6" href="#collapse60" aria-expanded="false" class="collapsed">1. ГОЛОВНОЙ ОФИС JEUNESSE</a> 
											</h4>
										</div><!-- panel-heading -->    
										<div id="collapse60" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
												<span style="font-size: 14px;">	
												<b>Jeunesse Global</b><br>
												650 Douglas Avenue<br>
												Altamonte Springs, Florida 32714, USA<br>
												Office Hours:	Monday–Friday, 9:00 a.m.–6:00 p.m.(EST)<br>
												Office Phone: 407-862-9100<br>
												Customer Service Hours:	Monday–Friday, 7:00 a.m.–6:00 p.m. (EST)<br>
												Customer Phone:	407-215-7414<br>
												Fax: 407-772-2448<br>
												</span>
												</p>
												<div class="videoWrapper">
													<iframe frameborder="0" src="//www.youtube.com/embed/RJxRsrCCP5w?rel=0&showinfo=0" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
												</div>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-6" href="#collapse61" aria-expanded="false" class="collapsed">2. CALL ЦЕНТРЫ JEUNESSE в ЕВРОПЕ</a> 
											</h4>
										</div><!-- panel-heading -->    
										<div id="collapse61" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
												<span style="font-size: 14px;">				
												JEUNESSE GLOBAL (NORWAY) LIMITED
												Business Address: c/o Mark Greeve Accounting. Frodsham
												Business Centre, Bridge Lane, FRODSHAM WA6 7FZ Storbritannia
												Organization and VAT Number: 916 047 673 MVA
												Company Type: Norwegian Foreign Company<br><br>
												Country Phone Number(s)<br>
												Austria +43720880388<br>
												Belgium +3278485245 +32466900224<br>
												Bulgaria - Burgas +35956916980<br>
												Croatia - Dubrovnik +38520898015 +38520898016<br>
												Cyprus - Famagusta +35723030267<br>
												Czech Republic Brno (South Moravian Region) +420538890293<br>
												Denmark - Aalborg +4589875501 +4589875502<br>
												Estonia +3728803912<br>
												Finland +3584573975682 +358753266753<br>
												France +33974483646<br>
												Germany +4932221096700<br>
												Greece - Athens +302111987199<br>
												Hungary - Budapest +3618088254<br>
												Ireland +353768886723<br>
												Italy - Acqui Terme +390144230143<br>
												Latvia - Riga +37166163917<br>
												Lithuania - Vilnius +37052140008<br>
												Luxembourg +35220203649<br>
												Malta +35627780465<br>
												Netherlands +31858880737<br>
												Poland - Poznan +48616781282<br>
												Portugal +351308809174<br>
												Romania +40376300020<br>
												Slovakia - Bratislava +421233006941<br>
												Slovenia +38682880002<br>
												Spain +34518890926 +34668691123<br>
												Sweden +46108885620 +46766922161<br>
												Switzerland - Bern +41315281303<br>
												United Kingdom +443308083262 +447441913402<br>
												Languages that are currently available: English, Polish, French, German, Portuguese, Italian, Spanish, Dutch,<br>
												Hungarian, Danish, Swedish, Finnish and Czech.<br>
												You also may request support through the Joffice™ Help Desk.<br> 
												Please note that customer support inquiries are no
												longer supported via email.
												</span>
												</p>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-6" href="#collapse62" aria-expanded="false" class="collapsed">3. СЛУЖБА ПОДДЕРЖКИ РОССИЯ</a> 
											</h4>
										</div><!-- panel-heading -->    
										<div id="collapse62" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
												<span style="font-size: 14px;">				
												<b>РОССИЯ</b><br>
												1. Офис в Москве<br>
												Станция метро Кузнецкий мост или Трубная, М.Кисельный переулок 4, стр. 2<br> 
												Часы работы: Понедельник-пятница: 11:00 - 19:00<br> 
												Суббота: 11:00 - 18:00<br>
												+7(495)2010506<br>
												8(800)2507586 (звонок бесплатный)<br>
												Алена – cкайп: alyonaign.customerservice.msc , alyona.ignatyeva@jeunesseglobal.com<br>
												Ирина Леднёва - cкайп:  irina_ledneva.msc<br>
												Анна Суржанская anna.surzhanskaya@JeunesseHQ.com<br>
												Отпуск продукции: 8(926)3932295  Сергей<br>
												2. Офис в Санкт- Петербурге<br>
												Станция метро Площадь Восстания, 2-я советская д.7, оф.504 (5 этаж)<br>
												3. Офис в Самаре(Россия)<br>
                                                Улица Губанова- 3 ,3 этаж<br>
												6.Офис в Новосибирске<br>
												Ул. Гоголя, 44., вход с ул. Ипподромской.<br>
												Станция метро "Покрышкина" или "Березова роща".<br>
												+7(913)9864469 Дроздович Марина<br> 
												+7(913)7675325 Шалимова Виктория<br>
												</span></p>
												<br>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-6" href="#collapse63" aria-expanded="false" class="collapsed">4. СЛУЖБА ПОДДЕРЖКИ УКРАИНА и СНГ</a> 
											</h4>
										</div><!-- panel-heading -->    
										<div id="collapse63" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
												<span style="font-size: 14px;">	
												<b>УКРАИНА</b><br>
												1.Офис и склад в Киеве:<br> 
												01042, Улица Горького (Антоновича) д.172  "ТОЦ «ПАЛЛАДИУМ СИТИ» 1 этаж<br>
												Офис и склад: +380445295211, 0673629995 Тамара<br>
												Время работы офиса: Понедельник-Пятница с 9 до 17-00.<br> 
												Тренингового центра: с 9-00 до 20-00<br>
												Скайп: skladkiev1<br>
												Центральный офис: +14072157414 Ольга, olga.grigoras@jeunesseglobal.com;<br>
												Антон Бабушко - скайп  live:anton.babushko , anton@Jeunesse.global; <br>
												Алена - скайп: jeunesse.support.kiev<br>
												2.Офис в Одессе<br>
												по адресу: ул. Садовая,18<br>
												3.Офис в Харькове<br>
												ул.Московский проспект, здание Сан сити 199Б, офис 625<br>
												Наталья Федорова +380505361353<br>
												Елена Рыбальченко +38050 3006160<br> 
												Василий Иващенко +38067 5707427<br>										
												</span>
												</p>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-6" href="#collapse64" aria-expanded="false" class="collapsed">5. СЛУЖБА ДОСТАВКИ В РОССИИ</a> 
											</h4>
										</div><!-- panel-heading -->    
										<div id="collapse64" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
												<span style="font-size: 14px;">	
												<b>ООО Флиппост</b><br>
												125438 Москва, 2-й Лихачевский пер., д.3<br> 
												+7(495)7885508 доб. 142<br>
												+7(495)7885508 доб. 143<br>
												+7(495)2010506<br> 
												Ирина, Алена, Ольга<br>
												Скайп: YuliaJeunesse<br>
												</span>
												</p>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									<div class="panel">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-6" href="#collapse65" aria-expanded="false" class="collapsed">6. ПУНКТ САМОВЫВОЗА В МОСКВЕ</a> 
											</h4>
										</div><!-- panel-heading -->    
										<div id="collapse65" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
												<span style="font-size: 14px;">	
												<b>Склад Jeunesse</b><br>
												г. Москва, ул. Сущёвский Вал, д.74 (метро Рижская)<br>
												Рабочее время:	ежедневно с 8.00 до 24.00<br>
												Телефоны: +7 (499) 394-33-42<br>
												+7 (925) 365-79-18<br>
												+7 (914) 697-76-16<br>
												Skype: blessinggot8<br>
												E-mail: info@vipantiage.ru<br>
												</span>
												</p>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									
						</div><!-- accordion 4 -->
			</div><!-- elements-section -->
        </div><!-- tab-pane6 -->        
    </div><!-- tab-content -->
	</div>
	



@endsection
