<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;

Route::middleware(['permission:manage sliders'])
    ->name('admin.')
    ->group(function () {

        Route::resource('sliders', SliderController::class)->except('show');
});
