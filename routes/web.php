<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ctrlDatos;

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

Route::get('/datoslinkmundoiti', [ctrlDatos::class, 'AccesoDatosLinkMundoITI']);

require __DIR__.'/auth.php';

