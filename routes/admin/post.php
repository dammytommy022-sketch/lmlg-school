<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

Route::middleware(['permission:manage news'])
    ->name('admin.')
    ->group(function () {

        Route::resource('posts', PostController::class)->except('show');
});
