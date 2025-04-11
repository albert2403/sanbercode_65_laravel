<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/register', [FormController::class, 'register'])->name('register');
Route::post('/welcome', [FormController::class, 'welcome'])->name('welcome');

Route::prefix('genre')->name('genre.')->group(function () {
    Route::get('/', [GenreController::class, 'index'])->name('index');
    Route::get('/create', [GenreController::class, 'create'])->name('create');
    Route::post('/', [GenreController::class, 'store'])->name('store');
    Route::get('/{id}', [GenreController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [GenreController::class, 'edit'])->name('edit');
    Route::put('/{id}', [GenreController::class, 'update'])->name('update');
    Route::delete('/{id}', [GenreController::class, 'destroy'])->name('destroy');
});