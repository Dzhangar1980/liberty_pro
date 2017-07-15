@extends('layouts.milo-cabinet')
@section('title')
    <title>ПРОДУКЦИЯ</title>
@show
@section('content')
<br>
<div class="widget widget-tags" align="center">
            <div>
                <a onclick="$('html, body').animate({scrollTop: $('#LUMINESCE').offset().top}, 800);" style="cursor: pointer">LUMINESCE</a>
				<a onclick="$('html, body').animate({scrollTop: $('#RESERVE').offset().top}, 800);" style="cursor: pointer">RESERVE</a>
				<a onclick="$('html, body').animate({scrollTop: $('#FINITI').offset().top}, 1000);" style="cursor: pointer">FINITI</a>
				<a onclick="$('html, body').animate({scrollTop: $('#AmPm').offset().top}, 1000);" style="cursor: pointer">Am Pm</a>
				<a onclick="$('html, body').animate({scrollTop: $('#ZEN').offset().top}, 1000);" style="cursor: pointer">ZEN BODI</a>
				<a onclick="$('html, body').animate({scrollTop: $('#AGELESS').offset().top}, 1000);" style="cursor: pointer">AGELESS</a>
				<a onclick="$('html, body').animate({scrollTop: $('#NEVO').offset().top}, 1000);" style="cursor: pointer">NEVO</a>
            </div>
        </div>
<h3 align="center" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">Антивозрастная система Y.E.S.</font>
        </h3>
		<br>
		<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">			
            Омолаживающая АНТИВОЗРАСТНАЯ система Y.E.S. (Youth Enhancement System), благодаря входящим в её состав активно взаимодействующим, 
			синергетически взаимодополняющим компонентам и тщательно подобранным  запатентованным составам и формулам, в числе которых открытия получившие
			<a href="nobelprices" target="_blank">5 Нобелевских премий</a>, позволяет добиться невероятного эффекта по восстановлению, оздоровлению и омоложению организма. 
			Чтобы ознакомиться подробно с тем или иным продуктом, кликните по соответсвующей картинке ниже.</span></p>
		<br>
        <div id="LUMINESCE"></div>
		<br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">LUMINESCE</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Естественное восстановление клеток вашей кожи</font>
            </h5>
            <br>
		<div class="hover01 column">
						<div>   
									<figure>
										<a href="#" data-featherlight="../images/products/luminesce-button.jpg">
											<a href="product_LUMINESCE">
												<img src="../images/products/luminesce-button.jpg" width="100%" height="100%" alt="Пример">
											</a>
										</a>
									</figure>
						</div>
		</div>
		<br><p></p>
		<div id="RESERVE"></div>
		<br>	
            <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#952181">RESERVE</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#c784bb">Сила и долголетие вашего организма</font>
            </h5>
            <br>
			<div class="hover01 column">
							<div>   
										<figure>
											<a href="#" data-featherlight="../images/products/reserve-button.jpg">
												<a href="product_RESERVE">
													<img src="../images/products/reserve-button.jpg" width="100%" height="100%" alt="Пример">
												</a>
											</a>
										</figure>
							</div>
						</div>
			<br><p></p>
			 <div id="FINITI"></div>
			 <br>	
						<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
							<font color="#e02d25">FINITI</font>
						</h2>
						<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
							<font color="#ea6b35">Новая жизнь ваших клеток</font>
						</h5>
						<br>
			<div class="hover01 column">
							<div>   
										<figure>
											<a href="#" data-featherlight="../images/products/finiti-button.jpg">
												<a href="product_FINITI">
													<img src="../images/products/finiti-button.jpg" width="100%" height="100%" alt="Пример">
												</a>
											</a>
										</figure>
							</div>
						</div>
			<br><p></p>
			<div id="AmPm"></div>
			<br>
            <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#ff6b00">Am Pm Essentials</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#f79421">Засыпайте и просыпайтесь молодо - набирайтесь сил</font>
            </h5>
            <br>
			<div class="hover01 column">
							<div>   
										<figure>
											<a href="#" data-featherlight="../images/products/AmPm-button.jpg">
												<a href="product_AMPM">
													<img src="../images/products/AmPm-button.jpg" width="100%" height="100%" alt="Пример">
												</a>
											</a>
										</figure>
							</div>
						</div>
			<br><p></p>
			<div id="ZEN"></div>
			<br>
						<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
							<font color="#c41a19">ZEN BODI</font>
						</h2>
						<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
							<font color="#de1e37">Сбалансированный подход к контролю веса</font>
						</h5>
						<br>
			<div class="hover01 column">
							<div>   
										<figure>
											<a href="#" data-featherlight="../images/products/zen-button.jpg">
												<a href="product_ZEN">
													<img src="../images/products/zen-button.jpg" width="100%" height="100%" alt="Пример">
												</a>
											</a>
										</figure>
							</div>
						</div>
			<br><p></p>
			<div id="AGELESS"></div>
			<br>
            <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#00a7b5">INSTANTLY AGELESS</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#25bed5">Мгновенная безупречность</font>
            </h5>
            <br>
			<div class="hover01 column">
							<div>   
										<figure>
											<a href="#" data-featherlight="../images/products/Ageless-button.jpg">
												<a href="product_AGELESS">
													<img src="../images/products/Ageless-button.jpg" width="100%" height="100%" alt="Пример">
												</a>
											</a>
										</figure>
							</div>
						</div>
			<br><p></p>
			<div id="NEVO"></div>
			<br>
						<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
							<font color="#c1d500">NEVO</font>
						</h2>
						<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
							<font color="#c1d500">Получайте энергию и молодейте</font>
						</h5>
						<br>
			<div class="hover01 column">
							<div>   
										<figure>
											<a href="#" data-featherlight="../images/products/nevo-button.jpg">
												<a href="product_NEVO">
													<img src="../images/products/nevo-button.jpg" width="100%" height="100%" alt="Пример">
												</a>
											</a>
										</figure>
							</div>
			</div>
			<br><br><p></p>
			<br>
			<h3 align="center" style="font-family: Open Sans, Arial, sans-serif;">
            <font color="#3367D6">Антивозрастная система Y.E.S.</font>
			</h3>
			<br>
			<div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/xK01Zjr52VM?rel=0&showinfo=0" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
            </div>
			<br><br>
			<p align="center"><font color="#952181">
						<a href="info" target="_blank">СТАТЬИ</a>
					</font></p>
@endsection
