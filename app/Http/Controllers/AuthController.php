<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'usuario' => 'required', // Faltaba la asignación de regla acá
            'correo' => [
                'required',
                'email',
                'regex:/^[A-Za-z0-9._%+-]+@gmail\.com$/'
            ],
            // Agregamos 'confirmed' para validar contra password_confirmation
            'password' => 'required|min:6|confirmed',
        ], [
            // Opcional: Mensajes en español si no tenés configurado el locale
            'password.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        User::create([
            'name' => $request->usuario,
            'email' => $request->correo,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/?vista=registro')->with('ok', 'Usuario creado correctamente');
    }

    public function login(Request $request)
    {


        // ✅ VALIDACIÓN
        $request->validate([
            'usuario' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = User::where('name', $request->usuario)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            session([
                'id_usuario' => $user->id,
                'nombre_usuario' => $user->name
            ]);

            return redirect('/home');
        }

        return redirect('/?vista=login')->with('error', 'Credenciales incorrectas');
    }
}
