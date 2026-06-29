<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/academics', fn() => view('pages.academics'))->name('academics');
Route::get('/admissions', fn() => view('pages.admissions'))->name('admissions');
Route::get('/news', fn() => view('pages.news'))->name('news');
Route::get('/gallery', fn() => view('pages.gallery'))->name('gallery');
Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::get('/donate', fn() => view('pages.donate'))->name('donate');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
