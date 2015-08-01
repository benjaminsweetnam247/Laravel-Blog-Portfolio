@extends('templates.sidebar')

@section('page-title')
    <h2>Login</h2>
@endsection

@section('main')
        <!-- resources/views/auth/login.blade.php -->
<div class="auth-form">
    {!! Form::open(array('url'=>'auth/login','method'=>'POST','files'=>true)) !!}
    <div>
        {!! $errors->first('email') !!}
        {!! $errors->first('password') !!}
    </div>
    <div>
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email') !!}
    </div>
    <div>
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password') !!}
    </div>
    <div>
        {!! Form::label('remember', 'Remember Me:') !!}
        {!! Form::checkbox('remember') !!}
    </div>
    {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
</div>

@endsection