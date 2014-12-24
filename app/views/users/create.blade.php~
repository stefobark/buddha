@extends('layout')

@section('content')
	<div style="position:relative;">
		<img src="../img/dhammakaya-pagoda.jpg" style="width:100%"></img>
		<div class="container" style="position:absolute;top: 100px; left: 100px; ">
			<div class="row">
			{{ BootForm::openRegister() }}
				{{ BootForm::text('Username', 'username') }}
				{{ BootForm::password('Password', 'password') }}
				{{ BootForm::email('Email', 'email') }}
				{{ BootForm::submit('Submit') }}
			{{ BootForm::close() }}
			</div>
		</div>
	</div>
@stop
