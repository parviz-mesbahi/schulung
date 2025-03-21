<?php

use App\Http\Controllers\KontaktController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
//    return view('under_construction');
});


Route::get('/landingpage', [WebPageController::class, 'landingpage'])->name('landingpage');
Route::get('/datenschutz', [WebPageController::class, 'datenschutz'])->name('datenschutz');
Route::get('/impressum',   [WebPageController::class, 'impressum'])->name('impressum');
Route::get('/links', [WebPageController::class, 'links'])->name('links');


Route::get('/ueberuns', function () {
    return view('ueberuns');
});

Route::get('/kurse', function () {
    return view('kurse');
});

Route::get('/entwicklung', function () {
    return view('entwicklung');
});

Route::get('/home', function () {
return view('home');
});

//Route::get('/java', function () {
//    return view('java');
//});

//Route::get('/java/{id}', [WebPageController::class, 'java'])->name('java');
Route::get('/kurs/java/{title}', [WebPageController::class, 'java'])->name('kurs.java');
Route::get('/kurs/algorithmus/{title}', [WebPageController::class, 'algorithm'])->name('kurs.algorithm');
Route::get('/kurs/datenbank/{title}', [WebPageController::class, 'datenbank'])->name('kurs.datenbank');
Route::get('/kurs/springboot/{title}', [WebPageController::class, 'springboot'])->name('kurs.java');

//Route::get('/kontakt', [KontaktController::class, 'showForm'])->name('kontakt.form');
Route::post('/kontakt', [KontaktController::class, 'submitForm'])->name('kontakt.submit');


Route::get('/kurs/java', function () {
//    return redirect()->to('/kurs/java/ueber-kurs');
    return view('pagejava');
});
Route::get('/kurs/algorithmus', function () {
    return view('pagealgorithm');
});
Route::get('/kurs/datenbank', function () {
    return view('pagedatenbank');
});
Route::get('/kurs/springboot', function () {
    return view('pagespringboot');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

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
