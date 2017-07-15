@extends('layouts.front-master')
@section('title', 'Liberty club :: Регистрация')
 
	@section('banner')
		<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="12u 12u(medium)">
								<p>Регистрация</p>
								@if (count($errors) > 0)
									<div>Ой, беда!</div>
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								@endif
							</div>	
						</div>	
						
						<form method="POST" action="/register">
						<div class="row">
							<div class="6u 12u(medium)">
								<b>Ваше имя</b> <br>
								<input type="text" name="name" id="name" required="required"> 
								<div id="name_message"></div> 
							</div>
							<div class="6u 12u(medium)">
								<b>Адрес электронной почты (Email)</b> <br>
								<input type="email" name="email" id="email" required="required"> 
								<div id="email_message"></div> 
							</div>
						</div>
						<div class="row">	
							<div class="6u 12u(medium)">
								<b>Пароль (не менее 8 символов):</b> <br><input type="password" name="password" id="password" required="required">
								<div id="password_message"></div>	
							</div>	
							<div class="6u 12u(medium)">
								<b>Повторение пароля:</b> <br><input type="password" name="password_confirmation" id="password_confirmation" required="required">
								<div id="password_confirmation_message"></div>	
							</div>	
						</div>	
						<div class="row">	
							<div class="4u 12u(medium)">
								<input type="hidden" name="_token" value="{{csrf_token()}}"><br>
								<input type="submit" value="Регистрация">
							</div>		
						</div>		
						</form>
						<div id="SessionMessage">
							@if(Session::has('message'))
								{!!Session::get('message')!!}
							@endif
						</div>
						</div>
					</div>		
				</div>
    @stop
    
@section('features')
@show
@section('main')
@show
@section('scripts')
	@parent
	<script src="assets/js/register.js"></script>
@stop
