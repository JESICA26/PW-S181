<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LibroController;// instruccion que se necesita para hacer el controlador 
 Route::controller(LibroController::class)->group(function(){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/registro', 'metodoRegistro')->name('apodoRegistro');
    Route::post('/guardarLibro','guardarlibro')->name('apodoguardarLi');
 });




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', function () {
    return view('registro');
});
*/