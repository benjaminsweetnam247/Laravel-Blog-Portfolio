@extends('layouts.full_page')

@section('pagetitle', 'Gallery')

@section('content')
    <h1>My Gallery</h1>
    @foreach($pictures as $picture)
        @if($picture->gallery)
            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object" src="{{ asset('images/'.$picture->file) }}" alt=""/>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{ $picture->title }}</h4>
                    {{ $picture->description }}
                </div>
            </div>
        @endif
    @endforeach

    <div class="row">
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="#" class="thumbnail">
                <img src="http://lorempixel.com/400/200" alt="random image">
            </a>
        </div>
    </div>

@endsection