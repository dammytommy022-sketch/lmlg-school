@extends('layouts.app')

@section('content')

<section class="page-banner ovbl-dark" style="background-image:url('/assets/images/banner/banner2.jpg');">
    <div class="container">
        <div class="page-banner-entry text-center text-white pt-5">
            <h1>{{ $sections['banner']->heading }}</h1>
            <p>
                {{ $sections['banner']->body }}
            </p>
        </div>
    </div>
</section>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>About</li>
        </ul>
    </div>
</div>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="/assets/images/our-services/pic2.jpg" class="img-fluid rounded" alt="School leadership and pupils">
            </div>
            <div class="col-lg-6 col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['intro']->heading }} <span>{{ $sections['intro']->heading_accent }}</span></h2>
                <h5>{{ $sections['intro']->subheading }}</h5>
                @foreach ($sections['intro']->body_paragraphs as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
            
        </div>
    </div>
</section>
<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 heading-bx left">
                <h2 class="title-head">{{ $sections['history']->heading }}</h2>
                @foreach ($sections['history']->body_paragraphs as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="row g-4">

                    <div class="col-sm-6">
                        <div class="counter-card text-center">
                            <h2>60+</h2>
                            <p>Years of Service</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="counter-card text-center">
                            <h2>5,000+</h2>
                            <p>Alumni Network</p>
                        </div>
                    </div>

                    <div class="col-sm-6 pt-3">
                        <div class="counter-card text-center">
                            <h2>35+</h2>
                            <p>Community Projects</p>
                        </div>
                    </div>

                    <div class="col-sm-6 pt-3">
                        <div class="counter-card text-center">
                            <h2>2,200+</h2>
                            <p>Pupils Supported</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
{{--
<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Vision, Mission & <span>Core Values</span></h2>
            <p>Clear principles guide how we teach, lead, serve, and care for every child.</p>
        </div>
        
        <div class="row g-4">

            <div class="col-lg-4">
                <div class="school-card">
                    <div class="mb-3">
                        <i class="fa fa-eye fa-2x text-primary"></i>
                    </div>

                    <h4> Our Vision</h4>

                    <p class="mb-0">
                        To be a model government primary school recognized for academic
                        excellence, character development, responsible citizenship, and
                        community transformation.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="school-card">
                    <div class="mb-3">
                        <i class="fa fa-bullseye fa-2x text-primary"></i>
                    </div>

                    <h4>Our Mission</h4>

                    <p class="mb-0">
                        To provide quality foundational education in a safe, inclusive,
                        and stimulating environment where every child can learn, grow,
                        and discover their potential.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="school-card">
                    <div class="mb-3">
                        <i class="fa fa-star fa-2x text-primary"></i>
                    </div>

                    <h4>Core Values</h4>

                    <ul class="list-check mb-0">
                        <li>Excellence</li>
                        <li>Integrity</li>
                        <li>Discipline</li>
                        <li>Respect</li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>

        </div>
        
    </div>
</section>
--}}

<section class="section-area section-sp2">
    <div class="container">
        <div class="row">

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['core-values']->heading }} <span>{{ $sections['core-values']->heading_accent }}</span></h2>
                <ul class="list-check">
                    <li><strong>Excellence</strong> – Striving for the highest standards in learning and conduct</li>
                    <li><strong>Discipline</strong> – Building responsible and respectful citizens</li>
                    <li><strong>Integrity</strong> – Upholding honesty and strong moral values</li>
                    <li><strong>Community</strong> – Encouraging unity and lifelong relationships</li>
                    <li><strong>Service</strong> – Giving back to society</li>
                </ul>
            </div>

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['impact']->heading }} <span>{{ $sections['impact']->heading_accent }}</span></h2>
                <ul class="list-check">
                    <li>Thousands of alumni globally</li>
                    <li>Strong community heritage</li>
                    <li>Foundation for lifelong learning</li>
                    <li>Multi-generational educational influence</li>
                </ul>
            </div>

        </div>
    </div>
</section>
<section class="section-area section-sp2 ">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">{{ $sections['mandate']->heading }} <span>{{ $sections['mandate']->heading_accent }}</span></h2>
            <p>
                {{ $sections['mandate']->body }}
            </p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-book text-primary"></i></div>
                        <h5>Quality Learning</h5>
                        <small class="d-block">Strong literacy, numeracy, science, creativity, and lifelong learning habits.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-shield text-primary"></i></div>
                        <h5>Safe Environment</h5>
                        <small class="d-block">A supervised school setting where pupils feel protected, valued, and respected.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-heart text-primary"></i></div>
                        <h5>Character Formation</h5>
                        <small class="d-block">Discipline, honesty, respect, responsibility, service, and care for others.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-users text-primary"></i></div>
                        <h5>Community Partnership</h5>
                        <small class="d-block">Working with parents, alumni, government, and partners to strengthen outcomes.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['legacy-project']->heading }} <span>{{ $sections['legacy-project']->heading_accent }}</span></h2>
                <p>{{ $sections['legacy-project']->body }}</p>
                <ul class="list-check">
                    <li>Development of a modern school website</li>
                    <li>Re-engineering of the school library</li>
                    <li>Strengthening alumni engagement</li>
                    <li>Creating sustainable educational resources</li>
                </ul>
            </div>

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['our-future']->heading }} <span>{{ $sections['our-future']->heading_accent }}</span></h2>
                <p>
                    {{ $sections['our-future']->body }}
                </p>
            </div>

        </div>
    </div>
