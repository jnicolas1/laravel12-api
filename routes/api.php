<?php

use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'Hola desde la API de Laravel']);
});


Route::get('users/cursos', function () {
    return response()->json([
        'message' => 'Hola desde la API de Laravel'
    ]);
});
/*
//Listar registros
Route::get('users', [UserController::class , 'index']);
//Crear registros
Route::post('users', [UserController::class , 'store']);
//Recuperar un registro
Route::get('users', [UserController::class , 'show']);
//Actualizar un registro
Route::patch('users', [UserController::class , 'update']);
//Eliminar un registro
Route::delete('users', [UserController::class , 'destroy']);*/

Route::apiResource('users', UserController::class);
Route::apiResource('tasks', TaskController::class);