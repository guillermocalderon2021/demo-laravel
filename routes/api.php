<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\EditorialController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/prueba', function(){
    return "Esta es una respuesta de la API";
});

Route::get('/editoriales', [EditorialController::class, 'index']);
Route::get('/editoriales/{id}', [EditorialController::class, 'show']);
Route::post('/editoriales', [EditorialController::class, 'store']);