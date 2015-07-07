@extends('layouts/full_page')

@section('pagetitle' | 'Blog-Edit')

@section('content')

    <h1>Edit {!! $article->title !!}</h1>

    <hr/>
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

    @include('blog.form', ['submitButtonText' => 'Edit Article'])

    {!! Form::close() !!}

    @include('errors.list')
@stop