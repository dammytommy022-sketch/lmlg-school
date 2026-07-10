<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GalleryImageController;

Route::middleware(['permission:manage gallery'])
    ->name('admin.')
    ->group(function () {

        Route::resource('gallery', GalleryImageController::class)->except('show');
});
