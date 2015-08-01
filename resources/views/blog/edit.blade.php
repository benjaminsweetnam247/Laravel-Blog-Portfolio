@extends('templates.sidebar')

@section('page-title')
    <h2>Edit Article {!! $article->title !!}</h2>
@endsection
@section('main')
    {!! Form::model($article, array('method'=>'PATCH', 'route' => ['blog.update', '$article->id'],  'files'=>true)) !!}
        @include('blog._form')
    {!! Form::close() !!}
@endsection


