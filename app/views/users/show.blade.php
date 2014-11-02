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
	 <br /> THE PASSWORD HASH IS: {{ $user->password }} <br /><br />
	 <pre> {{ var_dump($q) }} </pre>
	  <pre> {{ var_dump($l_primary) }} </pre>
	  <pre> {{ var_dump($u_primary) }} </pre>
	  
	  <pre> {{ var_dump($test) }} </pre>
@stop
