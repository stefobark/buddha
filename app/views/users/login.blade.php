@extends('layout')

@section('content')
<div class="container" style="margin-top:50px">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', Input::old('username'), array('placeholder' => 'username')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!') }}</p>
	{{ Form::close() }}
 @stop
