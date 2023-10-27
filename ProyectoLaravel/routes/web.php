<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;// instruccion que se necesita para hacer el controlador 
 Route::controller(diarioController::class)->group(function(){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/form', 'metodoFormulario')->name('apodoFormulario');
    Route::get('/recu','metodoRecuerdos')->name('apodoRecuedo');
    Route::post('/guardarRe','guardarRecuerdo')->name('apodoguardarRe');
 });


/*
//Rutas tipo Peticion
Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('Formulario');
});
Route::get('/recu', function () {
    return view('Recuerdos');
});

//Vita
Route::view('/','welcome')-> name('apodoInicio');
Route::view('/form','Formulario')-> name('apodoFormulario');
Route::view('/recu','Recuerdos')-> name('apodoRecuerdos');
Route::view('/v1','vista1')-> name('apodoVista1');
*/
