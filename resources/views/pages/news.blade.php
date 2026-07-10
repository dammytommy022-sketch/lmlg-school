@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('/assets/images/banner/banner3.jpg');">
    <div class="container">
        <div class="page-banner-entry text-center text-white pt-5">
            <h1>News &amp; Updates</h1>
            <p>Stay informed about activities, events, and developments within the LMLG Primary School community.</p>
        </div>
    </div>
</section>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>News &amp; Updates</li>
        </ul>
    </div>
</div>

<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">What You'll <span>Find Here</span></h2>
        </div>
        <div class="row">
            <div class="col-md-6 heading-bx left">
                <ul class="list-check">
                    <li>School Announcements</li>
                    <li>Alumni Events</li>
                    <li>Homecoming Celebrations</li>
                </ul>
            </div>
            <div class="col-md-6 heading-bx left">
                <ul class="list-check">
                    <li>Legacy Project Progress</li>
                    <li>Community Outreach Programs</li>
                    <li>Special Recognition &amp; Achievements</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section-area section-sp2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading-bx left">
                <h2 class="title-head">Latest <span>News</span></h2>
                <p>Stay connected with learning milestones and school community highlights.</p>
            </div>
        </div>
        <div class="row">
            @forelse ($latestPosts as $post)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="recent-news">
                        <div class="action-box"><img src="{{ $post->image_url }}" alt="{{ $post->title }}"></div>
                        <div class="info-bx">
                            <ul class="media-post">
                                <li><a href="{{ route('news.show', $post->slug) }}"><i class="fa fa-calendar"></i>{{ optional($post->published_at)->format('M d Y') }}</a></li>
                                <li><a href="{{ route('news.show', $post->slug) }}"><i class="fa fa-user"></i>{{ $post->author }}</a></li>
                            </ul>
                            <h5 class="post-title"><a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a></h5>
                            <p>{{ $post->excerpt }}</p>
                            <div class="post-extra"><a href="{{ route('news.show', $post->slug) }}" class="btn-link">READ MORE</a></div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12"><p>No news posted yet.</p></div>
            @endforelse
        </div>
    </div>
</section>

<section class="section-area section-sp2">
    <div class="container">
        <div class="heading-bx text-center">
            <h2 class="title-head">Recent <span>Highlights</span></h2>
        </div>
        <div class="row">
            @forelse ($highlights as $post)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="recent-news">
                        <div class="action-box"><img src="{{ $post->image_url }}" alt="{{ $post->title }}"></div>
                        <div class="info-bx">
                            <h5 class="post-title"><a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a></h5>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12"><p>No highlights posted yet.</p></div>
            @endforelse
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
                    <div class="action-box"><img src="/assets/images/event/pic1.jpg" alt="Open day"></div>
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
                    <div class="action-box"><img src="/assets/images/event/pic2.jpg" alt="Cultural day"></div>
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
                    <div class="action-box"><img src="/assets/images/event/pic3.jpg" alt="Prize giving"></div>
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

<section class="section-area section-sp1 ovpr-dark bg-fix text-center" style="background-image:url(/assets/images/background/bg1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-white">
                <h2 class="title-head">Stay <span>Connected</span></h2>
                <p>
                    Subscribe to receive updates directly in your email and remain part
                    of the LMLG story wherever you are in the world.
                </p>
                <form class="row justify-content-center">
                    <div class="col-md-7 mb-2">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn radius-xl w-100">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
