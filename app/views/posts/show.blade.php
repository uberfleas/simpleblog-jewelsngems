@extends('layouts.default')
@section('content')
 
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<h1>{{ $post->title }}</h1>

<p class="h2">{{ $post->content }}</p>

<h3>by JewelsNGems</h3>

<br />
<br />
 
@stop