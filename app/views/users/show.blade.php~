@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-3" style="background-color:#ffh!important; border-radius: 30px;">
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
			<div style="text-align:center; background-color:#fff!important; padding-top:50px; padding-bottom: 50px; border-radius: 30px; margin-top:40px; max-width:800px; height:auto;">
				<div class="row" style="max-width:100%; height:auto; margin: 0 auto; position:relative; overflow: hidden;">
					<div class="col-md-3 text-center" >
						<h4>First Noble Truth:</h4> 
						<p><strong>Dukkha exists.</strong></p>
						<h2 style="margin-bottom:10">{{$one}}</h2>
					</div>
					<div class="col-md-3 text-center">
						<h4>Second Noble Truth:</h4> 
						<p><strong> Dukkha's roots.</strong></p>
						<h2 style="margin-bottom:10">{{$two}}</h2>
					</div>
					<div class="col-md-3 text-center">
						<h4>Third Noble Truth:</h4> 
						<p><strong> Dukkha can be overcome.</strong></p>
						<h2 style="margin-bottom:10">{{$three}}</h2>
					</div>
					<div class="col-md-3 text-center">
						<h4>Fourth Noble Truth:</h4>
						<p><strong> The eightfold path toward the end of Dukkha.</strong></p>
						<h2 style="margin-bottom:10">{{$four}}</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
@stop
