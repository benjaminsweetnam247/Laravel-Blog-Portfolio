<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="wrap">
    @include('partials._header')
    @include('partials._navbar')

    <main>
        <div class="page-title">
            @yield('page-title')
        </div>
    @yield('main')
    </main>
    @include('partials._sidebar')
    @include('partials._footer')
</div>
</body>
</html>