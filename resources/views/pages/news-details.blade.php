@extends('layouts.app')

@section('content')
<section class="page-banner ovbl-dark" style="background-image:url('/assets/images/banner/banner3.jpg');">
    <div class="container">
        <div class="page-banner-entry text-center text-white pt-5">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>
</section>

<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('news') }}">News &amp; Updates</a></li>
            <li>{{ $post->title }}</li>
        </ul>
    </div>
</div>

<section class="section-area section-sp2">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-12 mb-4">
                <div class="action-box mb-4">
                    <img src="{{ $post->image_url }}" class="img-fluid rounded" alt="{{ $post->title }}">
                </div>

                <ul class="media-post mb-3">
                    <li><a href="#"><i class="fa fa-calendar"></i>{{ optional($post->published_at)->format('M d, Y') }}</a></li>
                    <li><a href="#"><i class="fa fa-user"></i>{{ $post->author }}</a></li>
                    <li><a href="#"><i class="fa fa-tag"></i>{{ $post->category }}</a></li>
                </ul>

                @foreach ($post->body_paragraphs as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach

                <div class="mt-4">
                    <a href="{{ route('news') }}" class="btn radius-xl">Back to News &amp; Updates</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="heading-bx left">
                    <h2 class="title-head">Related <span>Updates</span></h2>
                </div>

                @foreach ($related as $item)
                    <div class="recent-news mb-3">
                        <div class="action-box"><img src="{{ $item->image_url }}" alt="{{ $item->title }}"></div>
                        <div class="info-bx">
                            <h5 class="post-title"><a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a></h5>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endsection
