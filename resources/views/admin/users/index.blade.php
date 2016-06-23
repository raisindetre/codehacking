@extends('layouts.admin')

@section('content')

<h1 class="page-header">Users</h1>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Photo</th>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Status</th>
			<th>Created</th>
			<th>Updated</th>
		</tr>
	</thead>
	<tbody>
		@if($users)
		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td><img width="100" height="100" src="{{isset($user->photo)? $user->photo->file : 'N/A'}}" alt="Image of ".$user_name></td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{isset($user->role->name)? $user->role->name : 'Role not set'}}</td>
			<td>{{$user->is_active == 1? 'Active' : 'Inactive'}}</td>
			<td>{{$user->created_at->diffForHumans()}}</td>
			<td>{{$user->updated_at->diffForHumans()}}</td>
		</tr>
		@endforeach
		@endif
	</tbody>
</table>



@endsection