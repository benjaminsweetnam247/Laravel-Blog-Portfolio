<div>
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}
</div>
<div>
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description') !!}
</div>
<div>
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div>
    {!! Form::submit('Submit') !!}

</div>