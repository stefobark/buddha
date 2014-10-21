@extends('layout')

@section('content')
<div class="container" style="margin-top:50px">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
@foreach ($users as $user)
    <p>This is user {{ $user->name }}. Email is {{ $user->email }}</p>
@endforeach
</div>

