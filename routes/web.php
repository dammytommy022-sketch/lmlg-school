<?php

use App\Http\Controllers\AlumniRegistrationController;
use App\Http\Controllers\DocumentApplicationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Models\GalleryImage;
use App\Models\PageSection;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home', [
        'sliders' => Slider::active()->orderBy('sort_order')->orderBy('id')->get(),
        'galleryImages' => GalleryImage::orderBy('sort_order')->orderBy('id')->take(8)->get(),
    ]);
})->name('home');
Route::get('/about', function () {
    return view('pages.about', [
        'sections' => PageSection::forPage('about')->get()->keyBy('section_key'),
    ]);
})->name('about');
Route::get('/academics', function () {
    return view('pages.academics', [
        'sections' => PageSection::forPage('academics')->get()->keyBy('section_key'),
    ]);
})->name('academics');
Route::get('/admissions', function () {
    return view('pages.admissions', [
        'sections' => PageSection::forPage('admissions')->get()->keyBy('section_key'),
    ]);
})->name('admissions');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/gallery', function () {
    return view('pages.gallery', [
        'images' => GalleryImage::orderBy('sort_order')->orderBy('id')->get(),
    ]);
})->name('gallery');
Route::get('/contact', function () {
    return view('pages.contact', [
        'sections' => PageSection::forPage('contact')->get()->keyBy('section_key'),
    ]);
})->name('contact');
Route::get('/donate', function () {
    return view('pages.donate', [
        'sections' => PageSection::forPage('donate')->get()->keyBy('section_key'),
    ]);
})->name('donate');
Route::get('/alumni', function () {
    return view('pages.alumni', [
        'sections' => PageSection::forPage('alumni')->get()->keyBy('section_key'),
    ]);
})->name('alumni');
Route::post('/alumni', [AlumniRegistrationController::class, 'store'])->name('alumni.store');
Route::get('/documents', function () {
    return view('pages.documents', [
        'sections' => PageSection::forPage('documents')->get()->keyBy('section_key'),
    ]);
})->name('documents');
Route::post('/documents', [DocumentApplicationController::class, 'store'])->name('documents.store');
Route::get('/sponsorship', function () {
    return view('pages.sponsorship', [
        'sections' => PageSection::forPage('sponsorship')->get()->keyBy('section_key'),
    ]);
})->name('sponsorship');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
