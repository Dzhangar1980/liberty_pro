<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="liberty, club, team">
    <meta name="description" content="liberty club site">
    <meta name="_token" content="{!! csrf_token() !!}">
    @section('title')
        <title>Liberty club :: Кабинет</title>
    @show
    
    <!-- FAVICON AND APPLE TOUCH -->    
    <link rel="shortcut icon" href="../milo/images/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../milo/images/icons/apple-touch-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../milo/images/icons/apple-touch-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../milo/images/icons/apple-touch-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../milo/images/icons/apple-touch-144x144.png">
    
    <!-- FONTS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">    
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../milo/assets/css/bootstrap.min.css"> 
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../milo/assets/fontawesome/css/font-awesome.min.css">    
    <!-- MIU ICON FONT -->
    <link rel="stylesheet" href="../milo/assets/miuiconfont/miuiconfont.css">    
    <!-- FANCYBOX 
    <link rel="stylesheet" href="../milo/assets/js/fancybox/jquery.fancybox.css">    
    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" href="../milo/assets/js/revolutionslider/css/settings.css">    
    <!-- BxSLIDER -->
    <link rel="stylesheet" href="../milo/assets/js/bxslider/jquery.bxslider.css">    
    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="../milo/assets/js/ytplayer/css/YTPlayer.css">    
    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="../milo/assets/js/animations/animate.min.css">    
    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="../milo/assets/css/custom.css">
    <link rel="stylesheet" href="../milo/assets/css/pages-style.css"> 
    <!-- elusive-icons -->
    <link rel="stylesheet" href="../fonts/elusive-icons/css/elusive-icons.min.css">
    <!-- featherlight -->
    <link href="../js/featherlight/release/featherlight.min.css" type="text/css" rel="stylesheet" />
    <!-- plyr -->
    <link href="../js/plyr/dist/plyr.css" type="text/css" rel="stylesheet" />
    <!-- FORSAGE style -->
    <link href="../css/style.css" type="text/css" rel="stylesheet" />
    @section('css')
    @show 
    @section('script')
    @show 
</head>

