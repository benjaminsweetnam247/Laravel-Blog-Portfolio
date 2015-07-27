@extends('templates.sidebar')

@section('page-title')
    <h2>Gallery</h2>
@endsection

@section('main')
    <div class="gallery">
    @foreach($images as $image)
            <div class="gallery-item">
                <a href="{{ url('/gallery/'.$image->id) }}">
                <h3>{{ $image->title }}</h3>
                <img src="{{ asset('/images/thumb-'.$image->image) }}" alt="">
                <p>{{ $image->description }}</p>
                </a>
            </div>
    @endforeach
    </div>
@endsection


