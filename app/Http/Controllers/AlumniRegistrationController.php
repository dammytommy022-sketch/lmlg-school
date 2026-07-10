<?php

namespace App\Http\Controllers;

use App\Models\AlumniRegistration;
use Illuminate\Http\Request;

class AlumniRegistrationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'school_name' => 'required|string|max:255',
            'current_name' => 'nullable|string|max:255',
            'class_set' => 'required|string|max:100',
            'country' => 'required|string|max:255',
            'contact' => 'nullable|string|max:255',
            'profession' => 'nullable|string|max:255',
        ]);

        AlumniRegistration::create($data);

        return redirect()->route('alumni')
            ->with('status', 'Thank you for registering. Welcome back to the LMLG family!');
    }
}
