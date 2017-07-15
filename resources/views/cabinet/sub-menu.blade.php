
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="time" class="el el-time" style="font-size: 24px; margin-top: 6px;" title="Мировое время"></a>
    </div>

@if($user->profile->status_id > 1)
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="sponsors" class="fa fa-handshake-o" style="font-size: 24px; margin-top: 6px;"></a>
    </div>
@else
    <div class="milo-square-disabled btn-liberty btn-liberty-white">
        <a href="#" class="fa fa-handshake-o not-active" style="font-size: 24px; margin-top: 6px;"></a>
    </div>
@endif

@if($user->profile->status_id > 1)
    <div class="milo-square btn-liberty btn-liberty-black" id="btn-dialogs">
        <a id="a-btn-dialogs" href="dialogs" class="el el-envelope" style="font-size: 24px; margin-top: 6px;" title="Диалоги"></a>
    </div>
@else
    <div class="milo-square-disabled btn-liberty btn-liberty-white" id="btn-dialogs">
        <a href="#" id="a-btn-dialogs" class="el el-envelope not-active" style="font-size: 24px; margin-top: 6px;" title="Диалоги"></a>
    </div>
@endif

@if($user->profile->status_id > 1)
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="video-0" class="el el-screen" style="font-size: 24px; margin-top: 6px;" title="Видео. Знакомство"></a>
    </div>
@else
    <div class="milo-square-disabled btn-liberty btn-liberty-white">
        <a href="#" class="el el-screen not-active" style="font-size: 24px; margin-top: 6px;" title="Видео. Знакомство"></a>
    </div>
@endif

@if($user->profile->status_id > 2)
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="https://joffice.jeunesseglobal.com/login.asp" class="el el-website" style="font-size: 24px; margin-top: 6px;" title="Бэкофис" target="_blank"></a>
    </div>

    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="https://{{ $user->profile->company_login }}.jeunesseglobal.com/" class="el el-shopping-cart" style="font-size: 24px; margin-top: 6px;" title="Магазин" target="_blank"></a>
    </div>
@else
    <div class="milo-square-disabled btn-liberty btn-liberty-white">
        <a href="#" class="el el-website not-active" style="font-size: 24px; margin-top: 6px;" title="Бэкофис"></a>
    </div>

    <div class="milo-square-disabled btn-liberty btn-liberty-white">
        <a href="#" class="el el-shopping-cart not-active" style="font-size: 24px; margin-top: 6px;" title="Магазин"></a>
    </div>
@endif
<!--
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="#" class="fa fa-list-ul" style="font-size: 24px; margin-top: 6px;"></a>
    </div>
-->
@if($user_abonement)
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="invite" class="fa fa-magnet" style="font-size: 24px; margin-top: 6px;"></a>
    </div>
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="structure" class="el el-network" style="font-size: 24px; margin-top: 6px;" title="Структура"></a>
    </div>
@else
    <div class="milo-square-disabled btn-liberty btn-liberty-white">
        <a href="#" class="fa fa-magnet not-active" style="font-size: 24px; margin-top: 6px;"></a>
    </div>
    <div class="milo-square-disabled btn-liberty btn-liberty-white">
        <a href="#" class="el el-network not-active" style="font-size: 24px; margin-top: 6px;" title="Структура"></a>
    </div>
@endif

<!--
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="#" class="el el-star" style="font-size: 24px; margin-top: 6px;"></a>
    </div>
-->
@if($user->profile->status_id >= 5)
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="calculator" class="fa fa-calculator" style="font-size: 24px; margin-top: 6px;" title="Планировщик"></a>
    </div>
@else
    <div class="milo-square-disabled btn-liberty btn-liberty-white">
        <a href="@" class="fa fa-calculator not-active" style="font-size: 24px; margin-top: 6px;" title="Планировщик"></a>
    </div>
@endif
<!--
    <div class="milo-square btn-liberty btn-liberty-black">
        <a href="#" class="fa fa-bar-chart" style="font-size: 24px; margin-top: 6px;"></a>
    </div>
-->
<hr/>

@section('script3')
<script>
    //notifications
    $(document).ready(function() {
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
        mydata['_token'] = token;           
        mydata['user_id'] = <?php echo $user->id; ?>;           
        
        $.ajax({
		method: "POST",
		url: "./check_updates",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response.newMessages > 0){
                       $('#a-btn-dialogs').addClass('hot');
                    }
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    });
    
    //<a href="#" class="btn btn-default" onclick="$('#search-container').insertBefore('header');$('#search-container').slideDown(200).addClass('open');$('a.search-button').addClass('open');">open</a>
</script>
@endsection