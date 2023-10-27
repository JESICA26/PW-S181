@extends('layouts.plantilla')
@section('titulo','libros')
@section('registro')
    <link rel="stylesheet" href="css/styles.css">   
   
    <form class="container">
        <fieldset disabled>
          <legend>Registro de libro:</legend>
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
            <label for="disabledTextInput" class="form-label">ISBN:</label>
            <input type="text" name="txtIsbn" class="form-control"value="{{old('txtIsbn')}}" >
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtIsbn')}} </p>
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Titulo:</label>
            <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtTitulo')}} </p>
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Autor:</label>
            <input type="text" class="form-control"value="{{old('txtAutor')}}" >
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtAutor')}} </p>
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Paginas:</label>
            <input type="text"  class="form-control"value="{{old('txtPaginas')}}" >
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtPaginas')}} </p>
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Editorial:</label>
            <input type="text"  class="form-control" value="{{old('txtEditorial')}}">
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtEditorial')}} </p>
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Email de editorial:</label>
            <input type="text"  class="form-control"value="{{old('txtEeditorial')}}">
            <p class="text-danger fst-italic fw-semibold">{{$errors->first('txtEeditorial')}} </p>
          </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>
      </div>
  </div >


@endsection
