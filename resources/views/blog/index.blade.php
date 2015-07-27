@extends('templates.sidebar')

@section('page-title')
    <h2>Blog</h2>
@endsection

@section('main')
    @foreach($articles as $article)
    <a href="/blog/{{ $article->id }}">
        <article>
            <h3>{{ $article->title }}</h3>
            <img style="max-width: 200px;" src="{{ asset('/images/'.$article->thumbnail) }}" alt="{{ $article->description }}">
            <p>{{ $article->description }}</p>
        </article>
    </a>
    @endforeach
@endsection

@stop