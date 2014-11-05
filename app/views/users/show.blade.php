@extends('layout')

@section('content')

<div id="wrapper">
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><p style="font-size:50px"><strong> {{ $user->username }} </strong></p></li>
			<li><h4>Details:</h4>
			<li><p><strong>Politicians from Disctrict #{{ $user->leg_district }}</strong></p></li>

			<div class="pols">
				@foreach ($q as $rep)
					<li><a href="#viewRep"><strong>{{ $rep['json.first_name'] }} {{ $rep['json.last_name'] }}</strong></a>
				@endforeach
			</div>
		</ul>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-9">
			<div class="row">
			<h4>Politicians from your district are the Primary Sponsor on these bills:</h4>
				<div class="col-md-4">
				@foreach($h1 as $v)
					<p><strong>{{ $v['name'] }}</strong></p>
					<p>{{ $v['title'] }}</p>
					<p><a href='{{ $v['url1'] }}'>Read the bill here.</a></p>
					<p><a href='{{ $v['url2'] }}'>Or, here.</a></p>
					<p>{{ $v['subjects'] }}</p><br /><br />
				@endforeach
				</div>
				<div class="col-md-4">
				@foreach($h2 as $v2)
						<p>{{ $v2['name'] }}</p>
						<p>{{ $v2['title'] }}</p>
						<p><a href='{{ $v2['url1'] }}'>Read the bill here.</a></p>
						<p><a href='{{ $v2['url2'] }}'>Or, here.</a></p>
						<p>{{ $v2['subjects'] }}</p><br /><br />
				@endforeach
				</div>
				<div class="col-md-4">
				@foreach($s as $v3)
						<p>{{ $v3['name'] }}</p>
						<p>{{ $v3['title'] }}</p>
						<p><a href='{{ $v3['url1'] }}'>Read the bill here.</a></p>
						<p><a href='{{ $v3['url2'] }}'>Or, here.</a></p>
						<p>{{ $v3['subjects'] }}</p><br /><br />
				@endforeach
				</div>
	  	</div>
<div class="col-md-4">
@stop
