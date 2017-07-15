@extends('layouts.milo-cabinet')
@section('content')
<h2>{{ $libertyUser->name }} {{ $libertyUser->family }}</h2>
    
<div class="net_owner">
    <div class="row">    
        <div class="col-sm-3">
            <div class="icon_set left_part">
                @if($libertyUser->video)
                <?php $opacity1 = $libertyUser->video->video1/100; ?>
                <?php $opacity2 = $libertyUser->video->video2/100; ?>
                <div class="video_active" style="opacity: {{ $opacity1 }};">
                    <i class="fa fa-play" title="Видео 1 просмотрено {{ number_format($opacity1*100, 0) }}%"></i>
                </div>
                <div class="video_active" style="opacity: {{ $opacity2 }};">
                    <i class="fa fa-play" title="Видео 2 просмотрено {{ number_format($opacity2*100, 0) }}%"></i>
                </div>
                @endif
            </div>
            
            <div class="icon_set right_part">                                   
                <a href="./user?id={{ $libertyUser->id }}&task=notes" class="popup" title="Заметки" data-text="Заметки">
                    <i class="fa fa-thumb-tack"></i>
                </a>
                <a href="./personal_messages?tuid={{ $libertyUser->id }}&uid={{ $user->id }}" target="_blank" class="popup" title="Сообщения" data-text="Сообщения">
                    <i class="el el-envelope"></i>
                </a>
                
                <form name="net{{ $libertyUser->id }}" method="post" action="structure">
                    {{ csrf_field() }}
                    <input type="hidden" name="net_owner_id" value="{{ $libertyUser->id }}">
                    <a href="#" class="popup" title="Сеть" data-text="Сеть" 
                       onclick="document.forms['net{{ $libertyUser->id }}'].submit();">
                           <i class="el el-network"></i>
                    </a>
                </form>
                
            </div>
            
            <a href="" class="photo_box"><img src="../images/users/avatars/{{ $libertyUser->profile->photo }}" alt="img"></a>
            <div class="name_box">
                    <div class="qualification_box">
                        @if($libertyUser->profile->company_status == 2)
                            @if($libertyUser->profile->company_pack != 0 && $libertyUser->profile->company_pack_confirmed != 0)
                                @if($libertyUser->profile->company_pack == 1)
                                    <?php $pack_logo = "basic"; ?>
                                @endif
                                @if($libertyUser->profile->company_pack == 2)
                                    <?php $pack_logo = "supreme"; ?>
                                @endif
                                @if($libertyUser->profile->company_pack == 3)
                                    <?php $pack_logo = "jumbo"; ?>
                                @endif
                                @if($libertyUser->profile->company_pack == 4)
                                    <?php $pack_logo = "ambassador"; ?>
                                @endif
                                @if($libertyUser->profile->company_pack == 5)
                                    <?php $pack_logo = "jumbo1"; ?>
                                @endif
                                @if($libertyUser->profile->company_pack == 6)
                                    <?php $pack_logo = "founder"; ?>
                                @endif
                                @if($libertyUser->profile->company_pack == 7)
                                    <?php $pack_logo = "pres_founder"; ?>
                                @endif
                                <div class="qualification" 
                                style="background-image: url(../images/packs/{{ $pack_logo }}.png);"></div>
                            @endif
                        @else
                            <div class="qualification" 
                             style="background-image: url(../images/qualifications/{{ $libertyUser->profile->company_status }}.png);"></div>
                        @endif
                        
                    </div>
                <a href="">
                    <div class="net_owner_name">{{ $libertyUser->name }}<br/>{{ $libertyUser->family }}</div>
                </a>
            </div>
            <div class="online">
            @if($libertyUser->isOnline())
                <span class="fa fa-circle" style="font-size: 16px;color: lime;"></span>
            @else
               <!-- <span class="fa fa-circle" style="font-size: 20px;color: red;"></span> -->
            @endif
            </div>
            
        </div>
        <div class="col-sm-4">
            <p>
                <span class="fa fa-map-marker"> {{ $libertyUser->profile->mycity->country['country_name_ru'] }},  {{ $libertyUser->profile->mycity->city_name_ru }}</span>
                <br><span class="fa fa-envelope-o"> {{ $libertyUser->email }}</span>
                <br><span class="fa fa-skype"> {{ $libertyUser->profile->skype }}</span>
                @if($libertyUser->profile->phones)
                    @foreach($libertyUser->profile->phones as $phone)
                        <br><span class="fa fa-phone"> {{ $phone->number }} 
                        @if($phone->viber == 1)
                            <img src="../images/viber-50x50.png" width="18px" height="18px">
                        @endif
                        @if($phone->whatsapp == 1)
                            <img src="../images/whatsapp-50x50.png" width="18px" height="18px">
                        @endif</span>
                    @endforeach
                @endif
            </p>            
        </div>
        <div class="col-sm-5">
            <p>
                <span class="fa fa-sign-in"> Дата регистрации: {{ date("d.m.Y г.", strtotime($libertyUser->created_at)) }}</span>
                <br><span class="fa fa-calendar-o"> Посл. посещение: {{ date("d.m.Y г.", strtotime($libertyUser->updated_at)) }}</span>
                <br><img src="../images/logoliberty/jlogo.png" width="15px" height="20px"> {{ $libertyUser->profile->company_login }}
                @if($libertyUser->profile->pack)
                <br><img src="../images/logoliberty/jlogo.png" width="15px" height="20px"> {{ $libertyUser->profile->pack->name }}
                @endif
                <br><span class="fa fa-handshake-o"> Спонсор: 
                    <a href="./user?id={{ $libertyUser->profile->mysponsor->id }}">
                        {{ $libertyUser->profile->mysponsor->name }} {{ $libertyUser->profile->mysponsor->family }} 
                    </a>
            </p>
            
            <p>
                @if($libertyUser->profile->fb_id == NULL)
                    <span class="btn fa fa-facebook" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                @else
                    <a href="{{ $libertyUser->profile->fb_id }}" class="btn fa fa-facebook" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                    </a>
                @endif
                    
                @if($libertyUser->profile->vk_id == NULL)
                    <span class="btn fa fa-vk" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                @else
                    <a href="{{ $libertyUser->profile->vk_id }}" class="btn fa fa-vk" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                    </a>
                @endif

                @if($libertyUser->profile->ok_id == NULL)
                    <span class="btn fa fa-odnoklassniki" aria-hidden="true" style="color: #000; font-size: 13px;"></span>
                @else
                    <a href="{{ $libertyUser->profile->ok_id }}" class="btn fa fa-odnoklassniki" target="_blank" aria-hidden="true" style="color: #337ab7; font-size: 13px;">
                    </a>
                @endif
            </p>            
        </div>
    </div>
