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
                <form class="contact-bx" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><input name="full_name" type="text" required class="form-control" placeholder="Full Name (while in school)"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="graduation_year" type="text" required class="form-control" placeholder="Year of Graduation"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="dob" type="date" required class="form-control" placeholder="Date of Birth"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="class_teacher" type="text" class="form-control" placeholder="Class Teacher (if known)"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="document_type" required class="form-control">
                                    <option value="">Select Document</option>
                                    <option>Primary School Certificate</option>
                                    <option>Testimonial</option>
                                    <option>Confirmation Letter of Attendance</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="delivery_option" required class="form-control">
                                    <option value="">Select Delivery Option</option>
                                    <option>Digital Copy (Email)</option>
                                    <option>Physical Pickup</option>
                                    <option>Courier Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="d-block">Supporting Identification</label>
                                <input name="identification" type="file" class="form-control">
                            </div>
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
