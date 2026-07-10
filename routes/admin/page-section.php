<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageSectionController;

Route::middleware(['permission:manage pages'])
    ->name('admin.')
    ->group(function () {

        Route::resource('page-sections', PageSectionController::class)->only(['index', 'edit', 'update']);
});
