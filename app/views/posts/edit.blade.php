@extends('layouts.default')
@section('content')

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<div class="col-sm-10 col-sm-offset-1">

<h1>Edit this Post</h1>

{{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PATCH')) }}
	<ul class="list-unstyled">
	<li class="form-group">
		 {{ Form::label('title','Post Title:') }}
		 {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}

		<li class="form-group">
			{{ Form::label('content', 'Post Body:') }}
			{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
		</li>

		@if (Auth::check()) 

			{{ Form::hidden('userid',Auth::getUser()->getAuthIdentifier()) }}

		@endif

		<li class="form-group">
			{{ Form::submit('Update Post', array('class' => 'btn btn-primary')) }}
		</li>
	</ul>
{{ Form::close() }}

</div><!-- .col-sm-8 -->

@stop