</section>
{{--
<section class="section-area section-sp2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="/assets/images/our-services/pic2.jpg" class="img-fluid rounded" alt="Teacher guiding pupils">
            </div>
            <div class="col-lg-6 col-md-12 heading-bx left">
                <h2 class="title-head">Our Approach to <span>Child Development</span></h2>
                <h5>Educating the whole child with care, structure, and purpose.</h5>
                <p>
                    We believe a strong primary school experience must develop both the mind
                    and character. Our pupils are encouraged to read widely, ask questions,
                    solve problems, work with others, respect authority, and show kindness.
                </p>
                <ul class="list-check">
                    <li>Strong academic foundations in literacy, numeracy, science, and ICT</li>
                    <li>Daily routines that encourage responsibility and self-discipline</li>
                    <li>Teacher guidance that supports confidence and emotional growth</li>
                    <li>Classroom culture that promotes respect, teamwork, and leadership</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Leadership & <span>Staff</span></h2>
            <p>
                Our school is led by committed educators and administrators who understand
                the responsibility of shaping young learners for the future.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-user text-primary"></i></div>
                        <h5>Experienced School Leadership</h5>
                        <small class="d-block">Providing direction, accountability, and care for daily school improvement.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-graduation-cap text-primary"></i></div>
                        <h5>Dedicated Teachers</h5>
                        <small class="d-block">Guiding pupils with patience, professionalism, and child-centred instruction.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="service-bx">
                    <div class="info-bx text-center">
                        <div class="feature-box-sm radius bg-white"><i class="fa fa-handshake-o text-primary"></i></div>
                        <h5>Parent Partnership</h5>
                        <small class="d-block">Working closely with families to support attendance, progress, and behaviour.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Alumni & Community <span>Impact</span></h2>
            <p>
                Our progress is strengthened by people who believe that public primary
                education deserves dignity, support, and continued investment.
            </p>
        </div>
       
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4">
                    <div class="mb-3">
                        <i class="fa fa-building fa-2x text-primary"></i>
                    </div>

                    <h4>Infrastructure Support</h4>

                    <p class="mb-0">
                        Support classroom renovation, facility improvements, and the
                        creation of a safe, conducive environment where pupils can
                        learn and thrive.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="school-card">
                    <div class="mb-3">
                        <i class="fa fa-book fa-2x text-primary"></i>
                    </div>

                    <h4>Learning Resources</h4>

                    <p class="mb-0">
                        Help provide textbooks, learning materials, ICT resources,
                        school furniture, and essential teaching aids that enhance
                        classroom learning.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="school-card">
                    <div class="mb-3">
                        <i class="fa fa-users fa-2x text-primary"></i>
                    </div>

                    <h4>Mentorship & Guidance</h4>

                    <p class="mb-0">
                        Encourage pupils through mentorship programmes, leadership
                        development, career awareness, and positive role modelling
                        for a brighter future.
                    </p>
                </div>
            </div>

        </div>

        <div class="text-center mt-3">
            <a href="{{ route('donate') }}" class="btn radius-xl">Support Our School</a>
        </div>
    </div>
</section>
<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Our School <span>Environment</span></h2>
            <p>A glimpse of the learning spaces, activities, and community moments that shape our pupils.</p>
        </div>
        <div class="row magnific-image">
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="/assets/images/gallery/pic1.jpg" class="magnific-anchor">
                    <img src="/assets/images/gallery/pic1.jpg" class="img-fluid rounded" alt="School activity">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="/assets/images/gallery/pic2.jpg" class="magnific-anchor">
                    <img src="/assets/images/gallery/pic2.jpg" class="img-fluid rounded" alt="Pupil learning">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <a href="/assets/images/gallery/pic3.jpg" class="magnific-anchor">
                    <img src="/assets/images/gallery/pic3.jpg" class="img-fluid rounded" alt="School community">
                </a>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('gallery') }}" class="btn radius-xl">View Gallery</a>
        </div>
    </div>
</section>
<section class="section-area section-sp1 ovpr-dark bg-fix" style="background-image:url(/assets/images/background/bg1.jpg);">
    <div class="container">
        <div class="row text-white">
            <div class="col-lg-8 col-md-12 heading-bx left">
                <h2 class="title-head">Together, We Shape <span>Brighter Futures</span></h2>
                <p>
                    Join us as a parent, alumnus, donor, or community partner in strengthening
                    quality public primary education for every child.
                </p>
            </div>
            <div class="col-lg-4 col-md-12 text-lg-right text-center align-self-center">
                <a href="{{ route('contact') }}" class="btn radius-xl">Contact Us</a>
                <a href="{{ route('admissions') }}" class="btn radius-xl btn-light">Admissions</a>
            </div>
        </div>
    </div>
</section>--}}
@endsection
