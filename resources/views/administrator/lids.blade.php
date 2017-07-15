@extends('layouts.milo-administrator')
@section('content')
<h2>Лиды</h2>
<?php
//var_dump($lids_credit);
?>
<div class="elements-section" id="counters">
    <div class="headline style-1">
        <h3>Информация </h3>
    </div><!-- headline -->

    <div class="row">
        <div class="col-sm-3">
            <div class="counter">
                <div class="counter-value animated" data-value="{{ $lidsSaldo }}">{{ $lidsSaldo }}</div>
                <div class="counter-details">
                    <p>Лидов оплачено в системе (спрос)</p>
                </div><!-- counter-details -->
            </div><!-- counter -->
        </div><!-- col -->

        <div class="col-sm-3">
            <div class="counter">
                <div class="counter-value animated" data-value="{{ $guests }}">{{ $guests }}</div>
                <div class="counter-details">
                    <p>Паблик гостей в системе (предложение)</p>
                </div><!-- counter-details -->
            </div><!-- counter -->
        </div><!-- col -->
        
        <div class="col-sm-3">
            <div class="counter">
                <div class="counter-value animated" data-value="{{ $lids_credit_yestoday }}">{{ $lids_credit_yestoday }}</div>
                <div class="counter-details">
                    <p>Обработано Лидов за <?php echo date("d.m.Y", strtotime("yesterday")); ?></p>
                </div><!-- counter-details -->
            </div><!-- counter -->
        </div><!-- col -->
        
        
    </div><!-- row -->    
</div>
<hr/>
<h4>Цена покупки Лида, руб.</h4>
<input type="number" id="lidprice" value="{{ $options->lid_price }}">
<input type="button" onclick="updateLidPrice()" id="updateLidPrice" value="Установить цену">
<hr/>
@if(count($statuses)>0)
<table width="100%" border="0">
    <tr>
    <td>№ п/п</td>
    <td>Статус</td>
    <td>Лиды</td>
    <td> </td>
    </tr>
    @foreach($statuses as $status)
    <tr>
        <td>{{ $status->id }} </td>
        <td><input type="text" id="title{{ $status->id }}" value="{{ $status->title }}"></td>
        <td><input type="number" id="lids{{ $status->id }}" value="{{ $status->lids }}"></td>
        <td><input type="button" onclick="updateLids({{ $status->id }})" id="update{{ $status->id }}" value="Сохранить"></td>
    </tr>
    @endforeach
</table>    
@endif
@endsection            

@section('script1')
<script>
    function updateLids(id){
        var title = $('#title'+id).val();
        var lids = $('#lids'+id).val();
        var token  = $('meta[name=_token]').attr('content');
        
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
            mydata['_token'] = token;           
            mydata['id'] = id;
            mydata['title'] = title;
            mydata['lids'] = lids;
        
            $.ajax({
		method: "POST",
		url: "./updateLids",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        alert('Усё у паряде, шеф!');
                    }
                        
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
    function updateLidPrice(){
        var lidprice = $('#lidprice').val();
        var token  = $('meta[name=_token]').attr('content');
        
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
            mydata['_token'] = token;           
            mydata['lidprice'] = lidprice;
        
            $.ajax({
		method: "POST",
		url: "./updateLidPrice",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        alert('Усё у паряде, шеф!');
                    }
                        
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
</script>
@endsection            
