<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register')->middleware('guest');
Route::get('/login', [SessionsController::class, 'create'])->name('login')->middleware('guest');


Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store')->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::post('/logout', [SessionsController::class, 'destroy'])->name('logout')->middleware('auth');
