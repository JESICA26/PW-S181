@extends('layouts.plantilla')
@section('titulo','form')
@section('contenido')

  <h1 class="display-1 text-center text-primary">Formulario</h1>
  <div class="container mt-5 col-md-6">
    @if(session()->has('confirmacion'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{session('confirmacion')}}</strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>

    @endif

    @if($errors->any())
      @foreach ($errors->all() as $error)

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{$error}}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endforeach
    @endif

    <div class="card ">
      <div class="card-header fs-4 fw-medium text-primary text-center">
        Registra aqui tu libro:
      </div>
      <div class="card-body">
        <form method="POST" action="/guardarLibro">

        @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo:</label>
            <input type="text" name="txtTitulo"class="form-control" value="{{old('txtTitulo')}}" >
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtTitulo')}} </p>

          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Autor:</label>
            <input type="text" name="txtAutor"class="form-control" value="{{old('txtAutor')}}" >
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtAutor')}} </p>

          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Paginas:</label>
            <input type="text" name="txtPaginas"class="form-control" value="{{old('txtPaginas')}}" >
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtPaginas')}} </p>

          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editorial:</label>
            <input type="text" name="txtEditorial"class="form-control" value="{{old('txtEditorial')}}" >
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtEditorial')}} </p>

          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email de Biblioteca:</label>
            <input type="text" name="txtEmail"class="form-control" value="{{old('txtEmail')}}">
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtEmail')}} </p>
            ..
          </div>


      </div>
      <div class="card-footer text-body-secondary text-center">
        <div class="d-grid gap-2">
          <button class="btn btn-primary" type="text">Submit</button>
        </div>
        </form>
      </div>
  </div >
  @endsection