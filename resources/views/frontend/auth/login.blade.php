@extends('frontend.index')
@section('form_heading')
Login to your account
@endsection
@section('form')
{{Former::framework('Nude')}}
{!! Former::open(url('auth/login'))->addClass('col s12')->method('post') !!}
<div class="row">
	<div class="input-field col s12">
		<i class="material-icons prefix">account_circle</i>
		{!! Former::email('email')->required()->class('validate') !!}
		<label for="email">your e-mail</label>
	</div>
	<div class="input-field col s12">
		<i class="material-icons prefix">vpn_key</i>
		{!! Former::password('password')->required()->class('validate') !!}
		<label for="password">your password</label>
	</div>

	<div class="input-field col s12 login-actions">
		<button type="submit" class="waves-effect waves-light btn btn-primary" name="loginBtn"><i class="material-icons left">input</i> ENTER</button>
		<a href="{{ url('/') }}" class="waves-effect waves-light btn btn-primary"><i class="material-icons left">person_add</i> REGISTER</a>
	</div>
</div>
{!! Former::close() !!}
@endsection

@section('additional_link')
Have you forgot your password? Please click <a href="{{ url('password/email') }}" class="white-text darken-3-text u b">here</a> to retrieve it.
@endsection