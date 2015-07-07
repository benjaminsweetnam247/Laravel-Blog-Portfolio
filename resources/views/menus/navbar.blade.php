<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="navbar-btn"><a href="/">Blog</a></li>
            <li class="navbar-btn"><a href="{{ url('about/') }}">About Me</a></li>
            <li class="navbar-btn"><a href="{{ route('gallery.index') }}">Gallery</a></li>
            <li class="navbar-btn"><a href="/contact">Contact</a></li>
        </ul>
        @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown navbar-btn">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Admin Commands<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('blog.create') }}">New Blog Article</a></li>
                    <li><a href="{{ route('gallery.create') }}">Add Picture</a></li>
                    <li><a href="{{ route('mail.create') }}">New Mail</a></li>
                    <li><a href="{{ route('mail.index') }}">Sent Mail</a></li>
                    <li><a href="/auth/logout">Logout</a></li>
                </ul>
            </li>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right">
            <li class="navbar-btn"><a href="{{ url('auth/login/') }}">Login</a></li>
        </ul>
        @endif
    </div>
</nav>
