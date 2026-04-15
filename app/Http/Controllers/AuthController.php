<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Muestra la vista que contiene login Y registro
    
    public function loginForm()
{
    return view('auth.login'); // Con punto para subcarpeta
}

   
    // Procesa el formulario de REGISTRO
   public function register(Request $request)
{
    try {
        // Validar
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        // Intentar crear usuario
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'username' =>$validatedData['email'],
            'user_type' =>'user',
        ]);
        
        // Si llega aquí, el usuario se creó
        return redirect()->route('homa');
        
    } catch (\Exception $e) {
        // Si hay error, lo mostramos
        dd('ERROR: ' . $e->getMessage());
    }

    auth()->login($user);
    return redirect()-route('homa');
}

//login

public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('homa'); // O a donde quieras redirigir
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }




}