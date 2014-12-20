@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-3" style="background-color:#ffh!important; border-radius: 30px;>
			<ul style="list-style:none">
				<li><p style="font-size:25px; margin-top:40px;"><h1><strong>Hello {{ $user->username }}</strong></h1></p></li>
				<li><h3>Karmic Scoreboard (average scores)</h3></li>
				<li><h4>1st Noble Truth: {{ $oneAvg }}</h4></li>
				<li><h4>2nd Noble Truth: {{ $twoAvg }}</h4> </li>
				<li><h4>3rd Noble Truth: {{ $threeAvg }} </h4></li>
				<li><h4>4th Noble Truth: {{ $fourAvg }} </h4></li>
			</ul>
		</div><div class="col-md-1"></div>
		<div class="col-md-5">
			<h1 style="text-align:center; color:#fff"><strong>Your Relation to the Four Noble Truths:</strong></h1>
			<div style="text-align:center; background-color:#fff!important; padding-top:50px; padding-bottom: 50px; border-radius: 30px; margin-top:40px;">{{ HTML::image("img/4truths/1-$rand1.png", 'buddha') }}{{ HTML::image("img/4truths/2-$rand2.png", 'buddha') }}{{ HTML::image("img/4truths/3-$rand3.png", 'buddha') }}{{ HTML::image("img/4truths/4-$rand4.png", 'buddha') }}</div>
		</div>
	</div>
</div>
	
@stop
