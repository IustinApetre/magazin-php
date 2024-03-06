<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class AdminController extends Controller
{
    public function manageAdmin(){
        $allUsers = User::all();
        return view('admin.manageAdmin', compact('allUsers'));
    }

    public function changeRole(Request $request)
    {
        $user = User::find($request->input('user_id'));

        // Invertește rolul utilizatorului
        $user->admini = !$user->admini;
        $user->save();

        return redirect()->back()->with('success', 'Rolul utilizatorului a fost schimbat cu succes!');
    }
   public function viewClientInterface(){
        return view('home.home');
   }
    public function createSponsor(){
        return view('event.createSponsor');
    }

    public function createPartner(){
        return view('event.createPartner');
    }
}

