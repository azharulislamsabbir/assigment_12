<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AuthanticationController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('home', [LayoutController::class, 'home'])->name('home');
Route::get('deshboard', [LayoutController::class, 'deshbordshow'])->name('deshboard');



Route::resource('trips', TripController::class);
Route::resource('users', UserController::class);
Route::resource('tickets', TicketController::class);
Route::resource('locations', LocationController::class);