@extends('layout')

@section('content')
<div class="container" style="margin-top:75px">
<div class="row">
<div class="col-md-4">

    <p>This is user <strong> {{ $user->name }} </strong>. Email is <strong>{{ $user->email }}</strong></p>
    <p>Their username is <strong>{{ $user->username }}</strong>. They live in <strong>{{ $user->city }}</strong> 
    , {{ $user->state  }} and they're {{ $user->age }} years old. Their zipcode is {{ $user->zip }}
     and their street address is {{ $user->address }}. AND!! their lat/long is {{ $user->lat_long }} -- so, they are in legislative district: {{ $user->leg_district }}</p>
	 <br /> THE PASSWORD HASH IS: {{ $user->password }} <br /><br />
@stop
