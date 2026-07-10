@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('/assets/images/banner/banner1.jpg');">
    <div class="container">
        <div class="page-banner-entry text-center text-white pt-5">
            <h1>{{ $sections['banner']->heading }}</h1>
            <p>{{ $sections['banner']->body }}</p>
        </div>
    </div>
</section>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Document Application</li>
        </ul>
    </div>
</div>

<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['intro']->heading }} <span>{{ $sections['intro']->heading_accent }}</span></h2>
            <p>{{ $sections['intro']->body }}</p>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['available-documents']->heading }} <span>{{ $sections['available-documents']->heading_accent }}</span></h2>
                <ul class="list-check">
                    <li>Primary School Certificate</li>
                    <li>Testimonial</li>
                    <li>Confirmation Letter of Attendance</li>
                </ul>
            </div>

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['application-process']->heading }} <span>{{ $sections['application-process']->heading_accent }}</span></h2>
                <ul class="list-check">
                    <li>Complete the online application form</li>
                    <li>Provide accurate student details</li>
                    <li>Upload identification (if required)</li>
                    <li>Make applicable processing payment</li>
                    <li>Receive confirmation email</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row align-items-start">

            <div class="col-lg-5 col-md-12 mb-4">
                <div class="school-card h-100">
                    <h4>{{ $sections['processing-time']->heading }}</h4>
                    <p>{{ $sections['processing-time']->body }}</p>

                    <h4 class="mt-4">{{ $sections['delivery-options']->heading }}</h4>
                    <ul class="list-check mb-0">
                        <li>Digital Copy (Email)</li>
                        <li>Physical Pickup</li>
                        <li>Courier Delivery (where applicable)</li>
                    </ul>

                    <h4 class="mt-4">{{ $sections['need-help']->heading }}</h4>
                    <p class="mb-0">
                        {{ $sections['need-help']->body }}
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </p>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 mb-4">
                <div class="heading-bx left">
                    <h2 class="title-head">{{ $sections['application-form']->heading }} <span>{{ $sections['application-form']->heading_accent }}</span></h2>
                    <p>{{ $sections['application-form']->body }}</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <form class="contact-bx" method="POST" action="{{ route('documents.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><input name="full_name" type="text" value="{{ old('full_name') }}" required class="form-control" placeholder="Full Name (while in school)"></div>
                            @error('full_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="graduation_year" type="text" value="{{ old('graduation_year') }}" required class="form-control" placeholder="Year of Graduation"></div>
                            @error('graduation_year') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="dob" type="date" value="{{ old('dob') }}" required class="form-control" placeholder="Date of Birth"></div>
                            @error('dob') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="class_teacher" type="text" value="{{ old('class_teacher') }}" class="form-control" placeholder="Class Teacher (if known)"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="document_type" required class="form-control">
                                    <option value="">Select Document</option>
                                    <option {{ old('document_type') === 'Primary School Certificate' ? 'selected' : '' }}>Primary School Certificate</option>
                                    <option {{ old('document_type') === 'Testimonial' ? 'selected' : '' }}>Testimonial</option>
                                    <option {{ old('document_type') === 'Confirmation Letter of Attendance' ? 'selected' : '' }}>Confirmation Letter of Attendance</option>
                                </select>
                            </div>
                            @error('document_type') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="delivery_option" required class="form-control">
                                    <option value="">Select Delivery Option</option>
                                    <option {{ old('delivery_option') === 'Digital Copy (Email)' ? 'selected' : '' }}>Digital Copy (Email)</option>
                                    <option {{ old('delivery_option') === 'Physical Pickup' ? 'selected' : '' }}>Physical Pickup</option>
                                    <option {{ old('delivery_option') === 'Courier Delivery' ? 'selected' : '' }}>Courier Delivery</option>
                                </select>
                            </div>
                            @error('delivery_option') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="d-block">Supporting Identification</label>
                                <input name="identification" type="file" class="form-control">
                            </div>
                            @error('identification') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-md-12">
                            <button name="submit" type="submit" value="Submit" class="btn radius-xl">Submit Application</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
