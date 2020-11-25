<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administracion;
use App\Http\Controllers\administracion\presentacion;
use App\Http\Controllers\inventarioperro\productos;
use App\Http\Controllers\inventariogato\producto;

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

Route::get('/', [Administracion::class, 'index']) ;
Route::get('empresa/historia', [presentacion::class, 'historia']);
Route::get('empresa/mision-vision', [presentacion::class, 'mision']);

Route::get('productosperro/alimentos', [productos::class, 'alimentos']);
Route::get('productosgato/alimento', [producto::class, 'alimento']);
Route::get('contactanos', function () {
    return view('contactos');
});


