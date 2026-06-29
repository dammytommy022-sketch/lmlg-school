@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('assets/images/banner/banner2.jpg');">
    <div class="container">
        <div class="page-banner-entry text-center text-white pt-5">
            <h1>Admissions</h1>
            <p>Begin your child's journey in a caring, disciplined, and inspiring learning community.</p>
        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 heading-bx left">
                <h2 class="title-head">Join Our <span>School Community</span></h2>
                <h5>A simple, transparent admission process for parents and guardians.</h5>
                <p>
                    We welcome families who desire quality primary education, strong values,
                    dedicated teachers, and a safe learning environment where children can thrive.
                </p>
                <p>
                    Our admissions team is available to guide parents through enquiries,
                    school visits, documentation, assessment, and placement.
                </p>
                <a href="{{ route('contact') }}" class="btn radius-xl">Make an Enquiry</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="assets/images/our-services/pic2.jpg" class="img-fluid rounded" alt="Admission support">
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Admission <span>Steps</span></h2>
            <p>Clear guidance from first enquiry to classroom welcome.</p>
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
                <h2 class="title-head">Required <span>Documents</span></h2>
                <ul class="list-check">
                    <li>Completed admission form</li>
                    <li>Birth certificate or age declaration</li>
                    <li>Recent passport photographs</li>
                    <li>Previous school report, where applicable</li>
                    <li>Parent or guardian contact information</li>
                </ul>
            </div>
            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">Who Can <span>Apply?</span></h2>
                <p>
                    Applications are welcome for early years and primary classes, subject to
                    available spaces and appropriate placement.
                </p>
                <ul class="list-check">
                    <li>Children ready for nursery or primary learning</li>
                    <li>Transfer pupils from recognized schools</li>
                    <li>Families committed to school policies and child development</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp1 ovpr-dark bg-fix" style="background-image:url(assets/images/background/bg1.jpg);">
    <div class="container">
        <div class="row text-white">
            <div class="col-md-8 heading-bx left">
                <h2 class="title-head">Ready to <span>Apply?</span></h2>
                <p>
                    Speak with our admissions office to confirm available spaces,
                    visit dates, and the next steps for your child.
                </p>
            </div>
            <div class="col-md-4 text-md-right text-center align-self-center">
                <a href="{{ route('contact') }}" class="btn radius-xl">Contact Admissions</a>
            </div>
        </div>
    </div>
</section>
@endsection
