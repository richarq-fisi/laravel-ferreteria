<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi tienda en Laravel 6.x')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-1tymk6x9Y5K+OF0tlmG2fDRcn67QGzBkiM3IgtJ3VrtGrIi5ryhHjKjeeS60f1FA" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Gupter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    @include('store.partials.nav')

    @yield('content')

    @include('store.partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pinterest_grid.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>