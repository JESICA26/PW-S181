<?php

namespace App\Http\Controllers;

// importacion del request
use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function metodoInicio(){
      return view('welcome');
    }

    public function metodoFormulario(){
        return view('formulario');
    }
    public function metodoRecuerdos(){
        return view('recuerdos');
    }
   
}
