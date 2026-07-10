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
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 heading-bx left">
                <h2 class="title-head">{{ $sections['intro']->heading }} <span>{{ $sections['intro']->heading_accent }}</span></h2>
                <h5>{{ $sections['intro']->subheading }}</h5>
                @foreach ($sections['intro']->body_paragraphs as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
                <a href="{{ $sections['intro']->cta_link }}" class="btn radius-xl">{{ $sections['intro']->cta_label }}</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="/assets/images/our-services/pic2.jpg" class="img-fluid rounded" alt="Admission support">
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['admission-steps']->heading }} <span>{{ $sections['admission-steps']->heading_accent }}</span></h2>
            <p>{{ $sections['admission-steps']->body }}</p>
        </div>
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center">
                    <div class="process-number">01</div>

                    <h5>Submit Enquiry</h5>

                    <p>
                        Contact the school office and share your child's basic information
                        to begin the admission process.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center">
                    <div class="process-number">02</div>

                    <h5>School Visit</h5>

                    <p>
                        Visit our campus to meet our staff, explore the classrooms,
                        and learn about our learning environment.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center">
                    <div class="process-number">03</div>

                    <h5>Assessment</h5>

                    <p>
                        Age-appropriate assessment to determine the child's learning
                        needs and suitable class placement.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-card text-center">
                    <div class="process-number">04</div>

                    <h5>Enrollment</h5>

                    <p>
                        Complete the admission requirements and receive confirmation
                        of your child's enrollment.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['required-documents']->heading }} <span>{{ $sections['required-documents']->heading_accent }}</span></h2>
                <ul class="list-check">
                    <li>Completed admission form</li>
                    <li>Birth certificate or age declaration</li>
                    <li>Recent passport photographs</li>
                    <li>Previous school report, where applicable</li>
                    <li>Parent or guardian contact information</li>
                </ul>
            </div>
            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['who-can-apply']->heading }} <span>{{ $sections['who-can-apply']->heading_accent }}</span></h2>
                <p>{{ $sections['who-can-apply']->body }}</p>
                <ul class="list-check">
                    <li>Children ready for nursery or primary learning</li>
                    <li>Transfer pupils from recognized schools</li>
                    <li>Families committed to school policies and child development</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp1 ovpr-dark bg-fix" style="background-image:url(/assets/images/background/bg1.jpg);">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-8 heading-bx left">
                <h2 class="title-head">{{ $sections['cta']->heading }} <span>{{ $sections['cta']->heading_accent }}</span></h2>
                <p>{{ $sections['cta']->body }}</p>
            </div>
            <div class="col-md-4 text-md-right text-center align-self-center">
                <a href="{{ $sections['cta']->cta_link }}" class="btn radius-xl">{{ $sections['cta']->cta_label }}</a>
            </div>
        </div>
    </div>
</section>
@endsection
