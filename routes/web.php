<?php

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
});
*/
//modulo de inicio
Route::get('/','ControllerProducto@index')->name('pro.index');
//modulo de producto
Route::get('/adminProductos','ControllerProducto@adminProductos')->name('pro.adminProductos');
//BOTON NUEVO PRODUCTO
Route::get('/nuevoProducto','ControllerProducto@nuevoProducto')->name('pro.nuevoProducto');