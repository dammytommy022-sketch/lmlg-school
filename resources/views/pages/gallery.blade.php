@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('/assets/images/banner/banner1.jpg');">
    <div class="container">
        <div class="page-banner-entry text-center text-white pt-5">
            <h1>School Gallery</h1>
            <p>Capturing learning, achievement, culture, creativity, and community life.</p>
        </div>
    </div>
</section>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Gallery</li>
        </ul>
    </div>
</div>

<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Our School <span>In Pictures</span></h2>
            <p>
                Explore moments from Lagos Main Land Government Primary School,
                where pupils learn, lead, celebrate, compete, and grow together.
            </p>
        </div>

        <div class="feature-filters center style1 m-b40">
            <ul class="filters" data-toggle="buttons">
                <li data-filter="" class="btn active">
                    <input type="radio" checked>
                    <a href="#"><span>All</span></a>
                </li>
                <li data-filter="school-activities" class="btn">
                    <input type="radio">
                    <a href="#"><span>School Activities</span></a>
                </li>
                <li data-filter="classroom-learning" class="btn">
                    <input type="radio">
                    <a href="#"><span>Classroom Learning</span></a>
                </li>
                <li data-filter="sports" class="btn">
                    <input type="radio">
                    <a href="#"><span>Sports</span></a>
                </li>
                <li data-filter="cultural-events" class="btn">
                    <input type="radio">
                    <a href="#"><span>Cultural Events</span></a>
                </li>
                <li data-filter="graduation" class="btn">
                    <input type="radio">
                    <a href="#"><span>Graduation</span></a>
                </li>
                <li data-filter="excursions" class="btn">
                    <input type="radio">
                    <a href="#"><span>Excursions</span></a>
                </li>
            </ul>
        </div>

        <div class="clearfix">
            <ul id="masonry" class="ttr-gallery-listing magnific-image row" style="list-style:none; margin:0; padding:0;">
                @foreach ($images as $image)
                    <li class="action-card col-lg-4 col-md-6 col-sm-12 {{ $image->category }}">
                        <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                            <div class="portfolio-media media-ov2 media-effect">
                                <img src="{{ $image->image_url }}" alt="{{ $image->title }}" style="width:100%; height:260px; object-fit:cover;">
                                <div class="overlay-icon">
                                    <a href="{{ $image->image_url }}" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-info-bx">
                                <h4><a href="#">{{ $image->title }}</a></h4>
                                <p>{{ $image->category_label }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="counter-card">
                    <h2>6</h2>
                    <span>Gallery Categories</span>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="counter-card">
                    <h2>50+</h2>
                    <span>Years of Memories</span>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="counter-card">
                    <h2>20+</h2>
                    <span>School Activities</span>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="counter-card">
                    <h2>100%</h2>
                    <span>Child-Focused</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var filters = document.querySelectorAll('.filters li');

        filters.forEach(function (item) {
            item.addEventListener('click', function () {
                filters.forEach(function (filter) {
                    filter.classList.remove('active');
                });

                item.classList.add('active');
            });
        });
    });
</script>
@endsection
