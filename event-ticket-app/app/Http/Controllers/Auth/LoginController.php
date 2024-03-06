<?php

namespace App\Http\Controllers\Auth;
use App\Models\Event;
use App\Models\Partner;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Afiseaza formularul de login
    }

    public function login(Request $request)
    {


        // Valideaza datele introduse de utilizator
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Incercarea de autentificare
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect dupa autentificare reusita
            if (Auth::user()->admini){
                return redirect()->intended('/homeAdmin');

            } else { return redirect()->intended('/viewClientInterface');

            }

        }

        // Redirect daca autentificarea a esuat
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


}

