<?php

use App\Http\Controllers\ReferenciaController;
use App\Http\Controllers\CelularController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


// Route::get('/tcjulian', function () {
//     return view('empleado.index');
// });

//Route::get('tcjulian/create', [EmpleadoController::class,'create']);

Route::resource('/empleado', EmpleadoController::class);

Route::resource('/cliente', ClienteController::class);

Route::resource('/compra', CompraController::class);

Route::resource('/celular', CelularController::class);

Route::resource('/referencia', ReferenciaController::class);

Route::resource('/menu', MenuController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', [MenuController::class, 'index'])->name('home');

});
