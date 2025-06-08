<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Listado de usuarios',
        ]);
    }

    public function store(Request $request)
    {
        // Aquí podrías validar y crear un nuevo usuario
        return response()->json([
            'message' => 'Usuario creado'
        ]);
    }

    public function show($user)
    {
        // Aquí podrías buscar un usuario por su ID
        return response()->json([
            'message' => "Usuario recuperado: $user"
        ]);
    }

    public function update(Request $request, $user)
    {
        // Aquí podrías actualizar un usuario por su ID
        return response()->json([
            'message' => "Usuario actualizado: $user"
        ]);
    }

    public function destroy($user)
    {
        // Aquí podrías eliminar un usuario por su ID
        return response()->json([
            'message' => "Usuario eliminado: $user"
        ]);
    }
}
