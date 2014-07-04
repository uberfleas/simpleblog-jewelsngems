@extends('layouts.default')
@section('content')

{{ Form::open(array('action' => 'ContactController@submitAction')) }}

{{ Form::label('name','Name:') }}
{{ Form::text('name','Type Name Here') }}

{{ Form::label('message','Message:') }}
{{ Form::textarea('message','Type message here...') }}

{{ Form::submit('Send eMail') }}

{{ Form::close() }}

@stop