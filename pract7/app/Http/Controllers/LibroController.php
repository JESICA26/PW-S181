<?php

namespace App\Http\Controllers;// lugar de trabajo que se

use Illuminate\Http\Request; //importacion de recuest
use App\Http\Requests\validadorFormLibros;

class LibroController extends Controller//crear las funciones
{
    public function metodoInicio(){
        return view('welcome');

    }
    public function metodoRegistro(){
        return view('registro');
    }
    
  
    public function guardarlibro (validadorFormLibros $req)
    {

    /*
    $validate =$req->validate([
        'txtIsbn' =>'required|numeric|digits_between:1,13',
        'txtPaginas' =>'required|numeric',
        'txtEeditorial' =>'required|email',
    ]);
    */
    
        $nombreLibro=$req->input('txtTitulo');

        return redirect('/registro')->with('Mensaje','Los datos han sido agregados correctamente');



   
    }

    
}