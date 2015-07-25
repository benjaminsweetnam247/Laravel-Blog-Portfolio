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
            <h2>Page title</h2>
        </div>
        <article>
            <h3>Article title</h3>
            <p>Article Body Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </article>
    </main>
    @include('partials._sidebar')
    @include('partials._footer')
</div>
</body>
</html>