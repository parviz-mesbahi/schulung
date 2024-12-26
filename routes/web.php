<?php

use App\Http\Controllers\LessonController;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('under_construction');
});


Route::get('/landingpage', [WebPageController::class, 'landingpage'])->name('landingpage');
Route::get('/datenschutz', [WebPageController::class, 'datenschutz'])->name('datenschutz');
Route::get('/impressum', [WebPageController::class, 'impressum'])->name('impressum');
Route::get('/links', [WebPageController::class, 'links'])->name('links');


Route::get('/test', function () {
    return view('landingpage2');
});

Route::get('/home', function () {
return view('home');
});

//Route::get('/java', function () {
//    return view('java');
//});

Route::get('/java/{id}', [WebPageController::class, 'java'])->name('java');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::resource('lessons', LessonController::class);
//Route::resource('webs', WebPageController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('lessons', LessonController::class);
    Route::resource('webs', WebPageController::class);

});

//    Route::get('/lessons', [LessonController::class, 'index'])->name('webs.index');
//    Route::get('/lessons/create', [LessonController::class, 'create'])->name('webs.create');
//    Route::get('/lessons/update', [LessonController::class, 'create'])->name('webs.update');
//    Route::post('/lessons/store', [LessonController::class, 'store'])->name('webs.store');
//    Route::get('/lessons/{id}/edit', [LessonController::class, 'edit'])->name('webs.edit');

require __DIR__.'/auth.php';
