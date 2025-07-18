<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//http://127.0.0.1:8000/api/URI
//http://127.0.0.1:8000/api/products

//Obtener datos
Route::get('/products',[ProductController::class, 'index']);
//Enviar datos -> Guardar 
Route::post('/products',[ProductController::class, 'store']);
//Actualizar datos
Route::put('/product/{id}',[ProductController::class, 'update']);
//Eliminar datos -> delete
Route::delete('/product/{id}',[ProductController::class, 'destroy']);
