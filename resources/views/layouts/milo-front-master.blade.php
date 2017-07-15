<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="liberty, club, team">
    <meta name="description" content="liberty club site">
    
    <title>@yield('title')</title>
    
    <!-- FAVICON AND APPLE TOUCH -->    
    <link rel="shortcut icon" href="milo/images/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="milo/images/icons/apple-touch-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="milo/images/icons/apple-touch-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="milo/images/icons/apple-touch-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="milo/images/icons/apple-touch-144x144.png">
    
    <!-- FONTS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="milo/assets/css/bootstrap.min.css"> 
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="milo/assets/fontawesome/css/font-awesome.min.css">    
    <!-- MIU ICON FONT -->
    <link rel="stylesheet" href="milo/assets/miuiconfont/miuiconfont.css">    
    <!-- FANCYBOX -->
    <link rel="stylesheet" href="milo/assets/js/fancybox/jquery.fancybox.css">    
    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" href="milo/assets/js/revolutionslider/css/settings.css">    
    <!-- BxSLIDER -->
    <link rel="stylesheet" href="milo/assets/js/bxslider/jquery.bxslider.css">    
    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="milo/assets/js/ytplayer/css/YTPlayer.css">    
    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="milo/assets/js/animations/animate.min.css">    
    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="milo/assets/css/custom.css">
    <link rel="stylesheet" href="milo/assets/css/pages-style.css"> 
    <style>
        
	@media (min-width: 992px) {
	
		header.header-sticky {
			position: fixed !important;
			top: 0 !important;
			left: 0;
			right: 0;
			margin: 0 auto;
			width: 100%;
			background-color: #fff;
			z-index: 99999;
			box-shadow: 0 1px 3px #d7d7d7;
		}
		
		.header-sticky #logo {
			margin: 16px 0;
		}
		
		.header-sticky #logo img {
			max-width: 100%;
			display: inline-block;
			-webkit-transition: all 0.3s;
					transition: all 0.3s;
		}
		
		.header-sticky .menu {
			margin-top: 12px;
		}
		
		.header-sticky .menu li > a {
			padding-bottom: 20px;
		}
		
		.header-sticky .sf-arrows .sf-with-ul:after {
			margin-top: -8px;
		}
		
		.header-sticky a.search-button {
			display: none;
		}

	}
    </style>
    @section('css')
    @show
</head>