</div>
    <hr>
    <h4>О себе</h4>
    {!! $libertyUser->profile->notes !!}
    <hr>
    @if($task)
        @if($task == 'notes')
        <h4>Заметки | <span class="btn-liberty btn-liberty-white" onclick="$('#addNote').show()">Новая заметка</span></h4>
        <br/><br/>
        <div id="addNote" style="display: none;">
        {!! Form::open(array('url'=>'cabinet/postNote', 'method'=>'POST')) !!}
        <fieldset>              
        {!!Form::text('title',null, array('placeholder'=>'Заголовок','id'=>'title', 'required'=>'required','class'=>'form-control'))!!}
        {!! $errors->first('title','<p class="alert alert-danger">:message</p>')!!}
        
        {!!Form::textarea('note',null, array('placeholder'=>'Заметка','id'=>'note', 'required'=>'required', 'class'=>'form-control'))!!}
        {!! $errors->first('note','<p class="alert alert-danger">:message</p>')!!}
        <hr/>
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <input type="hidden" name="target_id" value="{{ $libertyUser->id }}">
        <button class="btn-liberty btn-liberty-black" id="submit" type="submit" name="submit">Сохранить</button>
        <span class="btn-liberty btn-liberty-white" onclick="$('#addNote').hide()">Закрыть</span>
        </fieldset> 
        {!!Form::close()!!}
        </div>
        <hr/>
            @if(count($notes) == 0)
                <p>Заметки отсутствуют</p>
            @else                
                @foreach($notes as $note)
                    @if($note->target_id == $libertyUser->id)
                    <div class="row">
                    <div class="col-sm-4">
                        <p><?php echo date('d.m.Y г. H:i ч.', strtotime($note->updated_at)) ?></p>
                    </div>
                    <div class="col-sm-8">
                        <p class="note-title" onclick="$('#note-body{{ $note->id }}').show()">{{ $note->title }}</p>                        
                    </div>
                    <div class="col-sm-12">
                        <div class="note-body" id="note-body{{ $note->id }}">
                            {{ $note->note }}
                        </div>
                    </div>
                        
                    </div>
                    <hr/>
                    @endif
                @endforeach
            @endif
            <hr/>
        @elseif($task == 'stats')
            <h4>Статистика</h4>
        @elseif($task == 'net')
            <h4>Сеть</h4>
        @elseif($task == 'messages')
            <h4>Сообщения</h4>
            <div class="messages">
                
            </div>
            <div class="message">
                <table width="100%" border="0">
                    <tr>
                        <td width='310px'>
                            <input type="text" id="message_text" name="message_text" width="300px" style="width: 300px;">
                        </td>
                        <td>
                            <span class="fa fa-send-o"></span>
                        </td>
                    </tr>
                </table>
            </div>
            
        @endif
    @endif
@endsection
