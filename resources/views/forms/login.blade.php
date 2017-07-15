{!! Form::open(array('route'=>'signup',
        'method'=>'POST',
        'id'=>'login-form',
        'name'=>'login-form'
        )) !!}
<fieldset> Email
{!!Form::email('email',null, array('placeholder'=>'Email','id'=>'email', 'class'=>'form-control'))!!}
{!! $errors->first('email','<p class="alert alert-danger">:message</p>')!!}
Пароль
{!!Form::password('password',null, array('placeholder'=>'Password','id'=>'password', 'class'=>'form-control'))!!}
{!! $errors->first('password','<p class="alert alert-danger">:message</p>')!!}
<br/>
<button class="btn-liberty btn-liberty-default" id="submit" type="submit" name="submit">Войти</button>
</fieldset> 
{!!Form::close()!!}
<hr/>
<a href="forget_password"><button class="btn-liberty btn-liberty-black">Не помню пароль</button></a>
<a href="../#blog"><button class="btn-liberty btn-liberty-black">Регистрация</button></a>