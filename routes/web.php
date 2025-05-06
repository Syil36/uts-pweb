<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('login');
});

Route::get('/', [PageController::class, 'login']);

Route::post('/login', [PageController::class, 'handleLogin']);

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
