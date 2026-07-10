<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentApplication;
use Illuminate\Support\Facades\Storage;

class DocumentApplicationController extends Controller
{
    public function index()
    {
        $applications = DocumentApplication::latest()->paginate(15);

        return view('pages.admin.document-applications.index', compact('applications'));
    }

    public function show(DocumentApplication $document_application)
    {
        return view('pages.admin.document-applications.show', ['application' => $document_application]);
    }

    public function download(DocumentApplication $document_application)
    {
        abort_unless($document_application->identification_path, 404);

        return Storage::download($document_application->identification_path);
    }
}
