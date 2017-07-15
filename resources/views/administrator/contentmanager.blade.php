@extends('layouts.milo-administrator')

@section('css')
@endsection 

@section('script')
@endsection 

@section('content')
<div class="row">
<div class="col-sm-8">
   {!! Form::open(array('url'=>'article-filter',
        'method'=>'POST',
        'id'=>'article-filter-form',
        'name'=>'article-filter-form'
        )) !!}
<fieldset> 
    <div class="col-sm-2">
    {!!Form::text('title',null, array('placeholder'=>'Заголовок','id'=>'title', 'class'=>'form-control'))!!}
    </div>
    <div class="col-sm-2">
        <select id="category" name="category">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
    {!!Form::select('published', array('2' => 'Выберите статус', 
                '0' => 'Не опубликовано', '1' => 'Опубликовано') )!!} 
    </div>
    <div class="col-sm-1">
    <button class="btn btn-default" id="submit" type="submit" name="submit">Фильтр</button>
    </div>
</fieldset> 
{!!Form::close()!!}
</div>
<div class="col-sm-2">
    <button class="btn btn-default">Показать все</button>
</div>   
<div class="col-sm-2">
    <a href="article" class="btn btn-default">Создать новый</a>
</div>   
</div>   
<div class="row">
<div class="col-sm-12">
    @if(count($articles) > 0)
        <h2>Материалы</h2>
        <table width="100%" border="0">
        @foreach($articles as $article)
        <tr id='article{{ $article->id }}'>
            <td>
                <a href="./article?id={{ $article->id }}">
                {{ $article->title }}
                </a>
            </td>        
            <td>
            {{ $article->category->title }}
            </td>
            <td>
            <?php echo date("d.m.Y г. H:i ч.", strtotime($article->updated_at)); ?>
            </td>
            <td>
            @php
                switch ($article->published){
                    case 0:
                        echo 'Не опубликовано';
                        break;
                    case 1:
                        echo 'Опубликовано';
                        break;
                }
            @endphp
            </td>
            <td>
                <button id="delete_article" onclick="delete_article({{ $article->id }})">Удалить</button>
            </td>
        </tr>
        @endforeach
        </table>
    @else
        <h2>Материалы отсутствуют</h2>
    @endif
</div>
</div>
@endsection        
                   
@section('script1')
<script>
$(document).ready(function() {
    
});
function delete_article(id){
    var isSure = confirm("Точно удалить?");
    if(isSure == true){
        var token  = $('meta[name=_token]').attr('content');
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': token }});
        var mydata = {};
            mydata['_token'] = token;           
            mydata['id'] = id;
        
            $.ajax({
		method: "POST",
		url: "./article-delete",
		cache: false,
		data: mydata,
		dataType: 'json', 
		success: function (response) {
                    if(response['msg']=='success'){
                        $('#article'+id).remove();
                    }
                        
		},
		error: function (data) {
                    console.log('Error:', data);
                }
        });
    }
}        
</script>
@endsection       