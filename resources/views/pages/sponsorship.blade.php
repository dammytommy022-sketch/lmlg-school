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
            <li>Sponsorship</li>
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
                <h2 class="title-head">{{ $sections['why-sponsor']->heading }} <span>{{ $sections['why-sponsor']->heading_accent }}</span></h2>
                <p>{{ $sections['why-sponsor']->body }}</p>
                <ul class="list-check">
                    <li>Upgrade learning facilities</li>
                    <li>Modernize the school library</li>
                    <li>Provide educational materials</li>
                    <li>Support pupils' learning experience</li>
                    <li>Preserve our educational heritage</li>
                </ul>
            </div>

            <div class="col-md-6 heading-bx left">
                <h2 class="title-head">{{ $sections['ways-support']->heading }} <span>{{ $sections['ways-support']->heading_accent }}</span></h2>
                <ul class="list-check">
                    <li>Individual Donations</li>
                    <li>Class Set Contributions</li>
                    <li>Corporate Sponsorship</li>
                    <li>Infrastructure Support</li>
                    <li>Educational Resource Donations</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-6">
                <div class="school-card h-100">
                    <div class="mb-3">
                        <i class="fa fa-star fa-2x text-primary"></i>
                    </div>
                    <h4>{{ $sections['legacy-sponsorship']->heading }}</h4>
                    <p class="mb-0">{{ $sections['legacy-sponsorship']->body }}</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="school-card h-100">
                    <div class="mb-3">
                        <i class="fa fa-trophy fa-2x text-primary"></i>
                    </div>
                    <h4>{{ $sections['recognition']->heading }}</h4>
                    <p>{{ $sections['recognition']->body }}</p>
                    <ul class="list-check mb-0">
                        <li>Website recognition</li>
                        <li>Event acknowledgements</li>
                        <li>Legacy donor listings</li>
                        <li>Project plaques (where applicable)</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-area section-sp1 ovpr-dark bg-fix text-center" style="background-image:url(/assets/images/background/bg1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-white">
                <h2 class="title-head">{{ $sections['cta']->heading }} <span>{{ $sections['cta']->heading_accent }}</span></h2>
                <p>{{ $sections['cta']->body }}</p>
                <a href="{{ $sections['cta']->cta_link }}" class="btn radius-xl">{{ $sections['cta']->cta_label }}</a>
            </div>
        </div>
    </div>
</section>
@endsection
