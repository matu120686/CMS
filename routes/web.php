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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('products', function () {
    return "Esta es la Ruta de Productos";
})->name('products.index');

Route::get('products/create', function () {
    return "Esta es la Ruta de Crear un Producto";
})->name('products.create');

Route::post('products', function () {
    //
})->name('products.store');

Route::get('products/{product}', function ($product) {
    return "Esta es la Ruta de Mostrar un Producto: {$product}";
})->name('products.show');

Route::get('products/{product}/edit', function ($product) {
    return "Esta es la Ruta de Editar un Producto: {$product}";
})->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}', function ($product) {
    //
})->name('products.update');

Route::delete('products/{product}', function ($product) {
    //
})->name('products.destroy');
