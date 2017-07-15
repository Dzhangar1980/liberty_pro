{!! Form::open(array('route'=>'google.post-recaptcha-validation.forget_password',
        'method'=>'POST',
        'id'=>'recovery-form',
        'name'=>'recovery-form'
        )) !!}
<fieldset> Электронная почта
{!!Form::email('email',null, array('placeholder'=>'Email','id'=>'email', 'class'=>'form-control'))!!}
{!! $errors->first('email','<p class="alert alert-danger">:message</p>')!!}
<br/>
{!! app('captcha')->display()!!}
{!! $errors->first('g-recaptcha-response','<p class="alert alert-danger">:message</p>')!!}
<br/>
<button class="btn-liberty btn-liberty-default" id="submit" type="submit" name="submit">Выслать мне новый пароль</button>
</fieldset> 
{!!Form::close()!!}