<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; // Impor ProfileController

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [ProfileController::class, 'profile']);
