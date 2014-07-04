@extends('layouts.default')
@section('content')
	<br />
	<br />
	<div class="col-sm-10 col-sm-offset-1">
	<div class="jng-spacer"></div>
	@foreach ($posts as $post) 
		<div class="row">
		<a class="h1" href="posts/{{ $post->id }}">{{ $post->title }}</a>
		<p class="panel-content">{{ $post->content }}</p>
		<span class="h3">by {{ $post->user->fname.' '.$post->user->lname }}</span>
		</div>
		<br />
		<br />
	@endforeach

	{{ $posts->links() }}

	</div>

	<div class="col-sm-10 col-sm-offset-1">
	
	<p class="h2">All of us want to be healthy and happy. Being healthy is not just about feeling good for a few minutes or hours. It is a lifelong journey. We can share that journey to health together, or we can struggle alone, but to enjoy truly joyous health, we want to be with the ones we love.</p>

	<p class="h2">Here we can share a journey to health together, find our joy and have someone to help us through those struggles, and together we can all enjoy better health and happiness the natural way.</p>

	</div>
@stop