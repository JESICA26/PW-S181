
@extends('layouts.plantilla')
@section('titulo','login')
@section('contenido')


    <h1>Iniciar Sesión</h1>
    <form action="procesar_login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        
        <input type="submit" value="Iniciar Sesión">
    </form>



@endsection