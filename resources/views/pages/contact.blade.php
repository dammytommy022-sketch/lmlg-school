@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('/assets/images/banner/banner2.jpg');">
    <div class="container">
        <div class="page-banner-entry text-center text-white pt-5">
            <h1>{{ $sections['banner']->heading }}</h1>
            <p>{{ $sections['banner']->body }}</p>
        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-card text-center">
                    <h4><i class="fa fa-map-marker text-primary"></i> Visit Us</h4>
                    <p>Lagos Mainland, Lagos State, Nigeria.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-card text-center">
                    <h4><i class="fa fa-phone text-primary"></i> Call Us</h4>
                    <p>School Office: +234 800 000 0000</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="feature-card text-center">
                    <h4><i class="fa fa-envelope-o text-primary"></i> Email Us</h4>
                    <p>info@lmlgprimaryschool.com</p>
                </div>
            </div>
        </div>

        <div class="row align-items-start mt-4">
            <div class="col-lg-7 col-md-12 mb-4">
                <div class="heading-bx left">
                    <h2 class="title-head">{{ $sections['enquiry']->heading }} <span>{{ $sections['enquiry']->heading_accent }}</span></h2>
                    <p>{{ $sections['enquiry']->body }}</p>
                </div>
                <form class="contact-bx">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><input name="name" type="text" required class="form-control" placeholder="Parent/Guardian Name"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="phone" type="text" required class="form-control" placeholder="Phone Number"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><input name="email" type="email" class="form-control" placeholder="Email Address"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="subject" class="form-control">
                                    <option>Admission Enquiry</option>
                                    <option>Academic Information</option>
                                    <option>Donation or Partnership</option>
                                    <option>General Enquiry</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><textarea name="message" rows="6" class="form-control" placeholder="How can we help?"></textarea></div>
                        </div>
                        <div class="col-md-12">
                            <button name="submit" type="submit" value="Submit" class="btn radius-xl">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="heading-bx left">
                    <h2 class="title-head">{{ $sections['office-hours']->heading }} <span>{{ $sections['office-hours']->heading_accent }}</span></h2>
                </div>
                <ul class="list-check">
                    <li>Monday to Friday: 8:00am - 4:00pm</li>
                    <li>Admissions Desk: 9:00am - 3:00pm</li>
                    <li>Parent Meetings: By appointment</li>
                    <li>Closed on weekends and public holidays</li>
                </ul>
                <div class="mt-4">
                    <img src="/assets/images/about/pic11.jpg" class="img-fluid rounded" alt="School contact">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
