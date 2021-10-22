<?php
/**
 * Home page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="home--slider dots-slider">
    <div class="home--slider_hero anime--slider" id="main-slider">
        @foreach($banners as $banner)
        <div class="home--slider_content" style="background:url({{ $banner->heroUrl() }})">

            <div class="home--slider_gradient"></div>
            <div class="home--slider_patern"></div>
            <div class="home--slider_bottom-gradient"></div>
            <div class="home--slider_text">
            <div class="home--slider_wrapper">

                <h2 class="title--big_title" data-animation="animate__slideInUp" data-delay="0.1" data-color="#fff">
                    @if(isset($banner->url))
                        <a href="{{ $banner->url }}" style="text-decoration:none;color:white;outline: none;">
                            {{ $banner->title }}
                        </a>
                    @else
                        {{ $banner->title }}
                    @endif
                </h2>
                <p class="text--medium" data-animation="animate__fadeInUp" data-delay="0.5s" data-color="#fff">{{ $banner->subtitle }}</p>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="home--slider_dots"></div>
</div>
<div class="main-container">
    <div class="home--about">
    <div class="home--about_wrapper">
        <h2 class="title--main">About the company</h2>
        <div class="home--about_col">
        <div class="home--about_col-item">
            <div class="home--about_col-images">
            <svg class="new-svg" width="259" height="237" viewbox="0 0 259 237" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M120.717 0.141662C161.036 -1.92189 198.939 18.743 224.535 50.1011C250.588 82.0177 267.668 124.845 254.39 163.903C242.1 200.052 200.619 212.28 164.921 225.453C134.99 236.498 103.733 242.325 74.1314 230.419C41.6466 217.354 11.7965 194.258 2.8657 160.276C-6.37189 125.125 7.85313 89.3239 29.3681 60.0897C52.1153 29.1811 82.4984 2.09765 120.717 0.141662Z" pathdata:id="M123.489 0.00410367C162.667 0.218626 201.955 10.6294 227.42 38.8773C253.923 68.2771 265.746 108.666 255.115 146.014C244.91 181.863 211.254 204.842 175.736 220.444C141.055 235.678 101.476 244.446 67.0997 228.602C32.8397 212.811 16.1162 177.824 7.09284 142.716C-2.14566 106.771 -5.823 66.9916 18.0421 37.7308C42.2286 8.07599 83.9672 -0.212299 123.489 0.00410367Z" fill="url(#paint0_linear)"></path>
                <defs>
                <lineargradient id="paint0_linear" x1="129.5" y1="0" x2="129.5" y2="237" gradientunits="userSpaceOnUse">
                    <stop stop-color="#9AD2EA"></stop>
                    <stop offset="1" stop-color="#4DB3DF"></stop>
                </lineargradient>
                </defs>
            </svg>
            <div class="home--about_col-absolute"><img src="{{ frontImage('home-vision.svg') }}"></div>
            </div>
            <div class="home--about_col-text">
            <h3 class="title--sub">Vision</h3>
            <p class="text--medium primary-color"> Always focused on our core businesses and continue to drive sustained growth in our business activities.</p>
            </div>
        </div>
        <div class="home--about_col-item">
            <div class="home--about_col-images">
            <svg class="new-svg_second" width="259" height="237" viewbox="0 0 259 237" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M123.489 0.00410367C162.667 0.218626 201.955 10.6294 227.42 38.8773C253.923 68.2771 265.746 108.666 255.115 146.014C244.91 181.863 211.254 204.842 175.736 220.444C141.055 235.678 101.476 244.446 67.0997 228.602C32.8397 212.811 16.1162 177.824 7.09284 142.716C-2.14566 106.771 -5.823 66.9916 18.0421 37.7308C42.2286 8.07599 83.9672 -0.212299 123.489 0.00410367Z" pathdata:id="M120.717 0.141662C161.036 -1.92189 198.939 18.743 224.535 50.1011C250.588 82.0177 267.668 124.845 254.39 163.903C242.1 200.052 200.619 212.28 164.921 225.453C134.99 236.498 103.733 242.325 74.1314 230.419C41.6466 217.354 11.7965 194.258 2.8657 160.276C-6.37189 125.125 7.85313 89.3239 29.3681 60.0897C52.1153 29.1811 82.4984 2.09765 120.717 0.141662Z" fill="url(#paint0_linear)"></path>
                <defs>
                <lineargradient id="paint0_linear" x1="129.5" y1="0" x2="129.5" y2="237" gradientunits="userSpaceOnUse">
                    <stop stop-color="#9AD2EA"></stop>
                    <stop offset="1" stop-color="#4DB3DF"></stop>
                </lineargradient>
                </defs>
            </svg>
            <div class="home--about_col-absolute"><img src="{{ frontImage('home-startup.svg') }}"></div>
            </div>
            <div class="home--about_col-text">
            <h3 class="title--sub">Mission</h3>
            <p class="text--medium primary-color"> The Company's mission is to contribute to society by creating and offering superior pharmaceuticals and health-related products</p>
            </div>
        </div>
        <div class="home--about_col-item">
            <div class="home--about_col-images">
            <svg class="new-svg_third" width="259" height="237" viewbox="0 0 259 237" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M155.623 0.743353C196.772 5.63571 217.44 43.3425 238.476 74.6003C254.726 98.7475 264.6 125.267 257.849 152.646C250.985 180.484 231.244 203.929 203.055 218.258C171.469 234.313 134.964 242.57 100.172 232.792C58.3706 221.045 16.7905 199.183 4.3571 162.417C-8.78265 123.562 9.28343 82.2184 38.6405 50.8414C67.5468 19.9463 110.344 -4.63992 155.623 0.743353Z" pathdata:id="M123.489 0.00410367C162.667 0.218626 201.955 10.6294 227.42 38.8773C253.923 68.2771 265.746 108.666 255.115 146.014C244.91 181.863 211.254 204.842 175.736 220.444C141.055 235.678 101.476 244.446 67.0997 228.602C32.8397 212.811 16.1162 177.824 7.09284 142.716C-2.14566 106.771 -5.823 66.9916 18.0421 37.7308C42.2286 8.07599 83.9672 -0.212299 123.489 0.00410367Z" fill="url(#paint0_linear)"></path>
                <defs>
                <lineargradient id="paint0_linear" x1="129.5" y1="0" x2="129.5" y2="237" gradientunits="userSpaceOnUse">
                    <stop stop-color="#9AD2EA"></stop>
                    <stop offset="1" stop-color="#4DB3DF"></stop>
                </lineargradient>
                </defs>
            </svg>
            <div class="home--about_col-absolute"><img src="{{ frontImage('home-growth.svg') }}"></div>
            </div>
            <div class="home--about_col-text">
            <h3 class="title--sub">Values</h3>
            <p class="text--medium primary-color"> Based on the Company's Founding Spirit, the Company is working to share all of our values internally.</p>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="home--about_bod">
    <div class="home--about_bod-images"><img src="{{ frontImage('home-about-bod.jpeg?v=1') }}"></div>
    <div class="home--about_bod-copy">
        <h4 class="title--main white-color" style="font-size: 15px; line-height: initial;">
            {!! __('home.bod_message') !!}
        </h4>
    </div>
    </div>
</div>
<div class="main-container">
    <div class="home--product dots-slider">
    <h2 class="title--main">Product highlight</h2>
    <div class="home--product_slider anime--slider" id="product_slider">
        @foreach($products as $product)
        <div class="home--product_slider-content">
            <div class="home--product_slider-wrapper">
                <div class="home--product_text">
                <h3 class="home--product_title">{{ $product->name }}</h3>
                <p class="text--medium primary-color">{{ $product->desc }}</p>
                <div class="home--product_button"><a class="button_simple" href="{{ route('product', $product->slug) }}">View product Page</a></div>
                </div>
                <div class="home--product_images" data-animation="animate__fadeInRight" data-delay="0.1"><img src="{{ $product->imageUrl() }}"></div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="home--product_slider-nav blue-active_dots"></div>
    </div>
    <div class="home--product_direct-link">
        <p>Wants to buy our product online?</p>
        <a class="button_simple light-blue" href="{{ route('official-store') }}">Click Here</a>
    </div>
    <div class="home--product_halal">
    <div class="home--product_halal-images"><img src="{{ frontImage('big-halal.png') }}"></div>
    <div class="home--product_halal-copy">
        <h4 class="text--large">Halal Certified Products</h4>
        <p class="text--medium">{!! __('home.halal') !!}</p>
    </div>
    </div>
</div>
<div class="home--comercial">
    <div class="masthead-container">
    <div class="home--comercial_wrapper dots-slider">
        <h2 class="title--main">Our TV Commercials</h2>
        <div class="masthead_slider comercial_slider" id="comercial_slider">
            @foreach($tvcs as $tvc)
            <div class="masthead_slider-wrapper">
                <div class="masthead_slider-block">
                <div class="masthead_slider-featured">
                    <div class="banner--video-bg">
                    <div class="banner--media _media--video">
                        <div class="video__youtube" data-video-id="{{ $tvc->youtube_id }}" data-autoplay="false"></div>
                    </div>
                    <div class="video__youtube--cover">
                        <div class="banner--bg _bg--image" style="background-image:url('{{ $tvc->youtubeThumbUrl }}');"> </div>
                        <div class="banner--bg _bg--gradient"></div>
                        <div class="banner--inner">
                        <div class="banner--main">
                            <div class="banner--content _text--white"></div><a class="video__youtube--play" href=""><i class="icon--play"></i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="masthead_slider-text">
                    <h2 class="title--sub">{{ $tvc->subtitle }}</sup></h2>
                    <h3 class="title--main light-blue">{{ $tvc->title }}</h3>
                    <p class="text--medium">{{ $tvc->desc }}</p>
                </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="masthead_slider-nav blue-active_dots"></div>
    </div>
    </div>
</div>
<div class="home--news">
    <div class="home--news_ornament"></div>
    <div class="main-container">
    <div class="home--news_title">
        <h3 class="title--main white-color">News updates</h3><a class="button_white" href="{{ route( 'articles') }}">View all news updates</a>
    </div>
    <div class="home--news_content">
        <div class="card-news_wrapper">
        @foreach ($recommends as $recommend)
            <div class="card-news">
                <div class="card-news_content">
                <div class="card-news_text">
                    <a class="text--large semi-bold white-color" href="{{ route( 'article', [ 'slug' => $recommend->slug ] ) }}">
                        {{ $recommend->title }}
                    </a>
                    <span class="date">{{ $recommend->created_at->format('d F Y') }}</span>
                </div>
                </div>
                <div class="card-news_images">
                    <img src="{{ $recommend->heroThumbUrl() }}">
                </div>
                <div class="card-news_gradient"></div>
            </div>
        @endforeach
        </div>
    </div>
    </div>
</div>
@endsection
