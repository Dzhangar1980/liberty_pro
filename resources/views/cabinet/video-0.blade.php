@extends('layouts.milo-cabinet')
@section('title')
    @parent
@show
@section('content')
    <br><br>
    <h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
        <font color="#11388B">ОЗНАКОМЛЕНИЕ</font>
    </h2>
    <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
        <font color="#658FEA">на чем, как, где и почему сейчас</font>
    </h5>
    <br><br>
    <p align="center" style="font-size: 16px; font-family: Open Sans, Arial, sans-serif; color: #11388B;">
        <b>Часть 1. ВВОДНАЯ</b><br/> 
    </p>
    <div class="videoWrapper">
        <video id="myVideo1" class="liberty-video"  width="640" height="480" class="note-video-clip" allowfullscreen></video>
    </div>
    
    <div style="display: none;" id="divMyVideo2">
        <br>
	<p align="center" style="font-family: Open Sans, Arial, sans-serif; color: #11388B;">
                <span style="font-size: 16px;">
                    <b>
                    Часть 2. ВИДЫ ДОХОДОВ и КВАЛИФИКАЦИИ
                    </b>
                    <br/>
                </span>
            </p>
        <div class="videoWrapper">
            <video id="myVideo2" class="liberty-video" width="640" height="480" class="note-video-clip" allowfullscreen></video>
        </div>
    </div>
    <hr/>
    <div id="after" style="align-content: center; display: none;">
        <br/>
        <a href="after" class="btn-liberty btn-liberty-black">
            Click me for going to next step!...
        </a>
    </div>
@endsection

@section('script1')
 <script>
    var trigger = 0;

    $(document).ready(function() {

        $(".liberty-video").bind("contextmenu",function(){
            return false;
        });
        
        document.addEventListener("DOMContentLoaded", function() { 
                initialiseMediaPlayer(); 
            }, false);

        $("video").bind("contextmenu",function(){
            return false;
        });
        
        var controls = ["<div class='plyr__controls'>",
            "<button type='button' data-plyr='restart'>",
                "<svg><use xlink:href='#plyr-restart'></use></svg>",
                "<span class='plyr__sr-only'>Restart</span>",
            "</button>",
            "<button type='button' data-plyr='rewind'>",
                "<svg><use xlink:href='#plyr-rewind'></use></svg>",
                "<span class='plyr__sr-only'>Rewind {seektime} secs</span>",
            "</button>",
            "<button type='button' data-plyr='play'>",
                "<svg><use xlink:href='#plyr-play'></use></svg>",
                "<span class='plyr__sr-only'>Play</span>",
            "</button>",
            "<button type='button' data-plyr='pause'>",
                "<svg><use xlink:href='#plyr-pause'></use></svg>",
                "<span class='plyr__sr-only'>Pause</span>",
            "</button>",
            "<span class='plyr__time'>",
                "<span class='plyr__sr-only'>Current time</span>",
                "<span class='plyr__time--current'>00:00</span>",
            "</span>",
            "<span class='plyr__time'>",
                "<span class='plyr__sr-only'>Duration</span>",
                "<span class='plyr__time--duration'>00:00</span>",
            "</span>",
            "<button type='button' data-plyr='mute'>",
                "<svg class='icon--muted'><use xlink:href='#plyr-muted'></use></svg>",
                "<svg><use xlink:href='#plyr-volume'></use></svg>",
                "<span class='plyr__sr-only'>Toggle Mute</span>",
            "</button>",
            "<span class='plyr__volume'>",
                "<label for='volume{id}' class='plyr__sr-only'>Volume</label>",
                "<input id='volume{id}' class='plyr__volume--input' type='range' min='0' max='10' value='5' data-plyr='volume'>",
                "<progress class='plyr__volume--display' max='10' value='0' role='presentation'></progress>",
            "</span>",
            "<button type='button' data-plyr='captions'>",
                "<svg class='icon--captions-on'><use xlink:href='#plyr-captions-on'></use></svg>",
                "<svg><use xlink:href='#plyr-captions-off'></use></svg>",
                "<span class='plyr__sr-only'>Toggle Captions</span>",
            "</button>",
            "<button type='button' data-plyr='fullscreen'>",
                "<svg class='icon--exit-fullscreen'><use xlink:href='#plyr-exit-fullscreen'></use></svg>",
                "<svg><use xlink:href='#plyr-enter-fullscreen'></use></svg>",
                "<span class='plyr__sr-only'>Toggle Fullscreen</span>",
            "</button>",
        "</div>"].join("");

        // Setup the player
        var players = plyr.setup('.liberty-video', {
                html: controls
            });
        
        players[0].source({
            type:       'video',
            title:      'Example title 1',
            sources: [{
                src:    '../storage/videos/10seconds.mp4',
                type:   'video/mp4'
            }],
            poster:     '../images/video-poster.jpg',
            tracks:     [{
                kind:   'captions',
                label:  'Русский',
                srclang:'ru',
                src:    '../storage/videos/captions/10seconds.vtt',
                default: true
            }]
      });
      
      players[1].source({
            type:       'video',
            title:      'Example title 1',
            sources: [{
                src:    '../storage/videos/tankomahach4.mp4',
                type:   'video/mp4'
            }],
            poster:     '../images/video-poster.jpg',
            tracks:     [{
                kind:   'captions',
                label:  'Русский',
                srclang:'ru',
                src:    '../storage/videos/captions/tankomahach4.vtt',
                default: true
            }]
      });
                
        <?php 
        if($videos != Null){ 
            if($videos->video1 > 0){ 
                echo '$("#divMyVideo2").show();';
            } 
            if($videos->video2 > 0){ 
                echo '$("#after").show();';
            } 
        } 
        ?>
           
        players[0].on('ready', function(event) {
            this.addEventListener("ended", video1Ended, false);
            //var instance = event.detail.plyr;
            //console.log(event);
        });
           
        players[1].on('ready', function(event) {
            this.addEventListener("ended", video2Ended, false);
            //var instance = event.detail.plyr;
            //console.log(event);
        });
          
        
   } );
    
    function video1Ended(){
        $("#divMyVideo2").show();
        timeUpdate(1);
        console.log('ended video 1');
    }
    
    function video2Ended(){
        $("#after").show();
        timeUpdate(2);
        console.log('ended video 2');
    }
   
    function initialiseMediaPlayer() {
       $('video').controls = false;
    }
 
    function timeUpdate(id) {
        var procent = 100;
        
        //ajax saving user progress video view
        
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['video'] = id;           
        mydata['progress'] = procent;
        mydata['user_id'] = <?php echo $user->id; ?>;
            $.ajax({
                    method: "POST",
                    url: "./save_video_progress",
                    cache: false,
                    data: mydata,
                    dataType: 'json', 
                    success: function (response) {
                        console.log(response);                        
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
            });
    }

</script>
@endsection

