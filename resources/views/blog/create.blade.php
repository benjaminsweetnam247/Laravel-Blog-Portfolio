@extends('templates.sidebar')

@section('page-title')
    <h2>Create New Blog Post</h2>
@endsection
@section('main')
    {!! Form::open(array('route' => 'blog.store', 'method'=>'POST', 'files'=>true)) !!}
        @include('blog._form')
    {!! Form::close() !!}
@endsection


