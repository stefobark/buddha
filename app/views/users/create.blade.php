@extends('layout')

@section('content')
	<div style="position:relative;">
		<img src="../img/dhammakaya-pagoda.jpg" style="width:100%"></img>
		<div class="container" style="position:absolute;top: 100px; left: 100px; ">
			<div class="row">
			{{ Form::model($users, ['route' => 'users.store'])}}
			<div>
				{{ Form::label('username', 'User Name: ') }}
				{{ Form::text('username') }}
			</div>
			<div>
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password') }}
			</div>
			<div>
				{{ Form::label('email', 'Email: ') }}
				{{ Form::email('email') }}
			</div>
			<div>
				{{ Form::submit('Create Account') }}
			</div>
			{{ Form::close() }}
			</div>
		</div>
	</div>
@stop
