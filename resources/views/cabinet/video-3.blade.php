@extends('layouts.milo-cabinet')

@section('content')
    <div class="elements-section" id="accordion">
        <div class="headline style-1">
            <h2>Видео Дистрибьюторам</h2>
        </div><!-- headline -->
        @if($user->profile->status->id >= 4 && $user_abonement)
        <div class="panel-group" id="accordion-2">
            
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse1" aria-expanded="true">Video 1</a>
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
                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse2">Video 2</a>
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
                        <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse3">Video 3</a>
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
        <h4>Страница доступна Дистрибьюторам и выше</h4>
        @if(!$user_abonement)
            <h4>Ваша Клубная карта не активна.</h4>
            <br/>
            <a href="balance"><button class="btn-liberty btn-liberty-black">Активировать</button></a>
        @endif   
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