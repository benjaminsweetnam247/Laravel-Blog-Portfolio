
<div class="form-group">
    {!! Form::label('name', 'Your Name') !!}
    {!! Form::text('name', null, array('required',
    'class'=>'form-control',
    'placeholder'=>'Your Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('from_address', 'Email:') !!}
    {!! Form::email('from_address', null, array('required',
    'class'=>'form-control',
    'placeholder'=>'Your Email Address')) !!}
</div>

<div class="form-group">
    {!! Form::label('message', 'Your Message:') !!}
    {!! Form::text('message', null, array('required',
    'class'=>'form-control',
    'placeholder'=>'Your Message')) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
