<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PegawaiController;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('pegawais', PegawaiController::class);
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [PegawaiController::class, 'dashboard'])->name('dashboard');
