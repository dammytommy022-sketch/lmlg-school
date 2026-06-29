@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('assets/images/banner/banner3.jpg');">
    <div class="container">
        <div class="page-banner-entry text-center text-white pt-5">
            <h1>News & Events</h1>
            <p>School updates, achievements, community activities, and important announcements.</p>
        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Latest <span>News</span></h2>
                <p>Stay connected with learning milestones and school community highlights.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="recent-news">
                    <div class="action-box"><img src="assets/images/blog/latest-blog/pic1.jpg" alt="Reading programme"></div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="#"><i class="fa fa-calendar"></i>Jun 10 2026</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>School Office</a></li>
                        </ul>
                        <h5 class="post-title"><a href="#">New Reading Programme Strengthens Literacy Skills</a></h5>
                        <p>Pupils are building stronger vocabulary, comprehension, and reading confidence through guided class activities.</p>
                        <div class="post-extra"><a href="#" class="btn-link">READ MORE</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="recent-news">
                    <div class="action-box"><img src="assets/images/blog/latest-blog/pic2.jpg" alt="Pupil achievement"></div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="#"><i class="fa fa-calendar"></i>May 28 2026</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>Academic Team</a></li>
                        </ul>
                        <h5 class="post-title"><a href="#">Pupils Celebrate Excellence in Numeracy Week</a></h5>
                        <p>Class competitions and practical problem-solving tasks encouraged teamwork, accuracy, and confidence.</p>
                        <div class="post-extra"><a href="#" class="btn-link">READ MORE</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="recent-news">
                    <div class="action-box"><img src="assets/images/blog/latest-blog/pic3.jpg" alt="Community support"></div>
                    <div class="info-bx">
                        <ul class="media-post">
                            <li><a href="#"><i class="fa fa-calendar"></i>Apr 18 2026</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>Community Desk</a></li>
                        </ul>
                        <h5 class="post-title"><a href="#">Parents and Alumni Support Classroom Improvements</a></h5>
                        <p>Community partners continue to help create a safer, brighter, and more inspiring school environment.</p>
                        <div class="post-extra"><a href="#" class="btn-link">READ MORE</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Upcoming <span>Events</span></h2>
            <p>Important activities for pupils, parents, and the wider school community.</p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="event-bx">
                    <div class="action-box"><img src="assets/images/event/pic1.jpg" alt="Open day"></div>
                    <div class="info-bx d-flex">
                        <div><div class="event-time"><div class="event-date">08</div><div class="event-month">July</div></div></div>
                        <div class="event-info">
                            <h4 class="event-title"><a href="#">Parents Open Day</a></h4>
                            <ul class="media-post">
                                <li><a href="#"><i class="fa fa-clock-o"></i> 9:00am</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> School Hall</a></li>
                            </ul>
                            <p>Meet teachers, review pupil progress, and discuss learning goals for the term.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="event-bx">
                    <div class="action-box"><img src="assets/images/event/pic2.jpg" alt="Cultural day"></div>
                    <div class="info-bx d-flex">
                        <div><div class="event-time"><div class="event-date">22</div><div class="event-month">July</div></div></div>
                        <div class="event-info">
                            <h4 class="event-title"><a href="#">Culture & Character Day</a></h4>
                            <ul class="media-post">
                                <li><a href="#"><i class="fa fa-clock-o"></i> 10:00am</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> Assembly Ground</a></li>
                            </ul>
                            <p>A celebration of identity, respect, confidence, and community values.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="event-bx">
                    <div class="action-box"><img src="assets/images/event/pic3.jpg" alt="Prize giving"></div>
                    <div class="info-bx d-flex">
                        <div><div class="event-time"><div class="event-date">31</div><div class="event-month">July</div></div></div>
                        <div class="event-info">
                            <h4 class="event-title"><a href="#">Prize Giving Ceremony</a></h4>
                            <ul class="media-post">
                                <li><a href="#"><i class="fa fa-clock-o"></i> 11:00am</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i> School Hall</a></li>
                            </ul>
                            <p>Recognizing academic effort, good conduct, leadership, and service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