<body>
	<div id="page-wrapper">
        <!-- HEADER -->
        <header>            
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">                        
                        <!-- LOGO -->
                        <a id="logo" href="http://liberty.dev">
                            <img src="milo/images/backgrounds/logo.png" alt="">
                        </a>                        
                    </div><!-- col -->
                    <div class="col-sm-10">                                           
                        @section('header')
                            @include('front.milo-menu')
			@show                    
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->                        
        </header><!-- HEADER -->        
            
        <!-- CONTENT -->
        <div class="content">            
            <section id="home">
            	@section('banner')
                    @include('front.milo-banner')
                @show  
            </section><!-- full-section -->
            
            <section id="about">
            	
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">                        	
                            <div class="headline style-3">                        	
                                <h5>Кто мы</h5>
                                <h2>Что мы делаем</h2>
                                <p>Лучший способ предсказывать будущее — создавать его</p>                                
                            </div><!-- headline -->                        
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
                
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            
                            <h3>Чтобы иметь то, чего раньше не имел, нужно делать то, что раньше не делал</h3>                            
                            <br>
                            <p>Современный мир предлагает множество возможностей о которых мечтает каждый - создать свое прибыльное дело и работать на себя, 
                            путешествовать, открывать для себя новые города и страны, обустроить свое жилище, сделать свою жизнь лучше. На пути ко всему этому
                            люди порой сталкиваются с множеством препятствий - отсутствие опыта, страх, неуверенность, недостаток знаний о том, как это осуществить.
                            Мы выбрали надежный проверенный путь и создали ресурс, который предоставит Вам всю необходимую информацию, убережет вас от ошибок, поможет
                            преодолеть все внешние и внутренние препятствия на пути к Вашим целям и позволит Вам работать над их достижением, где бы Вы не находились.
                            Больше не нужно ходить на работу и ждать отпуска - будьте там где Вам комфортно. Дома или в парке, в горах или у моря, деревне или мегаполисе - 
                            сядьте поудобней, войдите на сайт и постройте свое будущее.</p>
                            
                        </div><!-- col -->
                        <div class="col-sm-6">
                            
                            <div class="vertical-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-1" data-toggle="tab">LIBERTY</a></li>
                                    <li><a href="#tab-2" data-toggle="tab">CLUB</a></li>
                                    <li><a href="#tab-3" data-toggle="tab">PRO</a></li>
                                </ul>                                            
                            
                                 <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-1">
                                        <p class="text-uppercase"><strong>Liberty - Свобода, независимость</strong></p>
                                        <p>Наш сайт помогает стать независимым финансово и географически, обрести личную свободу, расширить свои внешние и внутренние границы, не зависеть от места жительства и уровня безработицы, возраста и образования.  Если это похоже на Вас, то мы подружимся.</p>
                                        <img src="milo/images/about/tabs/image-1.jpg" alt="">
                                    </div><!-- tab-pane -->
                                    <div class="tab-pane fade" id="tab-2">
                                        <p class="text-uppercase"><strong>Клуб - место встречи людей с общими интересами</strong></p>
                                        <p>Войдите на сайт и обретите настоящих друзей по всему миру, на которых всегда можно положиться. Для того, чтобы попасть в любой клуб, нужна рекомендация его участника. Еслу у Вас ее нет, то Вы ее сможете получить после заполнения профиля. </p>
                                        <img src="milo/images/about/tabs/image-2.jpg" alt="">
                                            
                                    </div><!-- tab-pane -->
                                    <div class="tab-pane fade" id="tab-3">
                                        <p class="text-uppercase"><strong>Pro - Прогрессивный, профессиональный.</strong></p>
                                        <p>Так же от слова Promotion (продвигать). Как правило означает самую лучшую (pro) версию чего либо. Станьте лучше - узнайте на что Вы способны. Пространство .pro было создано только для ресурсов, предоставляющих профессиональный уровень сервиса.</p>
                                        <img src="milo/images/about/tabs/image-3.jpg" alt="">
                                    </div><!-- tab-pane -->
                                </div><!-- tab-content -->
                            </div><!-- vertical-tabs -->
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container --> 
                
                <br><br>
                
            </section><!-- about -->
            
            <section class="full-section parallax" id="blog" style="background-image:url(milo/images/backgrounds/bg-3.jpg);">
            	<div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        	
                            <div class="headline style-2">	
                        	
                                <i class="miu-icon-other_arrow-right_other_outline_stroke"></i>
                                <h2>Регистрация</h2>
                                
                            </div><!-- headline -->
                            
                          <div class="col-md-offset-2 col-md-8 col-sm-12">
                        
                        @section('register')
                            @include('forms.register')
                        @show  
                        
                        </div><!-- col -->

                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->             	
            </section><!-- full-section -->
                        
            <section id="services">
            	
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="headline style-3">
                                <h5>8 причин</h5>
                                <h2>ПОЧЕМУ МЫ</h2>
                                <p>Когда вы знаете, чего хотите, и вы хотите этого достаточно сильно, вы найдёте способ получить это</p>
                            </div><!-- headline -->
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- ontainer -->
				
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="services-boxes style-3 icon-right wow fadeInLeft">
								<i class="miu-icon-circle_gear_setting_configure_outline_stroke"></i>
								<div class="services-boxes-content">
									<h3><a href="single-service.html">Системность</a></h3>
									<p>Система — комбинация взаимодействующих элементов, организованных для достижения одной или нескольких поставленных целей (ГОСТ Р ИСО МЭК 15288-2005)</p>
								</div><!-- services-boxes-content -->
							</div><!-- services-boxes -->
							
						</div><!-- col -->
						<div class="col-sm-6">
							<div class="services-boxes style-3 icon-left wow fadeInRight">
								<i class="miu-icon-editor_crop_outline_stroke"></i>
								<div class="services-boxes-content">
									<h3><a href="single-service.html">Простота</a></h3>
									<p>Мы делаем сложные вещи простыми, говоря о серьезных моментах бизнеса простым и понятным языком. "Надо делать настолько просто, насколько это возможно, но не проще." (Альберт Эйнштейн) </p>
								</div><!-- services-boxes-content -->
							</div><!-- services-boxes -->
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- ontainer -->

				<div class="container">
					<div class="row">
						<div class="col-sm-6">
						
							<div class="services-boxes style-3 icon-right wow fadeInLeft">
								
								<i class="miu-icon-device_board_presentation_content_text_outline_stroke"></i>
								
								<div class="services-boxes-content">
									
									<h3><a href="single-service.html">Интерактив</a></h3>
									
									<p>На пути к Вашим успехам, система будет взаимодействовать с Вами, давая подсказки, необходимые материалы, согласно Вашим потребностям и предпочтениям.</p>
									
								</div><!-- services-boxes-content -->
								
							</div><!-- services-boxes -->
							
						</div><!-- col -->
						<div class="col-sm-6">
						
							<div class="services-boxes style-3 icon-left wow fadeInRight">
								
								<i class="miu-icon-other_review_comment_outline_stroke"></i>
								
								<div class="services-boxes-content">
									
									<h3><a href="single-service.html">Поддержка</a></h3>
									
									<p>Успешность команды складывается из успеха каждого ее участника. Вы всегда можете расчитывать на поддержку более опытных одноклубников - в первую очередь от человека давшего Вам рекомендацию в Клуб.</p>
									
								</div><!-- services-boxes-content -->
								
							</div><!-- services-boxes -->
							
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->

				<div class="container">
					<div class="row">
						<div class="col-sm-6">
						
							<div class="services-boxes style-3 icon-right wow fadeInLeft">
									
									<i class="miu-icon-editor_document_file_2_outline_stroke"></i>
									
									<div class="services-boxes-content">
										
										<h3><a href="single-service.html">Инструкции</a></h3>
										
										<p>Получайте необходимые знания, опыт и результаты на практике, следуя простым инструкциям внутри Вашего кабинета, предоставляемым Вам на каждом из этапов вашего PROдвижения.</p>
										
									</div><!-- services-boxes-content -->
									
								</div><!-- services-boxes -->
							
						</div><!-- col -->
						<div class="col-sm-6">
						
							<div class="services-boxes style-3 icon-left wow fadeInRight">
									
									<i class="miu-icon-device_tablets_ipads_horizontal_outline_stroke"></i>
									
									<div class="services-boxes-content">
										
										<h3><a href="single-service.html">Удобство</a></h3>
										
										<p>Возможность работы с любых устройств: компьютер,ноутбук, планшет или телефон. Ведите дела на любимом девайсе, находясь дома, в дороге или на отдыхе, что позволит Вам не терять ваш самый дорогой и невосполняемый ресурс - время. </p>
										
									</div><!-- services-boxes-content -->
									
								</div><!-- services-boxes -->
							
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- container -->
                                
                                <div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="services-boxes style-3 icon-right wow fadeInLeft">
								<i class="miu-icon-business_coins_money_stack_salary_outline_stroke"></i>
								
								<div class="services-boxes-content">
									<h3><a href="single-service.html">Заработок</a></h3>
									<p>Никто не решит за Вас сколько стоит день Вашей жизни, неделя или месяц, назначив за Вас цену, называемую окладом. Ознакомьтесь с планом доходов, выберите уровень достойный Вас и воплощайте. </p>
								</div><!-- services-boxes-content -->
								
							</div><!-- services-boxes -->
							
						</div><!-- col -->
						<div class="col-sm-6">
						
							<div class="services-boxes style-3 icon-left wow fadeInRight">
								<i class="miu-icon-common_star_favorite_bookmark_outline_stroke"></i>
								
								<div class="services-boxes-content">
									<h3><a href="single-service.html">Карьера</a></h3>									
									<p>Не карабкайтесь по карьерной лестнице - у нас ее нет. Просто войдите в лифт и нажмите нужную кнопку.</p>							
								</div><!-- services-boxes-content -->
								
							</div><!-- services-boxes -->
							
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- ontainer -->
				                
            </section><!-- services -->
            
            <section id="portfolio">
            	
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="headline style-3">
                                
                                <h5>Liberty Club</h5>
                                <h2>Наши будни</h2>
                                <p>Будьте там, где все происходит</p>
                                
                            </div><!-- headline -->
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- ontainer -->
                
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        
                            <ul class="filter">
                                <li>
                                    <a class="active" href="#" data-filter="*">Все фото</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".categ-1">Встречи</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".categ-2">События</a>
                                </li>
                                <li>
                                    <a href="#" data-filter=".categ-3">Отдых</a>
                                </li>
                            </ul>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
                
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="isotope col-3 clearfix">
                                
                                <div class="isotope-item categ-1 categ-3">
                                    
                                    <div class="portfolio-item wow fadeInDown">
                                
                                        <div class="portfolio-item-thumbnail">
                                        
                                            <img src="milo/images/portfolio/image-8.jpg" alt="">
                                            
                                            <div class="portfolio-item-hover">
                                                
                                                <div class="portfolio-item-description">
                                                    
                                                    <h3>Business card</h3>
                                                    <h5>Industrial design</h5>
                                                    
                                                </div><!-- portfolio-item-description -->
                                                
                                                <a class="fancybox-portfolio-gallery zoom-action" href="milo/images/portfolio/image-8.jpg"><i class="fa fa-plus"></i></a>
                                                
                                            </div><!-- portfolio-item-hover -->
                                            
                                        </div><!-- portfolio-item-thumbnail -->
                                        
                                    </div><!-- portfolio-item -->
                                    
                                </div><!-- isotope-item -->
                                
                                <div class="isotope-item categ-2">
                                    
                                    <div class="portfolio-item wow fadeInDown">
                                
                                        <div class="portfolio-item-thumbnail">
                                        
                                            <img src="milo/images/portfolio/image-26.jpg" alt="">
                                            
                                            <div class="portfolio-item-hover">
                                                
                                                <div class="portfolio-item-description">
                                                    
                                                    <h3>Lamp design</h3>
                                                    <h5>Industrial design</h5>
                                                    
                                                </div><!-- portfolio-item-description -->
                                                
                                                <a class="fancybox-portfolio-gallery zoom-action" href="images/portfolio/image-26.jpg"><i class="fa fa-plus"></i></a>
                                                
                                            </div><!-- portfolio-item-hover -->
                                            
                                        </div><!-- portfolio-item-thumbnail -->                                                                        
                                        
                                    </div><!-- portfolio-item -->
                                    
                                </div><!-- isotope-item -->
                                
                                <div class="isotope-item categ-3">
                                    
                                    <div class="portfolio-item wow fadeInDown">
                                
                                        <div class="portfolio-item-thumbnail">
                                        
                                            <img src="milo/images/portfolio/image-10.jpg" alt="">
                                            
                                            <div class="portfolio-item-hover">
                                                
                                                <div class="portfolio-item-description">
                                                    
                                                    <h3>Minimal item</h3>
                                                    <h5>Projects</h5>
                                                    
                                                </div><!-- portfolio-item-description -->
                                                
                                                <a class="fancybox-portfolio-gallery zoom-action" href="milo/images/portfolio/image-10.jpg"><i class="fa fa-plus"></i></a>
                                                
                                            </div><!-- portfolio-item-hover -->
                                            
                                        </div><!-- portfolio-item-thumbnail -->
                                        
                                    </div><!-- portfolio-item -->
                                    
                                </div><!-- isotope-item -->
                                
                                <div class="isotope-item categ-1">
                                    
                                    <div class="portfolio-item wow fadeInDown">
                                
                                        <div class="portfolio-item-thumbnail">
                                        
                                            <img src="milo/images/portfolio/image-11.jpg" alt="">
                                            
                                            <div class="portfolio-item-hover">
                                                
                                                <div class="portfolio-item-description">
                                                    
                                                    <h3>Bottle prototipe</h3>
                                                    <h5>Industrial design</h5>
                                                    
                                                </div><!-- portfolio-item-description -->
                                                
                                                <a class="fancybox-portfolio-gallery zoom-action" href="milo/images/portfolio/image-11.jpg"><i class="fa fa-plus"></i></a>
                                                
                                            </div><!-- portfolio-item-hover -->
                                            
                                        </div><!-- portfolio-item-thumbnail -->                                                                        
                                        
                                    </div><!-- portfolio-item -->
                                    
                                </div><!-- isotope-item -->
                                
                                <div class="isotope-item categ-2">
                                    
                                    <div class="portfolio-item wow fadeInDown">
                                
                                        <div class="portfolio-item-thumbnail">
                                        
                                            <img src="milo/images/portfolio/macau.jpg" alt="">
                                            
                                            <div class="portfolio-item-hover">
                                                
                                                <div class="portfolio-item-description">
                                                    
                                                    <h3>Макао</h3>
                                                    <h5>События</h5>
                                                    
                                                </div><!-- portfolio-item-description -->
                                                
                                                <a class="fancybox-portfolio-gallery zoom-action" href="milo/images/portfolio/macau.jpg"><i class="fa fa-plus"></i></a>
                                                
                                            </div><!-- portfolio-item-hover -->
                                            
                                        </div><!-- portfolio-item-thumbnail -->                                                                        
                                        
                                    </div><!-- portfolio-item -->
                                    
                                </div><!-- isotope-item -->
                                
                                <div class="isotope-item categ-1">
                                    
                                    <div class="portfolio-item wow fadeInDown">
                                
                                        <div class="portfolio-item-thumbnail">
                                        
                                            <img src="milo/images/portfolio/image-19.jpg" alt="">
                                            
                                            <div class="portfolio-item-hover">
                                                
                                                <div class="portfolio-item-description">
                                                    
                                                    <h3>New Book</h3>
                                                    <h5>Projects</h5>
                                                    
                                                </div><!-- portfolio-item-description -->
                                                
                                                <a class="fancybox-portfolio-gallery zoom-action" href="milo/images/portfolio/image-19.jpg"><i class="fa fa-plus"></i></a>
                                                
                                            </div><!-- portfolio-item-hover -->
                                            
                                        </div><!-- portfolio-item-thumbnail -->     
                                        
                                    </div><!-- portfolio-item -->
                                    
                                </div><!-- isotope-item -->  
                                
                                <div class="isotope-item categ-2 categ-3">
                                    
                                    <div class="portfolio-item wow fadeInDown">
                                
                                        <div class="portfolio-item-thumbnail">
                                        
                                            <img src="milo/images/portfolio/image-28.jpg" alt="">
                                            
                                            <div class="portfolio-item-hover">
                                                
                                                <div class="portfolio-item-description">
                                                    
                                                    <h3>New design</h3>
                                                    <h5>Photography</h5>
                                                    
                                                </div><!-- portfolio-item-description -->
                                                
                                                <a class="fancybox-portfolio-gallery zoom-action" href="milo/images/portfolio/image-28.jpg"><i class="fa fa-plus"></i></a>
                                                
                                            </div><!-- portfolio-item-hover -->
                                            
                                        </div><!-- portfolio-item-thumbnail -->     
                                        
                                    </div><!-- portfolio-item -->
                                    
                                </div><!-- isotope-item -->                                                   
                                
                            </div><!-- isotope -->
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
                
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <p class="text-center"><a class="btn-liberty btn-liberty-default load-more" href="more-projects-2.html">Load more</a></p>
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
                
            </section><!-- portfolio -->
            
            <section class="full-section parallax" id="section-1" style="background-image:url(milo/images/backgrounds/bg-8.jpg);"
            	<div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                        	
                            <div class="headline style-2">	
                        	
                                <i class="miu-icon-other_conversation_review_comment_bubble_talk_outline_stroke"></i>
                                <h2>Пара слов о клубе</h2>
                                
                            </div><!-- headline -->
                            
                            <div class="testimonial-slider">
                            	<ul>
                                	<li>
                                    	<div class="testimonial">
                            
                                            <blockquote>
                                                <p>Придя в клуб Liberty, я увидел, что на самом деле развивать бизнес по всему миру прямо из дома - не только реально, но и достаточно просто, благодаря возможностям сайта. Спасибо огромное его создателям!</p>
                                            </blockquote> 
                                            
                                            <h5>Сергей Лапин, Россия.</h5>                        
                                            
                                        </div><!-- testimonial -->
                                    </li>
                                    <li>
                                    	<div class="testimonial">
                            
                                            <blockquote>
                                                <p>Quisque neque orci, dictum eu egestas eget, porta vel dolor. Etiam vel nunc pulvinar, suscipit urna 
                                                sit amet, efficitur nibh. Nulla convallis ut lectus a tempor. Nullam tincidunt pulvinar sodales. Nunc 
                                                sed erat et risus luctus sollicitudin.</p>
                                            </blockquote> 
                                            
                                            <h5>Jane Smith, MiloBrand</h5>                        
                                            
                                        </div><!-- testimonial -->
                                    </li>
                                    <li>
                                    	<div class="testimonial">
                            
                                            <blockquote>
                                                <p>Phasellus finibus erat non ligula semper tempor. Curabitur augue lacus, mattis id enim vehicula, 
                                                dictum sollicitudin arcu. Cras sodales dolor quis ligula hendrerit, auctor dapibus nibh sagittis. Sed 
                                                congue, purus semper dapibus sagittis arcu.</p>
                                            </blockquote> 
                                            
                                            <h5>Paul Willson, The Muse</h5>                        
                                            
                                        </div><!-- testimonial -->
                                    </li>
                                    <li>
                                    	<div class="testimonial">
                            
                                            <blockquote>
                                                <p>Phasellus finibus erat non ligula semper tempor. Curabitur augue lacus, mattis id enim vehicula, 
                                                dictum sollicitudin arcu. Cras sodales dolor quis ligula hendrerit, auctor dapibus nibh sagittis. Sed 
                                                congue, purus semper dapibus sagittis arcu.</p>
                                            </blockquote> 
                                            
                                            <h5>Paul Willson, The Muse</h5>                        
                                            
                                        </div><!-- testimonial -->
                                    </li>
                                </ul>
                                <div id="thumb-pager">
                                    <a data-slide-index="0" href=""><img src="milo/images/testimonials/image-1.jpg" alt=""></a>
                                    <a data-slide-index="1" href=""><img src="milo/images/testimonials/image-2.jpg" alt=""></a>
                                    <a data-slide-index="2" href=""><img src="milo/images/testimonials/image-3.jpg" alt=""></a>
                                    <a data-slide-index="3" href=""><img src="milo/images/testimonials/image-4.jpg" alt=""></a>
                                </div><!-- thumb-pager -->
                                
                            </div><!-- testimonial-slider -->
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->             	
            </section><!-- full-section -->
            
        </div><!-- CONTENT -->
        
        <!-- FOOTER -->
        <footer>
            <div id="footer-top">
                @section('footer-top')
                    @include('front.milo-footer-top')
                @show
            </div>
            
            <div id="footer">
            	
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="widget widget-contact">
                                <h3 class="widget-title">Счетчики</h3>
                                <ul>
                                    <li>
                                        
                                    </li>
                                    <li>
                                        
                                    </li>
                                    <li>
                                        
                                    </li>
                                </ul>
                            </div><!-- widget-contact -->
                        </div><!-- col -->
                        
                        <div class="col-sm-4">
                            <div class="widget widget-contact">
                                <h3 class="widget-title">Мы принимаем</h3>
                                    <img src="./images/bankcarts.jpg">
                            </div><!-- widget-contact -->
                        </div><!-- col -->
                        
                        <div class="col-sm-4">
                            <div class="widget widget-contact">
                                <h3 class="widget-title">Документы</h3>
                                <ul>
                                    <li>
                                        <a href="rules">Правила пользования</a>
                                    </li>
                                    <li>
                                        <a href="privacy_policy">Политика конфедециальности</a>
                                    </li>
                                    <li>
                                        <span>E-mail</span>
                                        <a href="mailto:liberty.team.club@gmail.com">liberty.team.club@gmail.com</a>
                                    </li>
                                </ul>
                            </div><!-- widget-contact -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- footer -->
            
            
            <div id="footer-bottom">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-12">
                        	
                            <div class="widget widget-text">	
                            	
                                <p class="last text-center text-uppercase">&copy; All Rights Reserved <span class="text-primary">Liberty club</span> 
                                
                            </div><!-- widget-text -->
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
                
            </div><!-- footer-bottom -->
          
                     
        </footer><!-- FOOTER -->
        
    </div><!-- PAGE-WRAPPER -->
    
    
    <!-- GO TOP -->
    <a id="go-top"><i class="miu-icon-circle_arrow-up_glyph"></i></a>

    
    <!-- jQUERY -->
    <script src="milo/assets/js/jquery-2.1.3.min.js"></script>
	
    <!-- BOOTSTRAP JS -->
    <script src="milo/assets/js/bootstrap.min.js"></script>
    
    <!-- VIEWPORT -->
    <script src="milo/assets/js/viewport/jquery.viewport.js"></script>
    
    <!-- MENU -->
    <script src="milo/assets/js/menu/hoverIntent.js"></script>
    <script src="milo/assets/js/menu/superfish.js"></script>
    
    <!-- FANCYBOX 
    <script src="milo/assets/js/fancybox/jquery.fancybox.pack.js"></script>
    
    <!-- REVOLUTION SLIDER -->
    <script src="milo/assets/js/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="milo/assets/js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- BxSLIDER -->
    <script src="milo/assets/js/bxslider/jquery.bxslider.min.js"></script>
    
    <!-- PARALLAX -->
    <script src="milo/assets/js/parallax/jquery.parallax-scroll.min.js"></script>
    
    <!-- ISOTOPE -->
    <script src="milo/assets/js/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="milo/assets/js/isotope/isotope.pkgd.min.js"></script>
    
    <!-- PLACEHOLDER -->
    <script src="milo/assets/js/placeholders/jquery.placeholder.min.js"></script>
    
    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src="milo/assets/js/validate/jquery.validate.min.js"></script>
    <script src="milo/assets/js/submit/jquery.form.min.js"></script>
    
    <!-- GOOGLE MAPS 
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="milo/assets/js/googlemaps/jquery.gmap.min.js"></script>
    
    <!-- CHARTS -->
    <script src="milo/assets/js/charts/chart.min.js"></script>
    <script src="milo/assets/js/charts/jquery.easypiechart.min.js"></script>
    
    <!-- COUNTER -->
    <script src="milo/assets/js/counter/jQuerySimpleCounter.js"></script>
    
    <!-- YOUTUBE PLAYER -->
    <script src="milo/assets/js/ytplayer/jquery.mb.YTPlayer.js"></script>
	
	<!-- TWITTER 
    <script src="milo/assets/js/twitter/twitterfetcher.js"></script>
    
    <!-- ANIMATIONS -->
    <script src="milo/assets/js/animations/wow.min.js"></script>
    
    <!-- CUSTOM JS -->
    <script src="milo/assets/js/custom.js"></script>
    
    <!-- GOOGLE RECAPTCHA -->
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->

</body>
    
</html>