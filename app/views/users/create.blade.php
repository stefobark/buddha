@extends('layout')

@section('content')
	<div style="position:relative;">
		<img src="../img/dhammakaya-pagoda.jpg" style="width:100%"></img>
		<div class="container" style="position:absolute;top: 100px; left: 100px; ">
			<div class="row">
			{{ Form::model($users, ['route' => 'users.store', 'class' => 'clearfix'])}}
				{{ Form::text('username', $username, array('class' => 'form-control', 'placeholder' => 'Username')) }}
				{{ Form::email('email', $email, array('class' => 'form-control', 'placeholder' => 'Email')) }}
				{{ Form::password('password', $password, array('class' => 'form-control', 'placeholder' => 'Password')) }}
				{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
			</div>
		</div>
	</div>
@stop
