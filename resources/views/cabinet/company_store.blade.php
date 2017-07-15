@extends('layouts.milo-cabinet')
@section('content')
            @if($user->profile->company_login)
				<br><br>
				<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					<span style="font-size: 14px;">
					Ваш сайт в Jeunesse - это не только Ваш интернет-магазин, который могут посещать клиенты в 145 странах Мира, при этом каждый из них
					автоматически будет видеть информацию на языке страны его пребывания. Но это еще Ваш инструмент для развития сети клиентов и партнеров,
					поскольку именно с этой страницы происходит регистрация новых ПАРТНЕРОВ и ПОКУПАТЕЛЕЙ. Для того чтобы зарегистрировать нового ПАРТНЕРА,
					Вы можете дать ему ссылку на свой сайт, где он может зарегистрироваться как партнер, после нажатия на "СТАНЬТЕ УЧАСТНИКОМ" в верхнем меню.
					Для регистрации нового клиента, нужно нажать "ПРИОРИТЕТНЫЙ ПОКУПАТЕЛЬ" (подробно о регистрации см. Компания/Справка)<br><br>
					Кроме этого на главной странице Вашего сайта интернет-магазина Jeunesse, есть информация о самой Компании и краткое описание Возможностей 
					сотрудничества и вознаграждений, а так же Календарь официальных мероприятий Jeunesse во всех странах, которые может посетить любой желающий.
					<br>
					</span>
				</p>
				<br><br>
				<p align="center">
				<a href="https://{{ $user->profile->company_login }}.jeunesseglobal.com/" class="btn-liberty btn-liberty-black" align="center">Перейти в Магазин</a>
				</p>
				<br>
				<div class="hover01 column">
						<div>   
									<figure>
										<a href="#" data-featherlight="../images/products/shopscreen.JPG">
											<a href="https://{{ $user->profile->company_login }}.jeunesseglobal.com/" target="_blank">
												<img src="../images/products/shopscreen.JPG" width="100%" height="100%" alt="Пример">
											</a>
										</a>
									</figure>
						</div>
					</div>
				<br><br>
			@else
                <br><br>
				<p style="font-size: 14px; 	text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
					Когда Вы станете Партнером, для Вас автоматически будет создан интернет-магазин, который смогут посещать клиенты в 145 странах Мира, где 
					каждый из них будет видеть информацию на языке страны его пребывания. Это будет также Ваш инструмент для развития сети клиентов и партнеров,
					поскольку именно с этой страницы происходит регистрация новых ПАРТНЕРОВ и ПОКУПАТЕЛЕЙ.
				</p>
				<br><br>
				<div class="widget widget-tags" align="center">
				<div>
					<a onclick="$('#assotiate').show();$('#client').hide();$('#moreinfo').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">СТАТЬ ПАРТНЕРОМ</span>
					</a>
					<a onclick="$('#assotiate').hide();$('#client').show();$('#moreinfo').hide();" 
					   style="cursor: pointer">
						<span style="font-size: 14px; font-family: Open Sans, Arial, sans-serif;">СТАТЬ КЛИЕНТОМ</span>
					</a>
				</div>
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
                    ПРИОРИТЕТНЫЙ ПОКУПАТЕЛЬ</b><br/> 
					</font>
                </span>
				</p>
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
				<br>
			</div><!-- client -->
			
				<p align="center"><font color="#952181">
						<a href="https://{{ $user->profile->mysponsor->profile->company_login }}.jeunesseglobal.com/" target="_blank">ИНТЕРНЕТ-МАГАЗИН СПОНСОРА</a>
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
            @endif
            
@endsection
