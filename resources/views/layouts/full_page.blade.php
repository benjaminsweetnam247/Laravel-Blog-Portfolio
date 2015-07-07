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

    <div class="container-fluid">
        @include('flash::message')
        @yield('partials.flash')
        @yield('content')
    </div>
    @include('partials.footer')

    @include('partials.includes')
</body>
</html>