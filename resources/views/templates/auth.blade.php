<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="wrap">
    <main>
        <div class="page-title">
            @yield('page-title')
        </div>
        @yield('main')
    </main>
</div>
</body>
</html>