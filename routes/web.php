<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController; // Impor ProfileController

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', [UserController::class, 'profile']);
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::put('/user/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/show/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/', [UserController::class, 'index'])->name('user.index'); 
Route::get('/', [UserController::class, 'index'])->name('user.list');
