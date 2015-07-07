<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Bens Portfolio | @yield('pagetitle')</title>
    @include('partials.styles')
</head>
<body>
    @include('menus.navbar')
    @section('partials.sidebar')
    @show
    <div class="container">
        <div class="row">
            @include('flash::message')
            @yield('partials.flash')
        </div>
        @yield('content')
    </div>
    @include('partials.footer')
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    @include('partials.includes')
</body>
</html>