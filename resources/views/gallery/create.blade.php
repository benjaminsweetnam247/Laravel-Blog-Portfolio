@extends('templates.sidebar')

@section('page-title')
    <h2>Create Gallery Image</h2>


    {!! Form::open(array('action'=>'GalleryController@store','method'=>'POST','files'=>true)) !!}
    <div>
        {!! Form::label('image', 'Upload Image:') !!}
        {!! Form::file('image') !!}
    </div>
    <div>
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title') !!}
    </div>
    <div>
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description') !!}
    </div>
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
@endsection
