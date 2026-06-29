@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('assets/images/banner/banner1.jpg');">
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
                <li class="action-card col-lg-4 col-md-6 col-sm-12 school-activities">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic1.jpg" alt="Morning assembly" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Morning Assembly</a></h4>
                            <p>School Activities</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 classroom-learning">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic2.jpg" alt="Reading lesson" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Reading & Literacy</a></h4>
                            <p>Classroom Learning</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 sports">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic3.jpg" alt="Pupils playing sports" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Inter-House Sports</a></h4>
                            <p>Sports</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 cultural-events">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic4.jpg" alt="Cultural day celebration" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Cultural Day</a></h4>
                            <p>Cultural Events</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 graduation">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic5.jpg" alt="Graduation ceremony" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Prize Giving</a></h4>
                            <p>Graduation</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 excursions">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic6.jpg" alt="Educational excursion" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Educational Visit</a></h4>
                            <p>Excursions</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 classroom-learning">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic7.jpg" alt="Numeracy class" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Numeracy Practice</a></h4>
                            <p>Classroom Learning</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 school-activities">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic8.jpg" alt="School club activity" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Club Activities</a></h4>
                            <p>School Activities</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 sports">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic9.jpg" alt="Team sports" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic9.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Team Spirit</a></h4>
                            <p>Sports</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 cultural-events">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic11.jpg" alt="Cultural performance" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic11.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Cultural Performance</a></h4>
                            <p>Cultural Events</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 graduation">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic21.jpg" alt="Graduating pupils" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic21.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Moving-Up Ceremony</a></h4>
                            <p>Graduation</p>
                        </div>
                    </div>
                </li>

                <li class="action-card col-lg-4 col-md-6 col-sm-12 excursions">
                    <div class="portfolio-bx ttr-box" style="border-radius:6px; overflow:hidden;">
                        <div class="portfolio-media media-ov2 media-effect">
                            <img src="assets/images/gallery/pic31.jpg" alt="Learning outside classroom" style="width:100%; height:260px; object-fit:cover;">
                            <div class="overlay-icon">
                                <a href="assets/images/gallery/pic31.jpg" class="magnific-anchor"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                        <div class="portfolio-info-bx">
                            <h4><a href="#">Learning Beyond Class</a></h4>
                            <p>Excursions</p>
                        </div>
                    </div>
                </li>
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
