<?php
/*
* Articles view
*/
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="masthead_thumb">
    <div class="masthead_thumb_images"><img src="{{ frontImage('article.png') }}" alt=""/></div>
    <div class="masthead_thumb_ornament"></div>
    <div class="masthead_thumb_gradient"></div>
    <div class="masthead_thumb_bottom-gradient"></div>
    <div class="masthead_thumb_info">
        <h2 class="title--big_title white-color">News Articles</h2>
        <p class="title--small white-color">
            <br>
        </p>
    </div>
</div>
<div class="section--article">
    <div class="masthead-container">
    <div class="home--comercial_wrapper dots-slider">
        <div class="masthead_slider article_slider" id="comercial_slider">
        @foreach($features as $feature)
        <div class="masthead_slider-wrapper">
            <div class="masthead_slider-block">
            <div class="masthead_slider-featured">
                <div class="article--tag"><span>Featured</span></div>
                <div class="banner--article">
                    <img src="{{ $feature->heroUrl() }}"></div>
                <div class="banner--bg _bg--gradient"></div>
            </div>
            <div class="masthead_slider-text article_slide">
                <h2 class="title--main">{{ $feature->title }}</h2>
                <h3 class="text--medium light-blue date">{{ $feature->created_at->format('d F Y') }}</h3>
                <p class="text--medium">{{ $feature->frontendExcerpt }}</p><a class="button_simple" href="{{ route( 'article', [ 'slug' => $feature->slug ] ) }}">Read more</a>
            </div>
            </div>
        </div>
        @endforeach
        </div>
        <div class="masthead_slider-nav blue-active_dots"></div>
    </div>
    </div>
</div>
<div class="main-container article-content">
    <div class="title--section">
    <div class="title--section_main">
        <h2 class="title--main">All news &amp; articles</h2>
    </div>
    <div class="title--section_option">
        <div class="title--section_option-wraper">
        <ul class="select">
            <li>
            <input class="select_close" id="filter-select" type="radio" name="filter" value=""><span class="select_label select_label-placeholder">Category : All Categories</span>
            </li>
            <li class="select_items">
            <input class="select_expand" id="filter-opener" type="radio" name="filter">
            <label class="select_closeLabel" for="filter-select"></label>
            <ul class="select_options">
            <li class="select_option"></li>
                <input class="select_input dropdown_filter" id="cat-all" type="radio" name="filter"
                data-param="category" value="">
                <label class="select_label" for="cat-all">All Categories</label>
                @foreach ($categories as $key => $category)
                    <li class="select_option"></li>
                    <input class="select_input dropdown_filter" id="cat-{{ $category->id }}" type="radio" name="filter"
                    data-param="category" value="{{ $category->slug }}" {{ app('request')->input('category') === $category->slug ? 'checked' : '' }}>
                    <label class="select_label {{ ($key === count($categories) - 1) ? 'last-option' : '' }}" for="cat-{{ $category->id }}">{{ $category->name }}</label>
                @endforeach
            </ul>
            <label class="select_expandLabel" for="filter-opener"></label>
            </li>
        </ul>
        </div>
        <div class="title--section_option-wraper">
            @include('frontend.vendor.sort')
        </div>
    </div>
    </div>
    <div class="article-content_card">
    @foreach($posts as $post)
        <div class="card-news">
            <div class="card-news_content">
            <div class="card-news_text">
                <a class="text--large semi-bold white-color" href="{{ route( 'article', [ 'slug' => $post->slug ] ) }}">
                {{ $post->title }}
                </a>
                <span class="date">{{ $post->created_at->format('d F Y') }}</span></div>
            </div>
            <div class="card-news_images"><img src="{{ $post->heroThumbUrl() }}"/></div>
            <div class="card-news_gradient"></div>
        </div>
    @endforeach
    </div>
    <div class="article-content_pagination">
    <ul class="pagination">
        {{ $posts->links( 'frontend.vendor.pagination' ) }}
    </ul>
    </div>
</div>
@endsection
