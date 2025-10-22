<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('landingpage');});

Route::get('/dashboard', [PageController::class, 'index'])->name('dashboard');

Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/login', function () {return view('login');});

Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

Route::post('/login', [PageController::class, 'login'])->name('login');

Route::get('/logout', [PageController::class, 'logout'])->name('logout');

Route::post('/logout', [PageController::class, 'logout'])->name('logout');