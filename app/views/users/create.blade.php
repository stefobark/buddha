@extends('layout')

@section('content')
	<div style="position:relative;">
		<img src="../img/dhammakaya-pagoda.jpg" style="width:100%"></img>
		<div class="container" style="position:absolute;top: 100px; left: 100px; ">
			<div class="row">
			{{ Form::model($users, ['route' => 'users.store'])}}
			<div>
				{{ Form::label('username', 'User Name: ') }}
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ Form::text('username') }}
			</div>
			<div>
				{{ Form::label('password', 'Password') }}
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ Form::password('password') }}
			</div>
			<div>
				{{ Form::label('email', 'Email: ') }}
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{ Form::text('email') }}
			</div>
			<div>
				{{ Form::submit('Create Account') }}
			</div>
			{{ Form::close() }}
			</div>
		</div>
	</div>
@stop
