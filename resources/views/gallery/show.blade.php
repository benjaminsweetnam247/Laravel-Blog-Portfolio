@extends('templates.sidebar')

@section('page-title')
    <h2>{{ $image->title }}</h2>
@endsection

@section('main')
    <div>
        <img style="max-width: 700px;" src="{{ asset('/images/'.$image->image) }}" alt="">
    </div>
    <div>
        <p>{{ $image->description }}</p>
    </div>
@endsection