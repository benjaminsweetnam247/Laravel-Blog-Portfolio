@extends('layouts.full_page')

@section('content')
    <div class="page-header">
        <h1>Sent Mail</h1>
    </div>
    @foreach($messages as $letter)

        <h4>{{ $letter->name }}<br/>{{ $letter->email }}</h4>
        <p>{{ $letter->subject }}</p>
        <p>{{ $letter->message }}</p>
    @endforeach
@endsection