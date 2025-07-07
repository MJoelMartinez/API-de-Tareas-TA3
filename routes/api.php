<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TareaController;

Route::get('/tarea',[
    TareaController::class, 'ListarTodas'
]);

Route::get('/tarea/{id}',[
    TareaController::class, 'Buscar'
]);

Route::post('/tarea',[
    TareaController::class, 'Crear'
]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
