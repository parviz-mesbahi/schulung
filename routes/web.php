<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('under_construction');
});

//Route::get('/landingpage', function () {
//    return view('landingpage');
//});
Route::get('/landingpage', [LandingPageController::class, 'show'])->name('landingpage');

Route::get('/links', function () {
    return view('links');
});

Route::get('/impressum', function () {
    return view('impressum');
});

Route::get('/datenschutz', function () {
    return view('datenschutz');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
