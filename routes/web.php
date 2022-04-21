<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[ ProductoController::class , 'index']);
Route::get('producto',[ ProductoController::class , 'index'])->name('producto');
Route::get('producto/create',[ ProductoController::class , 'create'])->name('producto.create');
Route::post('producto/store',[ ProductoController::class , 'store'])->name('producto.store');
Route::get('producto/edit/{producto}',[ ProductoController::class , 'edit']);
Route::post('producto/update/{producto}',[ ProductoController::class , 'update']);
Route::get('producto/destroy/{producto}',[ ProductoController::class , 'destroy']);