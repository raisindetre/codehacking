@extends('layouts.admin')

@section('content')
	<h1 class="page-header">Posts</h1>


<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Author</th>			
			<th>Category</th>						
			<th>Photo</th>									
			<th>Title</th>
			<th>Created</th>
			<th>Updated</th>
		</tr>
	</thead>
	<tbody>


		@if($posts)
		@foreach($posts as $post)
		<tr>
			<td>{{$post->id}}</td>
			<td>{{isset($post->user_id)? $post->user->name : ''}}</td>			
			<td>{{isset($post->category_id)? $post->category->name : ''}}</td>						
			<td><img src="{{isset($post->photo)? $post->photo->file : "http://placehold.it/100x100"}}" class="img-responsive img-rounded" alt="Image" width="100" height="100">
			 </td>	
			
			<td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->title}}</a></td>
			<td>{{$post->created_at->diffForHumans()}}</td>
			<td>{{$post->updated_at->diffForHumans()}}</td>
		</tr>
		@endforeach
		@endif
	</tbody>
</table>

@stop