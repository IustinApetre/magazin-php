<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Afișează formularul de înregistrare
    }

    public function register(Request $request)
    {
        // Validează datele introduse de utilizator pentru înregistrare
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // Creează un nou utilizator în baza de date
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Autentifică automat utilizatorul după înregistrare
        Auth::login($user);

        // Redirect după înregistrare reușită
        return redirect('/login');
    }
}
