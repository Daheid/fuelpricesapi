<?php

use App\Http\Controllers\AreasController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//Ruta para filtrar precios
Route::get('/prices/filter/eia', [PricesController::class, 'filter']);
Route::get('/areas/filter/eia', [AreasController::class, 'index']);
Route::get('/products/filter/eia', [ProductsController::class, 'index']);
