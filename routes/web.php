<?php

use App\Http\Controllers\SalleController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClientController;
use App\Models\Salle;
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
//Route::view('/', 'accueil');
Route::get('/', [AccueilController::class, 'index']);

Route::resource('salle', SalleController::class);

Route::resource('client', ClientController::class);

