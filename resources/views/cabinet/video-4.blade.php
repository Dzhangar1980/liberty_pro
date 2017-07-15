@extends('layouts.milo-cabinet')
@section('title')
    <title>PRO тренинги</title>
@show
@section('content')
    <div class="elements-section" id="tabs">
    <div class="headline style-1">
	<br>
        <h2 align="center"><font color="#11388B">Бизнес тренинги</font></h2>
    </div><!-- headline -->           
    @if($user->profile->status->id >= 5 && $user_abonement)
    
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Дистрибьютор</a></li>
        <li><a href="#tab2" data-toggle="tab">Специалист</a></li>
        <li><a href="#tab3" data-toggle="tab">Нефрит</a></li>
        <li><a href="#tab4" data-toggle="tab">Жемчуг</a></li>
        <li><a href="#tab5" data-toggle="tab">Сапфир</a></li>
    </ul>                                            
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
        @if($user->profile->status->id >= 5 && $user_abonement)
        <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#3367D6">С чего начать</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Первые шаги в бизнесе</font>
            </h5>
            <br>
            <div class="videoWrapper">
                <video class="liberty-video" width="640" height="480" controls allowfullscreen>
                    <source src="../storage/videos/tankomahach4.mp4" type="video/mp4">
                </video>
            </div>
            <br>
            <br>
            <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#3367D6">Доктор Агапкин</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">О ресвератроле на ТВ</font>
            </h5>
            <br>
            <div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/-Ke_VEeHlNY" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
            </div>
            <br>
            <br>
            <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#952181">RESERVE</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#c784bb">Смотрите другие видео по теме</font>
            </h5>
            <br>
            <div class="elements-section" id="accordion">
						<div class="panel-group" id="accordion-2">
									<div class="panel">
										<div class="panel-heading">
											
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse4" aria-expanded="false" class="collapsed">Ягода Асаи - компонент RESERVE</a>
											</h4>
										
										</div><!-- panel-heading -->    
										<div id="collapse4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
											  	<p style="font-size: 14px; text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
													АНТИОКСИДАНТЫ ПРОТИВОДЕЙСТВУЮТ ОКСИДАТИВНОМУ СТРЕССУ И ПРЕЖДЕВРЕМЕННОМУ СТАРЕНИЮ
													<br><br>
												</p>
												<div class="videoWrapper">
												<iframe frameborder="0" src="//www.youtube.com/embed/-Ke_VEeHlNY" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
												</div>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									
									<div class="panel">   
										<div class="panel-heading">
											
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse5" class="collapsed" aria-expanded="false">Ингредиенты</a>
											</h4>
										
										</div><!-- panel-heading -->   
										<div id="collapse5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
											<div class="panel-body">
												<p style="font-size: 14px; text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
													АНТИОКСИДАНТЫ ПРОТИВОДЕЙСТВУЮТ ОКСИДАТИВНОМУ СТРЕССУ И ПРЕЖДЕВРЕМЕННОМУ СТАРЕНИЮ
													<br><br>
												</p>
												<div class="videoWrapper">
												<iframe frameborder="0" src="//www.youtube.com/embed/-Ke_VEeHlNY" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
												</div>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
									
									<div class="panel">
										<div class="panel-heading">
											
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-2" href="#collapse6" class="collapsed" aria-expanded="false">Применение</a>
											</h4>
										
										</div><!-- panel-heading -->
										<div id="collapse6" class="panel-collapse collapse" aria-expanded="false">
											<div class="panel-body">
												<p style="font-size: 14px; text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
													АНТИОКСИДАНТЫ ПРОТИВОДЕЙСТВУЮТ ОКСИДАТИВНОМУ СТРЕССУ И ПРЕЖДЕВРЕМЕННОМУ СТАРЕНИЮ
													<br><br>
												</p>
												<div class="videoWrapper">
												<iframe frameborder="0" src="//www.youtube.com/embed/-Ke_VEeHlNY" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
												</div>
											</div><!-- panel-body -->
										</div><!-- panel-collapse -->  
									</div><!-- panel -->
								</div><!-- accordion 2 -->
															
				</div><!-- elements-section -->
	@else
        <h4>Страница доступна только VIP-Дистрибьютору и выше</h4>
        @if(!$user_abonement)
            <h4>Ваша Клубная карта не активна.</h4>
            <br/>
            <a href="balance"><button class="btn-liberty btn-liberty-black">Активировать</button></a>
        @endif   
    @endif							
	</div><!-- tab-pane -->
        <div class="tab-pane fade" id="tab2">
        @if($user->profile->status->id >= 6 && $user_abonement)
            <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Уильям Амзаллаг</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Доктор медицинских наук о Luminesce</font>
            </h5>
			<br>
            <div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/_T5zrb3h9PE" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
            </div>
            <br>
            <br>
            <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">Натан Ньюман</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">Доктор медицинских наук создатель Luminesce</font>
            </h5>
            <br>
            <div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/d2JCHUHKHnA" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
            </div>
            <br>
        @else
            <h4>Страница доступна только VIP-Специалисту и выше</h4>
            @if(!$user_abonement)
                <h4>Ваша Клубная карта не активна.</h4>
                <br/>
                <a href="balance"><button class="btn-liberty btn-liberty-black">Активировать</button></a>
            @endif   
        @endif   
        </div><!-- tab-pane2 -->
      
        <div class="tab-pane fade" id="tab3">
            @if($user->profile->status->id >= 7 && $user_abonement)
            <p>gdhf</p>
            @else
                <h4>Страница доступна только VIP-Нефриту и выше</h4>
                @if(!$user_abonement)
                    <h4>Ваша Клубная карта не активна.</h4>
                    <br/>
                    <a href="balance"><button class="btn-liberty btn-liberty-black">Активировать</button></a>
                @endif   
            @endif   
        </div><!-- tab-pane3 -->
        
        <div class="tab-pane fade" id="tab4">
            @if($user->profile->status->id >= 8 && $user_abonement)
            <p>gdhf</p>
            @else
                <h4>Страница доступна только VIP-Жемчугу и выше</h4>
                @if(!$user_abonement)
                    <h4>Ваша Клубная карта не активна.</h4>
                    <br/>
                    <a href="balance"><button class="btn-liberty btn-liberty-black">Активировать</button></a>
                @endif   
            @endif   
        </div><!-- tab-pane4 -->
        
        <div class="tab-pane fade" id="tab5">
            @if($user->profile->status->id >= 9 && $user_abonement)
            <h3 style="font-family: Open Sans, Arial, sans-serif;">
                <font color="#3367D6">Тысячи людей уже достигли Успеха с нами! И мы только начали ....</font>
            </h3>
        <br> 
	<div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/PREymKmP0rw" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
        </div>
       	<br/>
	<h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
            <font color="#658FEA">JEUNESSE GLOBAL является мировым лидером в индустрии с оборотом в 300 млрд $ и первооткрывателем направления рынка антивозрастных технологий.</font>
        </h5>
        <p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            По экономическим прогнозам, рынок борьбы со старением в 2025 году составит $ 1 трлн долларов. Мы делаем то, что ранее не делал никто и никогда. А значит
			у вас есть возможность быть впереди планеты на этом перспективном поприще.
			В самом первоначальном этапе развития, мы уже получили блестящий глобальный успех!
			Мы - без преувеличений и официально, самая быстрорастущая компания в мире, которая помогла тысячам людей по всему миру добиться успеха..<br>
			</span>
			</p>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
			<span style="font-size: 14px;">
            -  Мы сделали продаж более чем на 1 млрд $ по всему миру всего за 5 с небольшим лет.<br>
			-  Выплатили комиссионных вознаграждений дистрибьюторам на сумму более, чем 700 млн $.<br> 
			-  Товарооборот каждый год в среднем увеличивается в два и более раз.<br>
			-  Мы сделали для вас возможным, ведение бизнеса в 145 странах. Тем не менее, большинство людей еще никогда не слышали о нас.<br>
			</span>
			</p>   
			<h5 align="center" style="font-family: Open Sans, Arial, sans-serif"></h5>
            <font color="#658FEA">Этот бизнес может изменить и улучшить вашу жизнь, как это произошло с теми, 
			кто уже присоединился к Jeunesse.</font>
			<br> 
			<br>
			<div class="videoWrapper">
                <iframe frameborder="0" src="//www.youtube.com/embed/gMRDPhWyG0A" width="640" height="360" class="note-video-clip" allowfullscreen></iframe>
				
			</div>
            @else
                <h4>Страница доступна только VIP-Сапфиру и выше</h4>
                @if(!$user_abonement)
                    <h4>Ваша Клубная карта не активна.</h4>
                    <br/>
                    <a href="balance"><button class="btn-liberty btn-liberty-black">Активировать</button></a>
                @endif   
            @endif   
        </div><!-- tab-pane5 -->
    </div><!-- tab-content -->
    
    @else
        <h4>Страница доступна только VIP</h4>
        @if(!$user_abonement)
            <h4>Ваша Клубная карта не активна.</h4>
            <br/>
            <a href="balance"><button class="btn-liberty btn-liberty-black">Активировать</button></a>
        @endif   
    @endif
</div>    
@endsection

@section('script1')
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
    options = '';
    plyr.setup('.liberty-video', options);
    
    $(".liberty-video").bind("contextmenu",function(){
        return false;
    });
    document.addEventListener("DOMContentLoaded", function() { initialiseMediaPlayer(); }, false);
    
});

function initialiseMediaPlayer() {
   $('video').controls = false;
}
</script>
@endsection