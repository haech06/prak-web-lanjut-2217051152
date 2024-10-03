<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; // Impor ProfileController

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [UserController::class, 'profile']);
Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user/store', [UserController::class, 'store'])->name('user.store');
