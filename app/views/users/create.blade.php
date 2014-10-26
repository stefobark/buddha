@extends('layout')

@section('content')
<div class="container" style="margin-top:75px">
<div class="row">
<div class="col-md-4">
{{ Form::model($users, ['route' => 'users.store'])}}
<div>
   {{ Form::label('name', 'Name: ') }}
   {{ Form::text('name') }}
</div>
<div>
   {{ Form::label('email', 'Email: ') }}
   {{ Form::text('email') }}
</div>
<div>
   {{ Form::label('username', 'User Name: ') }}
   {{ Form::text('username') }}
</div>
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password') }}
<div>
   {{ Form::label('address', 'Street Address: ') }}
   {{ Form::text('address') }}
</div>
<div>
   {{ Form::label('city', 'City: ') }}
   {{ Form::text('city') }}
</div>
<div>
   {{ Form::label('state', 'State: ') }}
   {{ Form::text('state') }}
</div>
<div>
   {{ Form::label('zip', 'Zip Code: ') }}
   {{ Form::text('zip') }}
</div>
<div>
   {{ Form::label('age', 'Age: ') }}
   {{ Form::text('age') }}
</div>
<div>
   {{ Form::submit('Create User') }}
</div>
{{ Form::close() }}
</div>
@stop
