<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        User::create([
            'name' => $request->usuario,
            'email' => $request->correo,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with('ok', 'Usuario creado correctamente');
    }

    public function login(Request $request)
    {
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
