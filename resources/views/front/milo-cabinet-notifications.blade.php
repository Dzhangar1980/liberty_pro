@if(isset($notifications))
        @foreach($notifications as $notify)
        <p id='notify{{ $notify->id }}' style="background-color: yellow;">
                <i class="fa fa-check"></i>&nbsp;
                {{ date('d.m.Y H:i ', strtotime($notify->created_at)) }} - {!! $notify->text !!}
                &nbsp;<button onclick="closeNotify({{ $notify->id }})" class="btn btn-info">x</button>
            </p>
                
        @endforeach
@endif

@section('script3')
    @parent
    <script>
        @if(count($notifications)>0)
            $(document).ready(function() {
               $('#search-container').insertBefore('header');
               $('#search-container').slideDown(200).addClass('open');
               $('a.search-button').addClass('open'); 
            });
                
        @endif
        
        function closeNotify(notify_id){
            
            var token  = $('meta[name=_token]').attr('content');
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
            var mydata = {};
            mydata['_token'] = token;           
            mydata['notify_id'] = notify_id;           

            $.ajax({
                    method: "POST",
                    url: "./close_notify",
                    cache: false,
                    data: mydata,
                    dataType: 'json', 
                    success: function (response) {
                        $('#notify'+notify_id).hide();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
            });
        }
    </script>

@endsection