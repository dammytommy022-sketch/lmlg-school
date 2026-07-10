<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    require __DIR__.'/admin/user.php';
    require __DIR__.'/admin/post.php';
    require __DIR__.'/admin/gallery.php';
    require __DIR__.'/admin/slider.php';
    require __DIR__.'/admin/page-section.php';
    require __DIR__.'/admin/document-application.php';
    require __DIR__.'/admin/alumni-registration.php';

});