<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DocumentApplicationController;

Route::middleware(['permission:view certificates'])
    ->name('admin.')
    ->group(function () {

        Route::resource('document-applications', DocumentApplicationController::class)->only(['index', 'show']);

        Route::get('document-applications/{document_application}/download', [DocumentApplicationController::class, 'download'])
            ->name('document-applications.download');
});
