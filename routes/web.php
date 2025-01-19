<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

// Routes untuk autentikasi bawaan Laravel
Auth::routes();

// Route untuk halaman home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route tambahan untuk login menggunakan LoginController
Route::post('/login', [LoginController::class, 'authenticate']);
