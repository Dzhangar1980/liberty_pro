@extends('layouts.milo-cabinet')
@section('content')
    <h2>Требуется подтверждение</h2>
    <div class="row">
   
    @if(count($data) > 0)
    @foreach($data as $partner)
    <div class="col-sm-12">
    <div class="comment-body">
        <div class="comment-meta">
            <div class="comment-author vcard">
                <img class="avatar avatar-80 photo" src="../images/users/avatars/{{ $partner->photo }}" alt="" height="80" width="80" align="left">
                <b>{{ $partner->user->name }} {{ $partner->user->family }}</b> 
                @if($partner->company_login_confirmed == 1)
                <br><img src="../images/logoliberty/jlogo.png" width="15px" height="20px"> 
                {{ $partner->company_login }}
                <hr>
                @endif
            </div><!-- comment-author vcard -->
            <div class="comment-metadata"></div><!-- comment-metadata -->
                                        
        </div><!-- comment-meta --> 
                                    
        <div class="comment-content" id="comment-body2">
            <i>Спонсор: {{ $partner->mysponsor->name }} {{ $partner->mysponsor->family }} </i> 
            <br/>
            
            @if($partner->company_login_confirmed == 0 && $partner->company_login != Null)
            <div class="row"> 
                <div class="col-sm-6 blockquote-reverse">Логин: {{ $partner->company_login }} </div>
                <div class="col-sm-3 blockquote-reverse">
                    <form method="POST" action="">  
                        {{ csrf_field() }} 
                        <input type="hidden" name="company_login_confirmed" value="1">
                        <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                        <button>Подтвердить</button>
                    </form></div>
            </div>
            @endif
            
            @if($partner->company_status_confirmed == 0 && $partner->company_status != Null)
            <div class="row"> 
                <div class="col-sm-6 blockquote-reverse">Квалификация: {{ $partner->qualification->name }} </div>
                <div class="col-sm-3 blockquote-reverse">
                    <form method="POST" action="">  
                        {{ csrf_field() }} 
                        <input type="hidden" name="company_status_confirmed" value="1">
                        <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                        <button>Подтвердить</button>
                    </form></div>
            </div>
            @endif
            
            @if($partner->company_pack_confirmed == 0 && $partner->company_pack != Null)
            <div class="row"> 
                <div class="col-sm-6 blockquote-reverse">Пакет: {{ $partner->pack['name'] }} </div>
                <div class="col-sm-3 blockquote-reverse">
                    <form method="POST" action="">  
                        {{ csrf_field() }} 
                        <input type="hidden" name="company_pack_confirmed" value="1">
                        <input type="hidden" name="partner_id" value="{{ $partner->id }}">
                        <button>Подтвердить</button>
                    </form></div>
            </div>
            @endif
        </div><!--  comment-content -->
    </div>
       
    </div>
    @endforeach
    @else
    <div class="row">
        <hr/>
        <div class="col-sm-4" style="align-content: center">
        </div>
        <div class="col-sm-4" style="align-content: center">
        <h3>Никому</h3>
        </div>
        <div class="col-sm-4" style="align-content: center">
        </div>
    </div>
    @endif
    </div>
@endsection
