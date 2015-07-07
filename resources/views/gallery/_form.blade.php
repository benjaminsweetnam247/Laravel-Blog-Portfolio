<div class="form-group">
    {!! Form::label('name', 'Picture Name:') !!}
    {!! Form::text('name', null, array('required',
    'class'=>'form-control',
    'placeholder'=>'Picture Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, array('required',
    'class'=>'form-control',
    'placeholder'=>'Your Email Address')) !!}
</div>

<div class="form-group">
    {!! Form::label('picture', 'Picture:') !!}
    {!! Form::file('picture', null, array('required',
    'class'=>'form-control')) !!}
</div>

<div class="form-group">
    <p>Add To Gallery</p>
    <label class="toggle">
        <input name="gallery" type="checkbox" checked>
        <span class="handle"></span>
        </input>
    </label>
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>