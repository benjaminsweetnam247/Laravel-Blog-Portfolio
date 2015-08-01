@extends('templates.sidebar')

@section('page-title')

@endsection

@section('main')
    <div class="welcome">
        <h2>Welcome</h2>
        <p>Hi Welcome to my site.</p>
        <p>if you would like to ask anything please use the contact form</p>
        <p>and I will try and get back to you ASAP </p>
        <p>any feedback is welcome and appreciated</p>
        <p>you can see the code for this site on <a href="http://github.com/benjaminsweetnam247/Laravel-Blog-Portfolio">GitHub</a></p>
    </div>
    <hr>
    <h2>Blog</h2>
    <div class="blog">
    @foreach($articles as $article)
    <a href="/blog/{{ $article->id }}">
        <article>
            <h3>{{ $article->title }}</h3>
            @if( $article->thumbnail != "" )
            <img style="max-width: 200px;" src="{{ asset('/images/'.$article->thumbnail) }}" alt="{{ $article->description }}">
            @endif
            <p>{{ $article->description }}</p>
        </article>
    </a>
    @endforeach
    </div>
@endsection

@stop