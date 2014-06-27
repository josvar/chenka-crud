<label>Username
{{ Form::email('email', null , array('class' => 'input', 'id' => 'email')) }}
</label>

<label>Password
{{ Form::password('password', array('class' => 'input', 'id' => 'password')) }}
</label>

<div class="footer-group">

<label class="remember">
{{ Form::checkbox( 'remember' , null, false, array('class' => 'checkbox' )) }} Remember me
</label>
{{ Form::button('Sign in', array('type' => 'submit', 'class' => 'button tiny')) }}

</div>

