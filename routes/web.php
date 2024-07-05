<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/download', [HomeController::class,'downloadCV']);
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/forget-password', function () {
    return view('auth.forget-password');
});
Route::get('/reset-password', function () {
    return view('auth.reset-password');
});
Route::group(['middleware'=>'auth','prefix'=>'admin','as'=>'admin.'],function(){

Route::get('/dashboard', function () {
    return view('admin.dashboard');
}
)->name('dashboard');
route::resource('profile',ProfileController::class)->only(['index','edit','update','destroy'])->names('profile');
route::resource('hero',HeroController::class)->except(['show'])->names('hero');
route::resource('courses',CourseController::class)->except(['show'])->names('courses');
route::resource('skills',SkillController::class)->except(['show'])->names('skills');
route::resource('projects',ProjectController::class)->except(['show'])->names('projects');
});

require __DIR__.'/auth.php';
