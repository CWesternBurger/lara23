<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ctrlCategoriaAPI;
use App\Http\Controllers\Api\ctrlProductoAPI;

Route::apiResource('categories', ctrlCategoriaAPI::class);
Route::apiResource('products', ctrlProductoAPI::class);