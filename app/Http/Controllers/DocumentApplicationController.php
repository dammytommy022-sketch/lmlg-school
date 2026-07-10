<?php

namespace App\Http\Controllers;

use App\Models\DocumentApplication;
use Illuminate\Http\Request;

class DocumentApplicationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'graduation_year' => 'required|string|max:50',
            'dob' => 'required|date',
            'class_teacher' => 'nullable|string|max:255',
            'document_type' => 'required|string|max:255',
            'delivery_option' => 'required|string|max:255',
            'identification' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
        ]);

        if ($request->hasFile('identification')) {
            // Stored on the private disk since this is a personal ID document,
            // not a public asset — only downloadable via the authenticated
            // admin route.
            $data['identification_path'] = $request->file('identification')->store('document-applications');
        }

        unset($data['identification']);

        DocumentApplication::create($data);

        return redirect()->route('documents')
            ->with('status', 'Your application has been submitted. We will contact you with next steps.');
    }
}
