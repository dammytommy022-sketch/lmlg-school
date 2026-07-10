<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AlumniRegistrationController;

Route::middleware(['permission:view alumni'])
    ->name('admin.')
    ->group(function () {

        Route::resource('alumni-registrations', AlumniRegistrationController::class)->only(['index', 'show']);
});
