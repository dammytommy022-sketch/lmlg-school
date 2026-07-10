<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlumniRegistration;

class AlumniRegistrationController extends Controller
{
    public function index()
    {
        $registrations = AlumniRegistration::latest()->paginate(15);

        return view('pages.admin.alumni-registrations.index', compact('registrations'));
    }

    public function show(AlumniRegistration $alumni_registration)
    {
        return view('pages.admin.alumni-registrations.show', ['registration' => $alumni_registration]);
    }
}
