<h1>Messages</h1>
<div class="messages">
    <p> you have {{ $emails->count() }} new message(s)</p>
    @foreach($emails as $email)
        <div class="row text-center">
            <div class="col-md-3">
            <a href="{{ route("contact.show", array($email->id)) }}">
            <h3>{{ $email->name }}</h3>
            <p>{{ str_limit($email->message, 20) }}</p>
        </a>
        {!! Form::model($email, ['method' => 'DELETE', 'route' => ['contact.destroy', $email->id]]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger form-control']) !!}
        {!! Form::close() !!}
        </div>
        </div>
    @endforeach
</div>