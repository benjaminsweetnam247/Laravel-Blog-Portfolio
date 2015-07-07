@extends('layouts.full_page')

@section('content')

    <h1>New Article</h1>

    <hr/>

    {!! Form::open(['url' => 'blog']) !!}

    @include('blog.form', ['submitButtonText' => 'Add Article'])

    {!! Form::close() !!}

    @include('errors.list')

@stop