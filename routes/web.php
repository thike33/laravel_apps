<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// トップページ
Route::view('/', 'index')->name('top');

// ユーザー
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
