<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\AuthController;

 

Route::apiResource('categorias', categoriaController::class);
Route::apiResource('clientes', clienteController::class);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);