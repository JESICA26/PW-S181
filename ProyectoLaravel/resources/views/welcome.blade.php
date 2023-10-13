@extends('layouts.plantilla')
@section('titulo', 'Inicio')
@section('contenido')
 <h1 class="display-1 text-center text-danger">HOME</h1>
<x-offcanvas></x-offcanvas>

<x-mensaje  mensaje="Este es el welcome" fecha="11/10/23"> </x-mensaje>
@endsection
