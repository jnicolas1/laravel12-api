<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::getOrPaginate();
        //$tasks->with('user'); // Cargar la relación 'user' para evitar N+1      
        return response()->json($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        /*$request->validate([
            'body' => 'required',
            'user_id' => 'nullable|exists:users,id', // Asegurarse de que el user_id exista en la tabla users
        ]);*/
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //$task = Task::find($task);
        return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        /*$request->validate([
            'body' => 'required',
            'user_id' => 'nullable|exists:users,id', // Asegurarse de que el user_id exista en la tabla users
        ]);*/
        //$task = Task::find($task);
        $task->update($request->all());
        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //$task = Task::find($task);
        $task->delete();
        return response()->json(null, 204);
    }
}
