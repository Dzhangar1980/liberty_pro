@extends('layouts.milo-cabinet')

@section('content')
    <div class="elements-section" id="accordion">
        <div class="headline style-1">
            <br>
	<br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#5C47A2">ПОГРУЖЕНИЕ в PROФЕССИЮ</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#5B36D9">основные аспекты индустрии и бизнеса</font>
            </h5>
            <br> 
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
            Если Вам открылся этот раздел, значит Вы уже прошли этап знакомства с возможностоями и хотите разобраться дальше.
			В этом разделе мы постараемся разобрать основные моменты, ожидающие Вас на дальнейшем пути. Познакомимся с индустрией
			прямых продаж, научимся отличать финансовые пирамиды от надежных компаний, а также оценивать перспективность и прибыльность
			тех или иных проектов.</span>
		</p>
        </div><!-- headline -->
        @if($user->profile->status->id >= 2)
        <div class="panel-group" id="accordion-2">            
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse1" aria-expanded="true">Индустрия прямых продаж</a>
                    </h4>
                </div><!-- panel-heading -->    
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="col-sm-6">
                            <div class="videoWrapper">
                                <video class="liberty-video" width="640" height="480" controls allowfullscreen>
                                    <source src="../storage/videos/tankomahach4.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p>Phasellus rhoncus non mi. Donec vitae orci nunc. </p>
                        </div>
                    </div><!-- panel-body -->
                </div><!-- panel-collapse -->  
            </div><!-- panel -->
                                
            <div class="panel">   
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse2">Возражения и препятствия</a>
                    </h4>
                </div><!-- panel-heading -->   
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="videoWrapper">
                                <video class="liberty-video" width="640" height="480" controls allowfullscreen>
                                    <source src="../storage/videos/tankomahach4.mp4" type="video/mp4">
                                </video>
                            </div>
                    </div><!-- panel-body -->
                </div><!-- panel-collapse -->  
            </div><!-- panel -->
                                
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse3">Цели и их достижение</a>
                    </h4>
                </div><!-- panel-heading -->
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Aenean malesuada condimentum nisl, eu posuere leo porta sodales. Quisque semper faucibus nisl in maximus. 
                        Morbi blandit eget risus ut aliquam. Fusce eget faucibus est, at molestie ex felis mi.</p>
                    </div><!-- panel-body -->
                </div><!-- panel-collapse -->  
            </div><!-- panel -->
                                
        </div><!-- accordion -->
        @else
        <h4>Страница доступна Новичкам и выше</h4>
        @endif
    </div><!-- elements-section -->
                                    
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