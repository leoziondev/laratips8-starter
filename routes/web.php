<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutUsController::class, 'index'])->name('about-us');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('profile', [HomeController::class, 'index'])->name('profile');
    Route::get('change-password', [HomeController::class, 'index'])->name('change-password');
});
