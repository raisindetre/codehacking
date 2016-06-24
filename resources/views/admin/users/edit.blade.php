@extends('layouts.admin')

@section('content')
<h1>Edit User</h1>

	<div class="col-sm-3">
		<img src="{{$user->photo? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-responsive img-rounded"/>
	</div>

	<div class="col-sm-9">

	{!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'files'=>true]) !!}

	{{-- Alternative blade syntax for model form binding
	{!! Form::model($user, ['action' => ['AdminUsersController@update', $user->id], 'method' => 'PATCH', 'class' => 'form-horizontal', 'files'=>true]) !!}
	--}}


		@include('includes.errors')
		
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		    {!! Form::label('name', 'Name') !!}
		    {!! Form::text('name', null, ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('name') }}</small>
		</div>

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		    {!! Form::label('email', 'Email') !!}
		    {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('email') }}</small>
		</div>

		
		<div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">
		    {!! Form::label('is_active', 'Status') !!}

			{{-- Note: Default value changed to null, so stored value in $user object is used --}}	    
		    {!! Form::select('is_active', array(1 => 'Active', 0 => 'Inactive'), null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('is_active') }}</small>
		</div>

		<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
		    {!! Form::label('role_id', 'Role') !!}
		    {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class' => 'form-control', 'required' => 'required']) !!}
		    <small class="text-danger">{{ $errors->first('role') }}</small>
		</div>


		<div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
		    {!! Form::label('photo_id', 'Upload avatar') !!}
		    {!! Form::file('photo_id') !!}
		    <p class="help-block">Upload an image in JPG, PNG or GIF format - maximum of 500px in width or height.</p>
		    <small class="text-danger">{{ $errors->first('file') }}</small>
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		    {!! Form::label('password', 'Password') !!}
		    {!! Form::password('password', ['class' => 'form-control']) !!}
		    <small class="text-danger">{{ $errors->first('password') }}</small>
		</div>


	    <div class="btn-group pull-right">
	        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
	        {!! Form::submit("Update User", ['class' => 'btn btn-success']) !!}
	    </div>

	{!! Form::close() !!}

	{!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy',$user->id], 'class' => 'form-horizontal']) !!}
	
	    <div class="btn-group pull-left">
	        {!! Form::submit("Delete", ['class' => 'btn btn-danger']) !!}
	    </div>
	
	{!! Form::close() !!}

	</div>

@stop