<?php

use App\Http\Controllers\AreasController;
use App\Http\Controllers\PricesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Ruta para filtrar precios
Route::post('/prices/filter/eia', [PricesController::class, 'filter']);
Route::post('/areas/filter/eia', [AreasController::class, 'index']);
Route::post('/products/filter/eia', [ProductsController::class, 'index']);
