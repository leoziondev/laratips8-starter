<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Middleware\CheckAge;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about/{slug?}', [AboutUsController::class, 'index'])
//    ->middleware('above_age:10')
    ->name('about-us');

Route::get('post/{post}/comments/{comment}', function($post, $comment) {
    return "post";
})->name('post.comment');

// SIGNED URL WITHOUT MIDDLEWARE
//Route::get('secret', function(Request $request) {
//    if (! $request->hasValidSignature()) {
//        return redirect()->route('home');
//    }
//
//    return "This is a secret message!";
//})->name('secret');

// SIGNED URL WITH MIDDLEWARE
Route::get('secret', function() {
    return "This is a secret message!";
})->name('secret')->middleware('signed');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('profile', [HomeController::class, 'index'])->name('profile');
    Route::get('change-password', [HomeController::class, 'index'])->name('change-password');
});
