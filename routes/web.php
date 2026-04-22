<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ctrlDatos;
use App\Http\Controllers\ctrlProductos;
use App\Http\Controllers\ctrlCategoria;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/datos', [ctrlDatos::class, 'AccesoDatos']);

//Vista con datos link
Route::get('/datoslink', [ctrlDatos::class, 'AccesoDatosLink']);

Route::get('/datosmundoiti', [ctrlDatos::class, 'AccesoDatosLinkMundoITI']);

Route::get('/datosjc', [ctrlDatos::class, 'AccesoDatosJC']);

Route::get('/datosjc/{id}', [ctrlDatos::class, 'detalle'])->name('datos.detalle');

Route::get('/Productos', [ctrlProductos::class, 'index'])->name('Productos.index');
Route::get('/Productos/create', [ctrlProductos::class, 'create'])->name('Productos.create');
Route::post('/Productos', [ctrlProductos::class, 'store'])->name('Productos.store');
Route::get('/Productos/{product}/edit', [ctrlProductos::class, 'edit'])->name('Productos.edit');
Route::put('/Productos/{product}', [ctrlProductos::class, 'update'])->name('Productos.update');
Route::delete('/Productos/{product}', [ctrlProductos::class, 'destroy'])->name('Productos.destroy');

Route::get('/Categorias', [ctrlCategoria::class, 'index'])->name('Categorias.index');
Route::get('/Categorias/create', [ctrlCategoria::class, 'create'])->name('Categorias.create');
Route::post('/Categorias', [ctrlCategoria::class, 'store'])->name('Categorias.store');
Route::get('/Categorias/{category}/edit', [ctrlCategoria::class, 'edit'])->name('Categorias.edit');
Route::put('/Categorias/{category}', [ctrlCategoria::class, 'update'])->name('Categorias.update');
Route::delete('/Categorias/{category}', [ctrlCategoria::class, 'destroy'])->name('Categorias.destroy');

require __DIR__.'/auth.php';
