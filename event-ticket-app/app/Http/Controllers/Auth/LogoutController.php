<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout(); // Deconectează utilizatorul

        $request->session()->invalidate(); // Invalidarea sesiunii
        $request->session()->regenerateToken(); // Regenerarea token-ului de sesiune

       return view('auth.login'); // Redirect către pagina principală sau altă pagină dorită după logout
    }
}
