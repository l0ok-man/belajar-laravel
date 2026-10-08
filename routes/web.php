<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::get('/categories', [CategoryController::class, 'index'])->name('kategori');
Route::get('/members', [MemberController::class, 'index'])->name('member');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