<body>
    <div id="page-preloader">
        <span class="spinner"></span> 
        <span class="title">Загрузка...</span> 
    </div>
	<div id="page-wrapper">
        <!-- HEADER -->
        <header>            
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">                        
                        <!-- LOGO -->
                        <a id="logo" href="http://liberty.dev/cabinet/home">
                            <img src="../milo/images/backgrounds/logo.png" alt=""> 
                        </a>                        
                    </div><!-- col -->
                    <div class="col-sm-10">
                         <!-- SEARCH -->
                        <div id="search-container">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div id="notifications">
                                        @include('front.milo-cabinet-notifications')
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div><!-- search-container -->   
                       
                        <a class="search-button" href="#"></a>     
                       
                        @section('header')
                            @include('front.milo-cabinet-menu')
			@show                    
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->                        
        </header><!-- HEADER -->        
            
        <!-- CONTENT -->
        <div class="content">      
            <!--
            <div id="page-header" style="margin-bottom:0;">  
                <div class="container">
                    <div class="row">                        
                        <div class="col-sm-12">     
                            <img src="../images/72090-banner.gif">
                        </div>                        
                    </div>
                </div>
            </div>
            -->
           
            <div class="container">
                <div class="row">
                    <div class="col-sm-3" style="padding-top: 10px;">
                    	   <!-- SUB MENU -->    
                           <div class="submenu-header">
                           @section('sub-menu-header')
                                @include('cabinet.sub-menu-header')
                           @show 
                           </div>
                           <div class="submenu">
                           @section('sub-menu')
                                @include('cabinet.sub-menu')
                           @show 
                           </div>
                           
                           <div class="submenu">
                           @section('sub-menu-footer')
                                @include('cabinet.sub-menu-footer')
                           @show 
                           </div>
                    </div><!-- col -->
                    <div class="col-sm-9">
                        <div class="elements-section">
                            @if($user->profile->status->id > 2)
                            <!-- <img src="../images/72890-banner1.png" width="100%" height="100%" style="margin-top: 20px;"> -->
                            @endif
                            @if(Session::has('recommendation'))
                            
                            <div class="flash" style="padding-top: 20px;">
                                <div class="alert {{ Session::get('alert-class') }}">                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h3>Поздравляем!</h3>
                                        </div>
                                    <div class="col-sm-6">
                                        <p>Вы успешно заполнили Профиль!</p>
                                    </div>
                                    <div class="col-sm-6">
                                        @if(session()->get('recommendation') == 0)
                                    
                                            {!! Form::open(array('url'=>'cabinet/recommendation', 'method'=>'POST',
                                                'id'=>'comment-form', 'name'=>'comment-form' )) !!}
                                            <fieldset> 
                                            <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                                            <input type="hidden" name="status" id="status" value="0">
                                            <button class="btn-liberty btn-liberty-default" id="submit" type="submit" name="submit">
                                                Получить рекомендацию
                                            </button>
                                            </fieldset> 
                                            {!!Form::close()!!}
                                    
                                        @elseif(session()->get('recommendation') == 1)
                                        
                                            <p>Ожидайте звонка...</p>
                                        
                                        @endif    
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                            @endif
                            <div class="headline style-1 cabinet-content">
                                @yield('content')                        	 
                            </div><!-- headline -->
                        </div>    
                    </div>        
        </div><!-- CONTENT -->
        
        <!-- FOOTER -->
        <footer>
            
            <div id="footer-top">
            	@section('footer-top')
                    @include('front.milo-footer-top')
                @show
                
            </div><!-- footer-top -->
            
            
            <div id="footer">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-3">
                        	
                                                   
                        </div><!-- col -->
                        <div class="col-sm-3">
                        
                        </div><!-- col -->
                        <div class="col-sm-3">
                        
                            
                        </div><!-- col -->
                        <div class="col-sm-3">
                        	                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- footer -->
            
            
            <div id="footer-bottom">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-12">
                        	
                            <div class="widget widget-text">	
                            	
                                <p class="last text-center text-uppercase">&copy; All Rights Reserved <span class="text-primary">Milo</span> 
                                <span class="text-lowercase"> template.</span></p>
                                
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
    <script src="../milo/assets/js/jquery-2.1.3.min.js"></script>
    <!--  <script src="//code.jquery.com/jquery-latest.js"></script> -->
    <script>
        $(window).on('load', function () {
            var $preloader = $('#page-preloader'),
                $spinner   = $preloader.find('.spinner');
            $spinner.fadeOut();
            $preloader.delay(350).fadeOut('slow');
        });
    </script>
    <!-- BOOTSTRAP JS -->
    <script src="../milo/assets/js/bootstrap.min.js"></script>
    
    <!-- VIEWPORT -->
    <script src="../milo/assets/js/viewport/jquery.viewport.js"></script>
    
    <!-- MENU -->
    <script src="../milo/assets/js/menu/hoverIntent.js"></script>
    <script src="../milo/assets/js/menu/superfish.js"></script>
    
    <!-- FANCYBOX
    <script src="../milo/assets/js/fancybox/jquery.fancybox.pack.js"></script>
    
    <!-- REVOLUTION SLIDER -->
    <script src="../milo/assets/js/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="../milo/assets/js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- BxSLIDER -->
    <script src="../milo/assets/js/bxslider/jquery.bxslider.min.js"></script>
    
    <!-- PARALLAX -->
    <script src="../milo/assets/js/parallax/jquery.parallax-scroll.min.js"></script>
    
    <!-- ISOTOPE -->
    <script src="../milo/assets/js/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="../milo/assets/js/isotope/isotope.pkgd.min.js"></script>
    
    <!-- PLACEHOLDER -->
    <script src="../milo/assets/js/placeholders/jquery.placeholder.min.js"></script>
    
    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src="../milo/assets/js/validate/jquery.validate.min.js"></script>
    <script src="../milo/assets/js/submit/jquery.form.min.js"></script>
    
    <!-- GOOGLE MAPS 
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="../milo/assets/js/googlemaps/jquery.gmap.min.js"></script>
    
    <!-- CHARTS -->
    <script src="../milo/assets/js/charts/chart.min.js"></script>
    <script src="../milo/assets/js/charts/jquery.easypiechart.min.js"></script>
    
    <!-- COUNTER 
    <script src="../milo/assets/js/counter/jQuerySimpleCounter.js"></script>
    
	<!-- TWITTER
    <script src="../milo/assets/js/twitter/twitterfetcher.js"></script>
    
    <!-- ANIMATIONS -->
    <script src="../milo/assets/js/animations/wow.min.js"></script>
    
    <!-- CUSTOM JS -->
    <script src="../milo/assets/js/custom.js"></script>
    
    <!-- location JS -->
    <script src="../js/location.js"></script>
    
    <!-- YOUTUBE PLAYER -->
    <script src="../milo/assets/js/ytplayer/jquery.mb.YTPlayer.js"></script>
	
    <!-- jquery.maskedinput.min JS -->
    <script src="../js/jquery.maskedinput.min.js"></script>
    
    <!-- featherlight JS -->
    <script src="../js/featherlight/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    
    <!-- plyr JS -->
    <script src="../js/plyr/dist/plyr.js" type="text/javascript" charset="utf-8"></script>
    
<!--    <script>document.body.oncontextmenu = function (e) { return false; if (e) { e.preventDefault();  } else { event.returnValue = false; } };</script> -->
    <script>
        $(document).ready(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    </script>
    @section('script1')
    @show 
    @section('script3')
    @show 
</body>
    
</html>