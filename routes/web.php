<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SalleController;
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

Route::group(['middleware' => 'auth'], function () {

    Route::resource('salle', SalleController::class);

    Route::resource('client', ClientController::class);

    Route::resource('reservation', ReservationController::class);
    Route::get('/dashboard', 'DashboardController@index');
    // ...
});

Route::get('/login', 'Auth\LoginController@index');


Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('accueil');
})->middleware(['auth', 'verified'])->name('accueil');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');

require __DIR__.'/auth.php';
