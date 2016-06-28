@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Create Post</h1>

	{!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'class' => 'form-horizontal', 'files' => true]) !!}
	
	@include('includes.errors')

	    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
	        {!! Form::label('title', 'Title') !!}
	        {!! Form::text('title', null, ['class' => 'form-control','required' => 'required']) !!}
	        <small class="text-danger">{{ $errors->first('title') }}</small>
	    </div>

		<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
		    {!! Form::label('category_id', 'Category') !!}
		    {!! Form::select('category_id',[''=>'options',1=>'Test'], null, ['id' => 'category_id', 'class' => 'form-control', 'required' => 'required', 'single']) !!}
		    <small class="text-danger">{{ $errors->first('category_id') }}</small>
		</div>

		<div class="form-group{{ $errors->has('photo_id') ? ' has-error' : '' }}">
		    {!! Form::label('photo_id', 'Photo') !!}
		    {!! Form::file('photo_id') !!}
		    <p class="help-block">Upload GIF, JPEG or PNG</p>
		    <small class="text-danger">{{ $errors->first('photo_id') }}</small>
		</div>

	    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
	        {!! Form::label('body', 'Body') !!}
	        {!! Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required','rows'=>4]) !!}
	        <small class="text-danger">{{ $errors->first('body') }}</small>
	    </div>
	
	    <div class="btn-group pull-right">
	        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
	        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
	    </div>
	
	{!! Form::close() !!}
@stop