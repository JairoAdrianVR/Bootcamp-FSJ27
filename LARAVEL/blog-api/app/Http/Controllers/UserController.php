<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Registar un nuevo usuario

   public function register(Request $request){

    try{
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password) // encryptar la contraseña
        ]);

        return response()->json([
            'message' => 'Usuario registrado exitosamente',
            'user' => $user
        ], 201);

    }catch (Exception $error ){
        return response()->json([
            'message' => 'Error al registrar el usuario',
            'error' => $error->getMessage()
        ], 500);

    };

   }

   public function login(Request $request){

    try{
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
        ]);

        // Extraemos las credenciales del request
        $credentials = $request->only('email','password');

        // Intentar autenticar al usuario
        // Auth::attempt() devuelve true si las credenciales son correctas
        if (Auth::attempt($credentials)) {
            // Si la autenticación es exitosa, obtenemos el usuario autenticado
            $user = $request->user();

            // Generamos el token de acceso
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'message' => 'Inicio de sesión exitoso',
                'user' => $user,
                'token' => $token
            ], 200);
        }

    } catch (Exception $error) {
        return response()->json([
            'message' => 'Error al iniciar sesión',
            'error' => $error->getMessage()
        ], 500);
    }


   }

}
