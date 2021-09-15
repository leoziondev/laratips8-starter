<?php

use Illuminate\Support\Facades\Route;
//use \Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutUsController::class, 'index'])->name('about-us');
Route::get('contact', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('contact', [ContactUsController::class, 'store'])->name('contact-us.store');
