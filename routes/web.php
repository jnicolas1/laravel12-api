<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    $data = [
        'body' => 'Prueba de tarea 2',
        'user_id' => 1, // Asumiendo que el usuario con ID 1 existe
    ];

    /*$task = new Task();
    $task->body = 'Tarea de prueba';
    $task->user_id = 1; // Asumiendo que el usuario con ID 1 existe
    $task->save();*/
    $task = Task::create($data);

    return $task;
});
