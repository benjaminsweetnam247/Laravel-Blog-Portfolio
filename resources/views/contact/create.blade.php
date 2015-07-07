@extends('layouts.full_page')

@section('content')
        <h1>Contact Me</h1>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(array('route' => 'contact.store', 'class' => 'form')) !!}
            @include('contact._form', ['submitButtonText' => 'Send Message'])
        {!! Form::close() !!}
@endsection