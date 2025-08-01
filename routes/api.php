<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TareaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CategoriaController;

Route::get('/tarea',[
    TareaController::class, 'ListarTodas'
]);

Route::get('/tarea/{id}',[
    TareaController::class, 'Buscar'
]);

Route::post('/tarea',[
    TareaController::class, 'Crear'
]);

Route::delete('/tarea/{id}',[
    TareaController::class, 'Eliminar'
]);

Route::put('/tarea/{id}',[
    TareaController::class, 'Modificar'
]);

Route::get('/comentario/{id}',[
    ComentarioController::class, 'ListarComentariosDeUnaTarea'
]);

Route::post('/comentario',[
    ComentarioController::class, 'Ingresar'
]);

Route::get('/categoria/{id}',[
    CategoriaController::class, 'ListarCategoriasDeUnaTarea'
]);

Route::post('/categoria',[
    CategoriaController::class, 'Asignar'
]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
