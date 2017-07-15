<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="liberty, club, team">
    <meta name="description" content="liberty club site">
    
    <title>Liberty Club :: Ваш аккаунт заблокирован</title>
    
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
</head>

<body>
	<div id="page-wrapper">
        <!-- HEADER -->
        <header>            
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">                        
                        <!-- LOGO -->
                        <a id="logo" href="/">
                            <img src="milo/images/backgrounds/logo.png" alt="">
                        </a>                        
                    </div><!-- col -->
                    <div class="col-sm-10">                      
                        @section('header')
                         
			@show                    
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->                        
        </header><!-- HEADER -->        
            
        <!-- CONTENT -->
        <div class="content"> 
            <section class="full-section parallax" style="background-image:url(milo/images/backgrounds/nature.jpg);">
            	<div class="container">
                    <div class="row">
                        <div class="col-sm-12">                        	
                            <div class="headline style-2">                        	
                                <i class="miu-icon-other_arrow-right_other_outline_stroke"></i>
                                <h2>Ваш аккаунт заблокирован</h2>                                
                                <p>Бокировка аккаунта произведена за нарушение Пользовательского соглашения</p>
                            </div><!-- headline -->
                            <div class="flash">
                                @if ( session()->has('message') )
                                    <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                                @endif
                                @if($errors->any())
                                <div class="alert alert-danger">                                    
                                    <p>{{$errors->first()}}</p>
                                </div>
                                @endif
                            </div>
                          <div class="col-md-offset-2 col-md-8 col-sm-12">
                        
                        @section('register')
                            @include('forms.login')
                        @show  
                        
                        </div><!-- col -->

                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->             	
            </section><!-- full-section -->           
        </div><!-- CONTENT -->
        
        <!-- FOOTER -->
        <footer>
            
            <div id="footer-top">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-12">
                        	
                            <div class="widget widget-social">
                            	
                                <div class="social-media">
                                
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                    <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                                    <a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                    <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                                    <a class="vine" href="#"><i class="fa fa-vine"></i></a>
                                    <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                            	
                                </div><!-- social-media -->    
                            
                            </div><!-- widget-social -->
                            
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
                
            </div><!-- footer-top -->
            
            
            <div id="footer">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-sm-3">
                        	
                            <div class="widget widget-text">
                            	
                                <h3 class="widget-title">About MILO</h3>
                                
                                <p>Lorem ipsum dolor sit amet unde ligula, sodales et quam non, omis finibus eros. Pharetra nulla lactus arcu non, 
                                venenatis orci pharetra. Nunc sed odio a velit placerat sit eget hendrerit elit.</p>
                                
                            </div><!-- widget-text -->
                            
                            <div class="widget widget-newsletter">                        	
                            
                            <form name="newsletter" method="post" action="#">
                            	<fieldset>
                                	<input type="text" name="email" placeholder="Email address">
                                    <input class="btn-liberty btn-liberty-default" type="submit" name="submit" value="">
                                </fieldset>
                            </form>
                            
                            <p>Nemo enim ipsam voluptatem</p>
                            
                        </div><!-- widget-newsletter -->
                        
                        </div><!-- col -->
                        <div class="col-sm-3">
                        	
                            <div class="widget widget-latest-news">
                                
                                <h3 class="widget-title">Latest news</h3>
                                
                                <ul>
                                    <li>
                                        <img src="milo/images/blog/blog-post/news-1.jpg" alt="">
                                        <p class="news-title"><a href="#">Lorem ipsum dolor amet...</a></p>
                                        <p class="news-date">March 05, 2015</p>
                                    </li>
                                    <li>
                                        <img src="milo/images/blog/blog-post/news-2.jpg" alt="">
                                        <p class="news-title"><a href="#">Omis unde tortor lactus...</a>
                                        <p class="news-date">March 04, 2015</p>
                                    </li>
                                    <li>
                                        <img src="milo/images/blog/blog-post/news-3.jpg" alt="">
                                        <p class="news-title"><a href="#">Mauris in orci id placerat...</a>
                                        <p class="news-date">March 03, 2015</p>
                                    </li>
                                </ul>
                                
                            </div><!-- widget-recent-posts -->
                            
                        </div><!-- col -->
                        <div class="col-sm-3">
                        	
                            <div class="widget widget-flickr">
                                
                                <h3 class="widget-title">Flickr</h3>
                                
                                <div class="flickr-photos">
                                    <script src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08"></script>
                                </div><!-- flickr-photos -->
                                
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                deserunt</p>
                                
                            </div><!-- widget-flickr -->
                            
                        </div><!-- col -->
                        <div class="col-sm-3">
                        	
                            <div class="widget widget-contact">
                                
                                <h3 class="widget-title">Contact Us</h3>
                                
                                <ul>
                                    <li>
                                        <span>Address</span>
                                        1713 Hide A Way Road<br>
                                        San Jose, CA 95118
                                    </li>
                                    <li>
                                        <span>Phone &amp; Fax</span>                                    
                                        +408-267-8351<br>
                                        +408-267-8344
                                    </li>
                                    <li>
                                        <span>E-mail</span>
                                        <a href="mailto:support@milo.com">support@milo.com</a>
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
    <script src="milo/assets/js/jquery-2.1.3.min.js"></script>
	
    <!-- BOOTSTRAP JS -->
    <script src="milo/assets/js/bootstrap.min.js"></script>
    
    <!-- VIEWPORT -->
    <script src="milo/assets/js/viewport/jquery.viewport.js"></script>
    
    <!-- MENU -->
    <script src="milo/assets/js/menu/hoverIntent.js"></script>
    <script src="milo/assets/js/menu/superfish.js"></script>
    
    <!-- FANCYBOX -->
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
   
    <!-- YOUTUBE PLAYER -->
    <script src="milo/assets/js/ytplayer/jquery.mb.YTPlayer.js"></script>
    
    <!-- ANIMATIONS -->
    <script src="milo/assets/js/animations/wow.min.js"></script>
    
    <!-- GOOGLE MAPS -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="milo/assets/js/googlemaps/jquery.gmap.min.js"></script>
    
    <!-- CUSTOM JS -->
    <script src="milo/assets/js/custom.js"></script>
</body>
    
</html>