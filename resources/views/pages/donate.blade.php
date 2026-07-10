@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('/assets/images/banner/banner3.jpg');">
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
            <li>Donation</li>
        </ul>
    </div>
</div>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 heading-bx left">
                <h2 class="title-head">{{ $sections['why-support']->heading }} <span>{{ $sections['why-support']->heading_accent }}</span></h2>
                <h5>{{ $sections['why-support']->subheading }}</h5>
                @foreach ($sections['why-support']->body_paragraphs as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
                <a href="{{ $sections['why-support']->cta_link }}" class="btn radius-xl">{{ $sections['why-support']->cta_label }}</a>
                <a href="{{ route('contact') }}" class="btn radius-xl">Speak With Us</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="/assets/images/adv/adv.png" class="img-fluid rounded" alt="School support and development">
            </div>
        </div>
    </div>
</section>
{{--
<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Current <span>Projects</span></h2>
            <p>Choose a focused area where your support can create visible and lasting impact.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/our-services/pic11.jpg" alt="Classroom development"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-university text-primary"></i></div>
                        <h5>Classroom Development</h5>
                        <small class="d-block">Furniture, boards, repairs, ventilation, paint, and child-friendly classroom upgrades.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/our-services/pic21.jpg" alt="Library improvement"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-book text-primary"></i></div>
                        <h5>Library Improvement</h5>
                        <small class="d-block">Reading corners, storybooks, reference materials, shelves, and literacy support.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/courses/pic3.jpg" alt="Learning materials"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-pencil text-primary"></i></div>
                        <h5>Learning Materials</h5>
                        <small class="d-block">Exercise books, teaching aids, charts, workbooks, creative supplies, and classroom tools.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/event/pic2.jpg" alt="Sports equipment"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-futbol-o text-primary"></i></div>
                        <h5>Sports Equipment</h5>
                        <small class="d-block">Balls, kits, cones, tracks, games materials, and resources for healthy competition.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/courses/pic4.jpg" alt="ICT development"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-laptop text-primary"></i></div>
                        <h5>ICT Development</h5>
                        <small class="d-block">Computers, digital learning tools, basic ICT exposure, and teacher support resources.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/courses/pic5.jpg" alt="Scholarship support"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-heart text-primary"></i></div>
                        <h5>Scholarship Support</h5>
                        <small class="d-block">Uniforms, school supplies, welfare support, and assistance for deserving pupils.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
--}}
<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['ways-helps']->heading }} <span>{{ $sections['ways-helps']->heading_accent }}</span></h2>
            <p>{{ $sections['ways-helps']->body }}</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card text-center">
                    <h2><i class="fa fa-check-circle text-primary"></i></h2>
                    <span>Better Learning Spaces</span>
                    <p>Improved classrooms help pupils focus, participate, and learn with dignity.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card text-center">
                    <h2><i class="fa fa-book text-primary"></i></h2>
                    <span>More Resources</span>
                    <p>Books and materials make lessons more engaging, practical, and effective.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card text-center">
                    <h2><i class="fa fa-child text-primary"></i></h2>
                    <span>Pupil Support</span>
                    <p>Support helps reduce barriers for children who need extra assistance.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="feature-card text-center">
                    <h2><i class="fa fa-line-chart text-primary"></i></h2>
                    <span>Long-Term Impact</span>
                    <p>Every improvement strengthens the school for present and future pupils.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="donation-form" class="section-area section-sp2">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-5 col-md-12 heading-bx left">
                <h2 class="title-head">{{ $sections['pledge-form']->heading }} <span>{{ $sections['pledge-form']->heading_accent }}</span></h2>
                <h5>{{ $sections['pledge-form']->subheading }}</h5>
                <p>{{ $sections['pledge-form']->body }}</p>
                <ul class="list-check">
                    <li>For old pupils and alumni groups</li>
                    <li>For parents and well-wishers</li>
                    <li>For organizations and community partners</li>
                    <li>For project-based or general support</li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-12">
                <form class="contact-bx">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name / Organization">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Donor Category</option>
                                    <option>Old Pupil / Alumni</option>
                                    <option>Parent / Guardian</option>
                                    <option>Organization</option>
                                    <option>Well-wisher</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Donation Area</option>
                                    <option>Classroom Development</option>
                                    <option>Library Improvement</option>
                                    <option>Learning Materials</option>
                                    <option>Sports Equipment</option>
                                    <option>ICT Development</option>
                                    <option>Scholarship Support</option>
                                    <option>General School Support</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Proposed Amount / Item">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Message or donation details"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn radius-xl">Submit Pledge</button>
                            <a href="{{ route('contact') }}" class="btn radius-xl">Contact School Office</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{--
<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Frequently Asked <span>Questions</span></h2>
            <p>Helpful answers for donors, alumni groups, parents, and partner organizations.</p>
        </div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="ttr-accordion m-b30 faq-bx" id="donationFaq">
                    <div class="panel">
                        <div class="acod-head">
                            <h6 class="acod-title">
                                <a data-toggle="collapse" href="#faqOne" class="collapsed">Can I donate items instead of money?</a>
                            </h6>
                        </div>
                        <div id="faqOne" class="acod-body collapse" data-parent="#donationFaq">
                            <div class="acod-content">
                                Yes. The school welcomes useful items such as books, furniture,
                                sports materials, computers, uniforms, and approved learning resources.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="acod-head">
                            <h6 class="acod-title">
                                <a data-toggle="collapse" href="#faqTwo" class="collapsed">Can alumni support a specific project?</a>
                            </h6>
                        </div>
                        <div id="faqTwo" class="acod-body collapse" data-parent="#donationFaq">
                            <div class="acod-content">
                                Yes. Old pupils and alumni groups may support classroom renovation,
                                library development, ICT upgrades, scholarships, or other approved projects.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="acod-head">
                            <h6 class="acod-title">
                                <a data-toggle="collapse" href="#faqThree" class="collapsed">Will donors be acknowledged?</a>
                            </h6>
                        </div>
                        <div id="faqThree" class="acod-body collapse" data-parent="#donationFaq">
                            <div class="acod-content">
                                Donors and partner organizations may be formally acknowledged by the school,
                                depending on the nature of the contribution and agreed recognition process.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="acod-head">
                            <h6 class="acod-title">
                                <a data-toggle="collapse" href="#faqFour" class="collapsed">Who should I contact before making a donation?</a>
                            </h6>
                        </div>
                        <div id="faqFour" class="acod-body collapse" data-parent="#donationFaq">
                            <div class="acod-content">
                                Please contact the school office first so your donation can be properly
                                documented, directed to the right project, and received through official channels.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
--}}
<section class="section-area section-sp1 ovpr-dark bg-fix" style="background-image:url(/assets/images/background/bg1.jpg);">
    <div class="container text-center text-white">
        <h2>{{ $sections['thank-you']->heading }}</h2>
        <p>{{ $sections['thank-you']->body }}</p>
        <a href="{{ $sections['thank-you']->cta_link }}" class="btn radius-xl">{{ $sections['thank-you']->cta_label }}</a>
        <a href="{{ route('contact') }}" class="btn radius-xl btn-light">Contact Us</a>
    </div>
</section>
@endsection
