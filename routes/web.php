<?php

use Illuminate\Support\Facades\Route;
//use \Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutUsController::class, 'index'])->name('about-us');
Route::get('contact', [ContactUsController::class, 'index'])->name('contact-us');

Route::get('contact/submit', function() {
    session()->flash('alertMessage', 'Contact form submit successfully!');

    return redirect()->route('contact-us');
})->name('contact-submit');
