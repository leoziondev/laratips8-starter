<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;

//Route::get('/', function () {
////    return "Hello World";
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('about-us', [AboutUsController::class, 'index']);

Route::view('direct-view', 'welcome');

Route::get('another', function() {
    return 'from another route';
});

Route::get('user/{username?}', function($username = null) {
    return "Hello " . $username;
});

Route::redirect('foo', 'bar');

Route::get('bar', function() {
    return "Redirect route foo to bar";
});

Route::fallback(function() {
    return "fallback section";
});
