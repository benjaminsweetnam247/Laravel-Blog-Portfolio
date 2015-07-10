@if(Auth::check())
        <ul>
            <li><a data-toggle="offcanvas" class="visible-xs text-center" href="#"><i class="glyphicon glyphicon-chevron-left"></i></a></li>
        </ul>
        <div class="sidebar-offcanvas" id="sidebar" role="navigation">
        <ul class="nav hidden-xs" id="lg-menu">
            <li><a href="{{ route('blog.create') }}">New Blog Article</a></li>
            <li><a href="{{ route('gallery.create') }}">Add Picture</a></li>
            <li><a href="{{ route('mail.create') }}">New Mail</a></li>
            <li><a href="{{ route('mail.index') }}">Sent Mail</a></li>
            <li><a href="/auth/logout">Logout</a></li>
        </ul>
@else
        <ul class="nav navbar-nav navbar-right">
            <li class="navbar-btn"><a href="{{ url('auth/login/') }}">Login</a></li>
        </ul>
        </div>
@endif

