@extends('layout')

@section('content')

<div id="wrapper">
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><p style="font-size:50px; margin-top:75px;"><strong> {{ $user->username }} </strong></p></li>
			<li><h4>Details:</h4>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
	</div>
</div>
	
@stop
