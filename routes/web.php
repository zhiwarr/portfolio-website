<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/forget-password', function () {
    return view('auth.forget-password');
});
Route::get('/reset-password', function () {
    return view('auth.reset-password');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::middleware('auth')->group(function () {

});

// require __DIR__.'/auth.php';