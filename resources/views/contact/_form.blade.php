{!! Form::open(array('url' => 'contact', 'method'=>'POST')) !!}
{!! Form::label('name', 'Name:') !!}
{!! Form::text('name') !!}
{!! Form::submit('Submit') !!}
{!! Form::close() !!}