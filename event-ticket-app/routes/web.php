<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;


// Route pentru afișarea formularului de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route pentru procesarea datelor de login
Route::post('/login', [LoginController::class, 'login']);
// Route pentru afișarea formularului de înregistrare

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route pentru procesarea datelor de înregistrare

Route::post('/register', [RegisterController::class, 'register']);
// Route pentru logout

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('auth.login'); // Redirecționare către pagina de login
});

Route::get('/home', function () {
    return view('home.home');
})->name('home');

Route::get('/homeAdmin', function () {
    return view('home.homeAdmin');
})->name('homeAdmin');

Route::get('/manageAdmin', [\App\Http\Controllers\AdminController::class, 'manageAdmin'])->name('manageAdmin');

Route::post("/changeRole", [\App\Http\Controllers\AdminController::class, 'changeRole'])->name('changeRole');

Route::get('/createEvent', [\App\Http\Controllers\EventController::class, 'showCreateEventForm'])->name('createEvent');

Route::get('/viewClientInterface',[\App\Http\Controllers\HomeController::class,'getHome'])->name('viewClientInterface');

Route::get('/createPartner',[\App\Http\Controllers\AdminController::class,'createPartner'])->name('createPartner');

Route::get('/createSponsor',[\App\Http\Controllers\AdminController::class,'createSponsor'])->name('createSponsor');

Route::post('/storePartner',[\App\Http\Controllers\EventController::class, 'storePartner'])->name('storePartner');
Route::post('/storeSponsor',[\App\Http\Controllers\EventController::class, 'storeSponsor'])->name('storeSponsor');
Route::get('/storePartner', function () {
    return view('event.createPartner');})->name('storePartner');
Route::get('/storeSponsor', function () {
    return view('event.createSponsor');})->name('storeSponsor');
Route::get('/createEvent', [\App\Http\Controllers\EventController::class, 'createEvent'])->name('createEvent');
Route::post('/storeEvent', [\App\Http\Controllers\EventController::class, 'storeEvent'])->name('storeEvent');
Route::get("/mainEventPage", [\App\Http\Controllers\EventController::class,'show'])->name('mainEventPage');
Route::get("/sponsorEventPage", [\App\Http\Controllers\EventController::class,'showSponsors'])->name('sponsorEventPage');
Route::get("/partnerEventPage", [\App\Http\Controllers\EventController::class,'showPartners'])->name('partnerEventPage');
Route::get("/agendaEventPage", [\App\Http\Controllers\EventController::class,'showAgenda'])->name('agendaEventPage');
Route::get("/contactEventPage", [\App\Http\Controllers\EventController::class,'showContact'])->name('contactEventPage');
Route::delete("/deleteEvent",[\App\Http\Controllers\EventController::class, 'destroy' ])->name('deleteEvent');
Route::get('/editPageEvent',[\App\Http\Controllers\EventController::class, "editPageEvent"])->name('editPageEvent');
Route::put('/updateEvent/{id}', [\App\Http\Controllers\EventController::class,"update"])->name('updateEvent');
Route::post('/addToCart', [\App\Http\Controllers\CartController::class,"addToCart"])->name('addToCart');
Route::get('/cart',[\App\Http\Controllers\CartController::class,"viewCart"])->name('cart');
Route::delete('/checkOut', [\App\Http\Controllers\CartController::class,'checkOut'])->name('checkOut');
Route::get('/submitForm',[\App\Http\Controllers\EventController::class,'submitForm'])->name('submitForm');

