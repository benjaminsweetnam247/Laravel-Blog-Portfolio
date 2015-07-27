@extends('templates.sidebar')

@section('page-title')
    <h2>Contact</h2>
@endsection

@section('main')
    {!! Form::open(array('url' => 'contact')) !!}
    <div>
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name') !!}
    </div>
    <div>
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email') !!}
    </div>
    <div>
        {!! Form::label('message', 'Your Message:') !!}
        {!! Form::textarea('message') !!}
    </div>

    {!! Form::close() !!}
@endsection