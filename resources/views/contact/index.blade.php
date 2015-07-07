@extends('layouts.full_page')

@section('pagetitle', 'contact')

@section('content')
    @if(Auth::check())
        @include('contact._messages')
    @else
        <h1>Contact Me</h1>

        {!! Form::open(array('route' => 'contact.store', 'class' => 'form')) !!}
        @include('contact._form', ['submitButtonText' => 'submit message'])
        {!! Form::close() !!}
    @endif
@endsection
