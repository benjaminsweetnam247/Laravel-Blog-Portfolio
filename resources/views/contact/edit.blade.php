@extends('layouts.full_page')

@section('content')
    <h1>Edit Message</h1>

    {!! Form::model($emails, ['method' => 'PATCH', 'action' => ['ContactController@update', $message->id]]) !!}
        @include('contact._form', ['submitButtonText' => 'Send Message'])
    {!! Form::close() !!}

@endsection