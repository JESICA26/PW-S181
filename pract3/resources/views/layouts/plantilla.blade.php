<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title> @yield('titulo')</title>
</head>
<body>
    @include('partials.navb')
    @yield('contenido')
</body>
</html>