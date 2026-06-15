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
        
 'usuario',
    'correo' => [
        'required',
        'email',
        'regex:/^[A-Za-z0-9._%+-]+@gmail\.com$/'
    ],
    'password' => 'required|min:6',
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
