@extends('templates.sidebar')

@section('page-title')
    <h2>Contact</h2>
@endsection

@section('main')
    {!! Form::open(array( route('contact.index'), 'method'=>'POST')) !!}
    <div>
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name') !!}
    </div>
    <div>
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email') !!}
    </div>
    <div>
        {!! Form::label('subject', 'Subject:') !!}
        {!! Form::text('subject') !!}
    </div>
    <div>
        {!! Form::label('message', 'Your Message:') !!}<br>
        {!! Form::text('message') !!}
    </div>
        {!! Form::submit('Submit') !!}

    {!! Form::close() !!}
@endsection