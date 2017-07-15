{!! Form::open(array('route'=>'google.post-recaptcha-validation',
        'method'=>'POST',
        'files'=>true,
        'id'=>'register-form',
        'name'=>'register-form'
        )) !!}
<fieldset> 
{!!Form::text('name',null, array('placeholder'=>'Ваше имя', 'id'=>'name', 'class'=>'form-control'))!!}
{!! $errors->first('name','<p class="alert alert-danger">:message</p>')!!}

{!!Form::text('email',null, array('placeholder'=>'Email','id'=>'email', 'class'=>'form-control'))!!}
{!! $errors->first('email','<p class="alert alert-danger">:message</p>')!!}

{!! app('captcha')->display()!!}
{!! $errors->first('g-recaptcha-response','<p class="alert alert-danger">:message</p>')!!}
<p></p>
<p class="fa fa-check-square-o"> Я прочел и согласен с условиями пользовательского соглашения</p>
<input class="btn-liberty btn-liberty-default" id="submit" type="submit" name="submit" value="Регистрация"> 
</fieldset> 
{!!Form::close()!!}
