<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
   
    @include('partials.navb')
    @yield('contenido')
    @yield('registro')
    @include('partials.footer')
    <title>@yield('titulo')</title>

</body>
</html>