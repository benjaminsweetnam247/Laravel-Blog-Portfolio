@extends('templates.sidebar')

@section('page-title')
    <h2>Create New Blog Post</h2>
@endsection
@section('main')
    {!! Form::open(array('route' => 'blog.store', 'method'=>'POST', 'files'=>true)) !!}
        <div>
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title') !!}
        </div>
        <div>
            {!! Form::label('description', 'Description:') !!}
            {!! Form::text('description') !!}
        </div>
        <div>
            {!! Form::label('image', 'Image:') !!}
            {!! Form::file('image') !!}
        </div>
        <div>
            {!! Form::submit('Submit') !!}

        </div>
    {!! Form::close() !!}
@endsection


