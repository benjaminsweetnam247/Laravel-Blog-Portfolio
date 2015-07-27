{!! Form::open(array('route' => 'blog.store', 'method'=>'POST', 'file'=>'true')) !!}
{!! Form::file('image') !!}
{!! Form::submit('Submit') !!}
{!! Form::close() !!}