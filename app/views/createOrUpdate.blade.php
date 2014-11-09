@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h2>sign up form</h2>
		{{ Form::model($user, array('route' => array('user.update', $user->id)))}}
		{{ Form::close }}
		</div>
	</div>
</div>
