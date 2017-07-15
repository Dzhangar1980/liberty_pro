@extends('layouts.milo-administrator')
@section('content')
<div class="row">
    <form method="POST" action="">
        <div class="col-sm-3">        
            <input type="text" name="search" required="required" width="100%">
        </div>
        <div class="col-sm-3">
            <input type="hidden" name="task" value="search">
            <button type="submit">Найти</button>
            {{ csrf_field() }}
        </div>
    </form>
    <div class="col-sm-3">
        <form method="POST" action="">
            <input type="hidden" name="task" value="showUnblocked">
            <button class="btn btn-default" type="submit">Разлокированные</button>
            {{ csrf_field() }}
        </form>
    </div>
    <div class="col-sm-3">
        <form method="POST" action="">
            <input type="hidden" name="task" value="showBlocked">
            <button class="btn btn-danger" type="submit">Заблокированные</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
<hr/>
@foreach($users as $user)
<div class="row" 
     @if($user->blocked == 1)
        style="background-color: #ffb7b5"
     @endif
     >
    <div class="col-sm-3">
        {{ $user->name }} {{ $user->family }}
    </div>
    <div class="col-sm-3">
        {{ $user->email }}
    </div>
    <div class="col-sm-3">
        {{ $user->profile['company_login'] }}
    </div>
    <div class="col-sm-3">
        @if($user->blocked == 0)
            <form method="POST" action="">
            <input type="hidden" name="task" value="block">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <button class="btn btn-danger" type="submit">Блокировать</button>
            {{ csrf_field() }}
            </form>
        @endif
        @if($user->blocked == 1)
            <form method="POST" action="">
            <input type="hidden" name="task" value="unblock">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <button class="btn btn-default" type="submit">Разблокировать</button>
            {{ csrf_field() }}
            </form>
        @endif
    </div>
</div>
@endforeach
<div class="row">
    <div class="col-sm-12">
        {!! $users->render() !!}
    </div>
</div>
@endsection                    