@extends('layouts.default')
@section('content')

	<!-- set vars to use to easily reuse this code -->
	{{--*/ $model_name='Post'; /*--}}
	{{--*/ $table_name='posts'; /*--}}
	<!-- end set vars -->
	<div class="col-sm-10 col-sm-offset-1">
	<h1>All the {{ $model_name }}s</h1>

	<a class="btn btn-small btn-success" href="{{ URL::to($table_name.'/create') }}">
	<span class="glyphicon glyphicon-plus"></span> Add {{ $model_name }}</a>
	
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Content</td>
				<td>Creator</td>
				<td>Title</td>
				<td>Created</td>
				<td>Updated</td>
			</tr>
		</thead>
		<tbody>
		@foreach(${$table_name} as $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->content }}</td>
				<td><a href="users/{{ $value->user_id }}">{{ $value->user->fname }} {{ $value->user->lname }}</a></td>
				<td>{{ $value->title }}</td>
				<td>{{ $value->created_at }}</td>
				<td>{{ $value->updated_at }}</td>
				
				<!-- adding show edit and delete buttons -->
				<td>
					
					<!-- delete button -->
					
					<!-- show button -->
					<a class="btn btn-small btn-success" href="{{ URL::to($table_name.'/'.$value->id) }}">Show {{ $model_name }}</a>
					
					<!-- edit button -->
					<a class="btn btn-small btn-info" href="{{ URL::to($table_name.'/'.$value->id.'/edit') }}">Edit {{ $model_name }}</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	</div>
					
@stop