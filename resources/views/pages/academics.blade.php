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
            <li>Academics</li>
        </ul>
    </div>
</div>

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
                <img src="/assets/images/about/pic1.jpg" class="img-fluid rounded" alt="Pupils learning in class">
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['curriculum']->heading }} <span>{{ $sections['curriculum']->heading_accent }}</span></h2>
            <p>{{ $sections['curriculum']->body }}</p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-child text-primary"></i></div>
                        <h5>Early Years Foundation</h5>
                        <small class="d-block">Play-based learning, early communication, counting, motor skills, and social confidence.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-pencil text-primary"></i></div>
                        <h5>Lower Primary</h5>
                        <small class="d-block">Reading fluency, writing, number confidence, curiosity, and positive learning habits.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-graduation-cap text-primary"></i></div>
                        <h5>Upper Primary</h5>
                        <small class="d-block">Deeper subject mastery, leadership, exam readiness, teamwork, and independence.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['learning-areas']->heading }} <span>{{ $sections['learning-areas']->heading_accent }}</span></h2>
            <p>{{ $sections['learning-areas']->body }}</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="school-card">
                    <h5><i class="fa fa-book text-primary"></i> English Studies</h5>
                    <p>Phonics, reading, grammar, writing, speaking, listening, and comprehension.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="school-card">
                    <h5><i class="fa fa-calculator text-primary"></i> Mathematics</h5>
                    <p>Number work, shapes, measurement, reasoning, mental maths, and problem-solving.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="school-card">
                    <h5><i class="fa fa-flask text-primary"></i> Basic Science</h5>
                    <p>Observation, experiments, health, environment, technology, and discovery.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="school-card">
                    <h5><i class="fa fa-laptop text-primary"></i> ICT</h5>
                    <p>Digital awareness, responsible technology use, keyboard skills, and creativity.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="school-card">
                    <h5><i class="fa fa-globe text-primary"></i> Social Studies</h5>
                    <p>Citizenship, culture, community, safety, civic responsibility, and respect.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="school-card">
                    <h5><i class="fa fa-paint-brush text-primary"></i> Creative Arts</h5>
                    <p>Drawing, crafts, music, performance, handwriting, and creative expression.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="school-card">
                    <h5><i class="fa fa-heart text-primary"></i> Moral Education</h5>
                    <p>Integrity, discipline, kindness, responsibility, honesty, and good conduct.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="school-card">
                    <h5><i class="fa fa-futbol-o text-primary"></i> Physical Education</h5>
                    <p>Fitness, movement, teamwork, sportsmanship, coordination, and healthy habits.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="/assets/images/our-services/pic1.jpg" class="img-fluid rounded" alt="Teacher supporting pupils">
            </div>
            <div class="col-lg-6 col-md-12 heading-bx left">
                <h2 class="title-head">{{ $sections['methodology']->heading }} <span>{{ $sections['methodology']->heading_accent }}</span></h2>
                <h5>{{ $sections['methodology']->subheading }}</h5>
                <p>{{ $sections['methodology']->body }}</p>
                <ul class="list-check">
                    <li>Interactive classroom teaching and practical demonstrations</li>
                    <li>Continuous assessment to track progress and close learning gaps</li>
                    <li>Small group support for pupils who need extra guidance</li>
                    <li>Extension activities for pupils ready for greater challenge</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 heading-bx left">
                <h2 class="title-head">{{ $sections['extracurricular']->heading }} <span>{{ $sections['extracurricular']->heading_accent }}</span></h2>
                <h5>{{ $sections['extracurricular']->subheading }}</h5>
                <p>{{ $sections['extracurricular']->body }}</p>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-check">
                            <li>Literacy and reading clubs</li>
                            <li>Creative arts and crafts</li>
                            <li>Debate and public speaking</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-check">
                            <li>Sports and fitness</li>
                            <li>Cultural activities</li>
                            <li>Leadership responsibilities</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="/assets/images/event/pic2.jpg" class="img-fluid rounded" alt="Pupils in extracurricular activities">
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['facilities']->heading }} <span>{{ $sections['facilities']->heading_accent }}</span></h2>
            <p>{{ $sections['facilities']->body }}</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/our-services/pic11.jpg" alt="Classrooms"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-university text-primary"></i></div>
                        <h5>Conducive Classrooms</h5>
                        <small class="d-block">Well-organized spaces for focused teaching, reading, writing, and collaboration.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/our-services/pic21.jpg" alt="Library"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-book text-primary"></i></div>
                        <h5>Reading Resources</h5>
                        <small class="d-block">Books and learning materials that support literacy and independent discovery.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="action-box"><img src="/assets/images/our-services/pic31.jpg" alt="Play and sports area"></div>
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-shield text-primary"></i></div>
                        <h5>Safe School Environment</h5>
                        <small class="d-block">A secure and supervised environment where pupils can learn, play, and thrive.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['why-stand-out']->heading }} <span>{{ $sections['why-stand-out']->heading_accent }}</span></h2>
            <p>{{ $sections['why-stand-out']->body }}</p>
        </div>
        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fa fa-star"></i>
                    </div>

                    <h5>Excellence Driven</h5>

                    <p>
                        High expectations supported by quality teaching and continuous
                        pupil development.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fa fa-users"></i>
                    </div>

                    <h5>Dedicated Teachers</h5>

                    <p>
                        Passionate educators committed to nurturing every child's
                        academic and personal growth.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fa fa-check-circle"></i>
                    </div>

                    <h5>Character Focused</h5>

                    <p>
                        We cultivate integrity, discipline, respect, responsibility,
                        and good citizenship every day.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>

                    <h5>Future Ready</h5>

                    <p>
                        Preparing pupils with confidence, creativity, leadership, and
                        skills for lifelong learning.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-area section-sp1 ovpr-dark bg-fix" style="background-image:url(/assets/images/background/bg1.jpg);">
    <div class="container">
        <div class="row text-white">
            <div class="col-lg-8 col-md-12 heading-bx left">
                <h2 class="title-head">{{ $sections['cta']->heading }} <span>{{ $sections['cta']->heading_accent }}</span></h2>
                <p>{{ $sections['cta']->body }}</p>
            </div>
            <div class="col-lg-4 col-md-12 text-lg-right text-center align-self-center">
                <a href="{{ $sections['cta']->cta_link }}" class="btn radius-xl">{{ $sections['cta']->cta_label }}</a>
                <a href="{{ route('contact') }}" class="btn radius-xl btn-light">Contact Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
