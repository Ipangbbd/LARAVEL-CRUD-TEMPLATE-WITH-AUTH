<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CategoryController;

// ==================== Auth Routes ====================
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

// ==================== Protected Routes (auth perlu cok) ====================
Route::middleware('auth')->group(function () {
    Route::get('/home', [LoginRegisterController::class, 'home'])->name('home');

    Route::get('/', function () {
        return redirect()->route('home');
    });

    Route::resource('posts', PostController::class);
    Route::resource('genres', GenreController::class);
    Route::resource('categories', CategoryController::class);
});
