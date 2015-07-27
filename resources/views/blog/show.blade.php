@extends('templates.sidebar')

@section('page-title')
    <h2>{{ $article->title }}</h2>
@endsection

@section('main')
        <article class="single">
            <p>{{ $article->description }}</p>
                <img style="max-width: 600px;" src="{{ asset('/images/'.$article->thumbnail) }}" alt="{{ $article->description }}">
        </article>
        <a href="/">&longleftarrow;Back To Blog</a>
@endsection