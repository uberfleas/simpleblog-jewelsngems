@extends('layouts.default')
@section('content')

<h1>I'd love to hear from you...</h1>

<p><i>If you have any questions please fill out the form below or leave me a message on <a href="https://www.facebook.com/vintagejewelsngems">Facebook</a>.</i></p>

<div class="col-sm-9 col-sm-offset-1">

{{ Form::open(array('url' => '/contact', 'method' => 'post')) }}

<fieldset>
{{ Form::label('name','Name:') }} 
{{ Form::text('name','Type Name Here',array('class'=>'form-control')) }}
</fieldset>

<fieldset>
{{ Form::label('email','Email Address:') }}
{{ Form::text('email','Enter Email (optional)',array('class'=>'form-control')) }}
</fieldset>

<fieldset>
{{ Form::label('message','Message:') }}
{{ Form::textarea('message','Type message here...',array('class'=>'form-control')) }}
</fieldset>

<div class="jng-space">&nbsp;</div>

<fieldset>
{{ Form::submit('Send Email',array('class'=>'form-control btn btn-info')) }}
</fieldset>

{{ Form::close() }}

<div class="jng-space">&nbsp;</div>
<div class="jng-space">&nbsp;</div>

</div>

@stop