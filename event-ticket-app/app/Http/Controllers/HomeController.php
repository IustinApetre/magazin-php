<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{ function getHome(){
    $events = Event::all(); // Sau altă logică pentru a obține partenerii din baza de date
    return view('home.home',compact('events'));
}

}
