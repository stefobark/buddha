@extends('layout')

@section('content')
<div class="container" style="margin-top:75px">
<div class="row">
<div class="col-md-3" id="leftCol">
	<div class="nav nav-stacked" id="sidebar">
		<ul class="nav nav-stacked" id="sidebar">
		<p style="font-size:25px"><strong> {{ $user->username }} </strong></p>
		<p>It looks like you're in <strong>Legislative Disctrict #{{ $user->leg_district }}</strong></p>
		<p>Your politicians:</p>
	@foreach ($q as $rep)
		<li><a href="#viewRep"><strong>{{ $rep['json.first_name'] }} {{ $rep['json.last_name'] }}</strong></a>
		<a href="figure out email">{{ $rep['json.email'] }}</a></li>
	@endforeach
	</div>
</div>
<div class="col-md-9">
	<h4>Politicians from your district are the Primary Sponsor on these bills:</h4>
		@foreach($l_primary as $val)
			@foreach($val as $v)
				<p><strong>{{ $v['name'] }}</strong></p>
				<p>{{ $v['title'] }}</p>
				<p><a href='{{ $v['url1'] }}'>Read the bill here.</a></p>
				<p><a href='{{ $v['url2'] }}'>Or, here.</a></p>
				<p>{{ $v['subjects'] }}</p><br /><br />
			@endforeach
		@endforeach
		@foreach($u_primary as $val2)
			@foreach($val2 as $v2)
				<p>{{ $v2['name'] }}</p>
				<p>{{ $v2['title'] }}</p>
				<p><a href='{{ $v2['url1'] }}'>Read the bill here.</a></p>
				<p><a href='{{ $v2['url2'] }}'>Or, here.</a></p>
				<p>{{ $v2['subjects'] }}</p><br /><br />
			@endforeach
		@endforeach
	  	  	 </div>
<div class="col-md-4">
@stop
