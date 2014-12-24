@extends('layout')

@section('content')
	<div style="position:relative;">
		<img src="../img/dhammakaya-pagoda.jpg" style="width:100%"></img>
		<div class="container" style="position:absolute;top: 100px; left: 100px; ">
			<div class="row">
			{{ Form::model($users, ['route' => 'users.store', 'class' => 'clearfix'])}}
			<div>
				{{ Form::label('username', 'User Name: ') }}
				{{ Form::text('username', array('class' => 'form-control', 'placeholder' => 'Username')) }}
			</div>
			<div>
				{{ Form::label('password', 'Password') }}
				{{ Form::password, array('class' => 'form-control', 'placeholder' => 'Password')) }}
			</div>
			<div>
				{{ Form::label('email', 'Email: ') }}
				{{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email')) }}
			</div>
			<div>
				{{ Form::submit('Create Account'', array('class' => 'btn btn-primary')) }}
			</div>
			{{ Form::close() }}
			</div>
		</div>
	</div>
@stop
