@extends('templates.sidebar')

@section('page.title')
    <h1>Register</h1>
    @endsection
    @section('main')
<!-- resources/views/auth/reset.blade.php -->

<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    <div>
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <input type="password" name="password">
    </div>

    <div>
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">
            Reset Password
        </button>
    </div>
</form>

@endsection