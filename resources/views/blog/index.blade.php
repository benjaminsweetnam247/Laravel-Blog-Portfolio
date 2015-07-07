@extends('layouts.side_bar')

@section('pagetitle', 'blog')

@section('content')
    <div class="row">
        <div class="col-lg-12" style="text-align: center;">
            @if(Auth::check())
                <p>You logged in</p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header" style="text-align: center">
                <h1>Welcome To My Portfolio</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2 style="text-align: center;">Blog</h2>
        </div>
    </div>


    @foreach($articles as $article)

        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="blog/{{ $article->id }}">
                <h3 class="blog-title">{!! $article->title !!}</h3>
                <p class="blog-body">
                    {!! $article->body !!}
                </p>
                </a>
            </div>
        </div>
    @endforeach
@endsection