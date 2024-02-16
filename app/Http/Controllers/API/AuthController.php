<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Método para registrar un nuevo usuario
    public function register(Request $request)
    {
        // Validar los datos del request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear el usuario con los datos del request
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Devolver el usuario creado y un token de API
        return response()->json([
            'user' => $user,
            'token' => $user->createToken('api')->plainTextToken,
        ], 201);
    }

    // Método para iniciar sesión de un usuario
    public function login(Request $request)
    {
        // Validar los datos del request
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Buscar el usuario por el email
        $user = User::where('email', $request->email)->first();

        // Verificar que el usuario exista y que la contraseña coincida
        if (!$user || !Hash::check($request->password, $user->password)) {
            // Lanzar una excepción de validación
            throw ValidationException::withMessages([
                'email' => ['Las credenciales son incorrectas.'],
            ]);
        }

        // Revocar los tokens anteriores del usuario
        $user->tokens()->delete();

        // Devolver el usuario y un nuevo token de API
        return response()->json([
            'user' => $user,
            'token' => $user->createToken('api')->plainTextToken,
        ]);
    }

    // Método para cerrar sesión de un usuario
    public function logout(Request $request)
    {
        // Revocar el token actual del usuario
        $request->user()->currentAccessToken()->delete();

        // Devolver una respuesta vacía
        return response()->json([], 204);
    }
}
