<?php

namespace App\Http\Controllers;// lugar de trabajo que se

use Illuminate\Http\Request; //importacion de recuest
use App\Http\Requests\validadorFormRecuerdos;

class diarioController extends Controller//crear las funciones
{
    public function metodoInicio(){
        return view('welcome');

    }
    public function metodoFormulario(){
        return view('Formulario');
    }
    public function metodoRecuerdos(){
        return view('Recuerdos');
    }
  
    public function guardarRecuerdo(validadorFormRecuerdos $req)
    {


        return redirect('/form')->with('confirmacion','Tu recuerdo llego al controlador');
/*
$validate =$req->validate([
    'txtTitulo' =>'required|max:25',
    'txtRecuerdo' =>'required|min:4',
]);
*/


        return $req->all();
/*
        echo "<p>";
        echo $req->ip();
        echo" - ";
        echo $req->path();
        echo" - ";
        echo $req->method();
        echo" - ";
        echo $req->input('txtTitulo');
        echo" - ";
        echo $req->url();
        echo"</p>";
        */
    }

    
}