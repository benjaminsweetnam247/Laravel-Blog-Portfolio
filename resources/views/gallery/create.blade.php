@extends('layouts.full_page')

@section('pagetitle', 'Gallery-AddPicture')

@section('content')
        <div class="page-header">
            <h1>Add Gallery Image</h1>
        </div>
        <div></div>
        {!! Form::open(array('route' => 'gallery.store', 'class' => 'form')) !!}
        @include('gallery._form', ['submitButtonText' => 'Submit Picture'])
        {!! Form::close() !!}
@endsection