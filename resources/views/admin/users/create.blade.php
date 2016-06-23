@extends('layouts.admin')

@section('content')
<h1>Create a User</h1>

{!! Form::open(['method' => 'POST', 'class' => 'form-horizontal', 'action'=>'AdminUsersController@store']) !!}
	
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', 'Name') !!}
	    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('name') }}</small>
	</div>

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	    {!! Form::label('email', 'Email') !!}
	    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('email') }}</small>
	</div>

	<div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
	    {!! Form::label('is_active', 'Status') !!}
	    {!! Form::select('is_active', array(1 => 'Active', 0 => 'Inactive'), 0, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('is_active') }}</small>
	</div>

	<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
	    {!! Form::label('role_id', 'Role') !!}
	    {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('role') }}</small>
	</div>

	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	    {!! Form::label('password', 'Password') !!}
	    {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('password') }}</small>
	</div>


    <div class="btn-group pull-right">
        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
        {!! Form::submit("Add User", ['class' => 'btn btn-success']) !!}
    </div>

{!! Form::close() !!}


@if(count($errors)>0)
	
<div class="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Errors found!</strong> 
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
</div>

@endif 


@stop