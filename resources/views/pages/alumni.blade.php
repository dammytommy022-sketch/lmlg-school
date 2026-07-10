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
            <li>Alumni</li>
        </ul>
    </div>
</div>

<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['welcome']->heading }} <span>{{ $sections['welcome']->heading_accent }}</span></h2>
            <p>{{ $sections['welcome']->body }}</p>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['purpose']->heading }} <span>{{ $sections['purpose']->heading_accent }}</span></h2>
                <ul class="list-check">
                    <li>Reconnect former classmates</li>
                    <li>Preserve school history</li>
                    <li>Support alumni collaboration</li>
                    <li>Facilitate reunions and projects</li>
                    <li>Build a strong global community</li>
                </ul>
            </div>

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['info-included']->heading }} <span>{{ $sections['info-included']->heading_accent }}</span></h2>
                <ul class="list-check">
                    <li>Full Name (During School Years)</li>
                    <li>Current Name (if changed)</li>
                    <li>Year of Graduation/Class Set</li>
                    <li>Contact Information (Optional)</li>
                    <li>Country of Residence</li>
                    <li>Profession/Industry (Optional)</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="section-area section-sp2 ">
    <div class="container">
        <div class="row align-items-start">

            <div class="col-lg-5 col-md-12 mb-4">
                <div class="school-card h-100">
                    <h4>{{ $sections['privacy-commitment']->heading }}</h4>
                    <p>{{ $sections['privacy-commitment']->body }}</p>

                    <h4 class="mt-4">{{ $sections['join-database']->heading }}</h4>
                    <p class="mb-0">{{ $sections['join-database']->body }}</p>
                </div>
            </div>

            <div class="col-lg-7 col-md-12 mb-4">
                <div class="heading-bx left">
                    <h2 class="title-head">{{ $sections['register']->heading }} <span>{{ $sections['register']->heading_accent }}</span></h2>
                    <p>{{ $sections['register']->body }}</p>
                </div>
                <form class="contact-bx">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><input name="school_name" type="text" required class="form-control" placeholder="Full Name (During School Years)"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="current_name" type="text" class="form-control" placeholder="Current Name (if changed)"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="class_set" type="text" required class="form-control" placeholder="Year of Graduation/Class Set"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="country" type="text" required class="form-control" placeholder="Country of Residence"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="contact" type="text" class="form-control" placeholder="Contact Information (Optional)"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input name="profession" type="text" class="form-control" placeholder="Profession/Industry (Optional)"></div>
                        </div>
                        <div class="col-md-12">
                            <button name="submit" type="submit" value="Submit" class="btn radius-xl">Register Now</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection
