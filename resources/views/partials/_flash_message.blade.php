@if (Session::has('flash_message'))
    <div class="flash_message">
        <h3>{{ Session::get('flash_message') }}Article Created</h3>
    </div>
@endif

