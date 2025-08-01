<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\clienteController;
 

Route::apiResource('categorias', categoriaController::class);
Route::apiResource('clientes', clienteController::class);