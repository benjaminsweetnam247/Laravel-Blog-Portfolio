@extends('layouts.full_page')

@section('content')
    <div class="container container-fluid">
            <div class="col-md-6 text-center center-block">
                <h1>{{$email->name}}</h1>
            <a class="btn btn-info form-control" href="{{ route('message.create', [$email->id]) }}">{{$email->from_address}}</a>
            {!! Form::model($email, ['method' => 'DELETE', 'route' => ['contact.destroy', $email->id]]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

