@extends('templates.sidebar')

@section('page-title')
    <h2>Login</h2>
    @endsection

@section('main')
<!-- resources/views/auth/password.blade.php -->
<div class="auth-form">
    {!! Form::open(array('url'=>'password/email','method'=>'POST','files'=>true)) !!}
    <div>
        {!! $errors->first('email') !!}
    </div>
    <div>
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email') !!}
    </div>
    {!! Form::submit('Send Password Reset Link') !!}
    {!! Form::close() !!}
</div>
@endsection