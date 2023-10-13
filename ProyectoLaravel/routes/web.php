<?php



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


Route::get('/form', function () {
    return view('formulario');
 });
 

 Route::get('/recuerdos', function () {
    return view('recuerdos');
 });
 



//Ruttas de vista


Route::view('/', 'welcome')->name('apodoinicio');
Route::view('/form', 'formulario') ->name('apodoFormulario');
Route::view('/v1','vista1')->name('apodoVista');

*/


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

Route::get('/',  [diarioController::class,'metodoinicio'])->name('apodoInicio');

Route::get('form',  [diarioController::class,'metodoFormulario'])->name('apodoFormulario');
Route::get('loquequieroolvidar',  [diarioController::class,'metodoRecuerdos'])->name('apodorecuerdos');