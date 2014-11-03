@extends('layout')

@section('content')
<div class="container" style="margin-top:75px">
<div class="row">
<div class="col-md-4">
    <p>This is user <strong> {{ $user->name }} </strong>.<br /> 
    Email is <strong>{{ $user->email }}</strong></p>
    <p>Their username is <strong>{{ $user->username }}</strong> . <br />
    Their lat/long is {{ $user->lat_long }}<br />
    So, they are in legislative district: {{ $user->leg_district }}</p>
</div>
<div class="col-md-4">
	<h4>Your politicians </h4>
	@foreach ($q as $rep)
		<p> {{ $rep['json.first_name'] }} {{ $rep['json.last_name'] }} </p>
		<p> {{ $rep['json.email'] }}  {{ $rep['json.leg_id'] }}
	@endforeach
	 </div>
<div class="col-md-4">
	<h4>Your politician's primary sponsored bills</h4>
		@foreach($l_primary as $val)
			@foreach($val as $v)
				<p>{{ $v['b_id'] }}</p>
				<p>{{ $v['name'] }}</p>
				<p>{{ $v['title'] }}</p>
				<p>{{ $v['url1'] }}</p>
				<p>{{ $v['url2'] }}</p>
				<p>{{ $v['subjects'] }}</p><br /><br />
			@endforeach
		@endforeach
		

	  <pre> {{ var_dump($u_primary) }} </pre>
	  	  	 </div>
<div class="col-md-4">
@stop
