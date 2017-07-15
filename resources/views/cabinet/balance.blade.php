@extends('layouts.milo-cabinet')
@section('content')
    <div class="elements-section" id="tabs">
        <div class="headline style-1">
            <br>
			<h2 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#11388B">БАЛАНС</font>
            </h2>
            <h5 align="center" style="font-family: Open Sans, Arial, sans-serif">
                <font color="#658FEA">будьте в команде лучших</font>
            </h5>
            <br>
			<p style="text-align: justify; font-family: Open Sans, Arial, sans-serif; color: rgb(0, 0, 0); line-height: 1.5;">
            <span style="font-size: 14px;">
			КЛУБНАЯ КАРТА - условное обозначение состояния Вашего абонемента для доступа в Клуб. Если абонемент оплачен, Клубная карта активна
			и Вы можете пользоваться всеми функциями предоставляемыми сайтом Клуба, согласно Вашему статусу в Клубе.<br>
			ТРАФИК - вкладка, где Вы сможете оплатить доступное Вам количество посетителей сайта, привлеченных администрацией Клуба, для принятия 
			их в качестве Ваших Гостей, которые впоследствии могут стать Вашими Партнерами. Функция доступна участникам Клуба со статусом VIP. 
			</span></p>
		</div><!-- headline -->                                                                            
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-2-1" data-toggle="tab" aria-expanded="true">Клубная карта</a></li>
            <li class=""><a href="#tab-2-2" data-toggle="tab" aria-expanded="false">Трафик</a></li>
        </ul>                                            
                        
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tab-2-1">

                @foreach($goods as $good)
                <div class="col-sm-3">
                    <div class="widget widget-text">
                        <h3 class="widget-title">{{ $good->title }}</h3>
                        <div>
                            <p>Клубная карта на <br/><b>{{ $good->days }}</b> дней.</p>
                            {!! Form::open(array('url'=>'https://money.yandex.ru/quickpay/confirm.xml',
                            'method'=>'POST', 'id'=>'clubcart-form', 'name'=>'clubcart-form', 'target'=>'_blank' )) !!}
                            <input name="quickpay-form" value="small" type="hidden">
                            <input name="formcomment" value="libertyclub.pro" type="hidden">
                            <input name="is-inner-form" value="true" type="hidden">
                            <input name="paymentType" value="AC" type="hidden">
                            <input name="receiver" value="41001406576846" type="hidden">
                            <input name="targets" value="Клубная карта на {{ $good->days }} дней" type="hidden">
                            <input name="sum" value="{{ $good->price }}" type="hidden">
                            <input name="successURL" value="liberty.dev/cabinet" type="hidden">
                            <input name="label" value="u{{ $user->id }}g{{ $good->id }}" type="hidden">
                            <input name="referer" value="http://liberty.dev/cabinet/balance" type="hidden">
                            <input name="need-email" value="false" type="hidden">
                            <input name="need-fio" value="false" type="hidden">
                            <input name="need-phone" value="false" type="hidden">
                            <input name="need-address" value="false" type="hidden">
                            <button class="btn-liberty btn-liberty-black">{{ $good->price }} рублей</button>
                            {!!Form::close()!!} 
                        </div>
                    </div><!-- widget-text -->
                </div>
                @endforeach     
            </div><!-- tab-pane -->
            
            <div class="tab-pane fade" id="tab-2-2">
                <div class="col-sm-6">
                    <form name="buyLids" action="buyLids" method="POST">
                        {{ csrf_field() }}
                        <input type="number" name="count" value="1">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="submit" value="Buy">
                    </form>
                    <div class="widget widget-text">
                        <h3 class="widget-title">Покупка Лидов</h3>
                            <p>Цена 1 Лида: <b>1.00 руб.</b></p>
                            {!! Form::open(array('url'=>'https://money.yandex.ru/quickpay/confirm.xml',
                            'method'=>'POST', 'id'=>'clubcart-form', 'name'=>'clubcart-form', 'target'=>'_blank' )) !!}
                            <input type="range" name="count" id="count" min="1" max="10" step="1" value="1" onchange="changeCount()">
                            <br/>
                            <input name="formcomment" value="libertyclub.pro" type="hidden">
                            <input name="quickpay-form" value="small" type="hidden">
                            <input name="is-inner-form" value="true" type="hidden">
                            <input name="paymentType" value="AC" type="hidden">
                            <input name="receiver" value="41001406576846" type="hidden">
                            <input id="targets" name="targets" value="Покупка 1 Лид(ов) за 100 рублей" type="hidden">
                            <input id="sum" name="sum" value="1" type="hidden">
                            <input name="successURL" value="liberty.dev/cabinet" type="hidden">
                            <input id="label" name="label" value="u{{ $user->id }}l1" type="hidden">
                            <input name="referer" value="http://liberty.dev/cabinet/balance" type="hidden">
                            <input name="need-email" value="false" type="hidden">
                            <input name="need-fio" value="false" type="hidden">
                            <input name="need-phone" value="false" type="hidden">
                            <input name="need-address" value="false" type="hidden">    
                            <span id="btnBuyLids" class="btn btn-white">
                                <b>Выбрано 1 Лид за 1 рублей</b>
                            </span>
                            
                            <button type="submit" class="btn-liberty btn-liberty-black">
                                Купить
                            </button>
                            {!!Form::close()!!} 
                            
                    </div><!-- widget-text -->
                </div>
                <div class="col-sm-6">
                    <p>
                        Лиды - это Гости клуба Либерти, которые могут стать Вашими Партнерами.
                    </p>
                    <p>
                        Используя ползунок, установите количество Лидов к покупке.
                    </p>
                    <p>
                        После оплаты Лидов вы сможете пригласить новых партнеров в свою структуру в разделе <a href="guests">Гости</a>.
                    </p>
                    <p>
                        Развивайте свою Структуру - покупайте и приглашайте Лидов в клуб.
                    </p>
                </div>
            </div><!-- tab-pane -->
        </div><!-- tab-content -->
    </div>        
    <hr/>   
    <p align="center">Мы принимаем оплату банковскими картами Visa, MasterCard, Maestro
    <img src="../images/bankcarts.jpg" width="50%" height="50%" align="center"></p>
@endsection                    
@section("script1")
<script>
    function changeCount(){
        var lidsCount = document.getElementById('count');
        var btnBuyLids = document.getElementById('btnBuyLids');
        var targets = document.getElementById('targets');
        var sum = document.getElementById('sum');
        var label = document.getElementById('label');
        
        targets.value = "Покупка "+lidsCount.value+" Лид(ов) за "+lidsCount.value*1+" рублей";
        sum.value = lidsCount.value*1;
        label.value = "u{{ $user->id }}l"+lidsCount.value;
        btnBuyLids.innerHTML = "<b>Выбрано "+lidsCount.value+" Лид за "+lidsCount.value*1+" рублей</b>";
        //console.log(yandexBtn.src);
        
    }
    
</script>
@endsection                    