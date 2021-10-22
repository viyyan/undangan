<?php
/*
* Article Detail view
*/
?>
@extends('frontend.layouts.basic')
@section('content')
@if (isset($post))
<div class="article-detail_head">
    <div class="article-detail_head-images"><img src="{{ $post->heroUrl() }}"></div>
    <div class="article-detail_head-title">
    <div class="article-detail_head-wrapper">
        <h2 class="title--big_title white-color">{{ $post->title }}</h2><span class="date">{{ $post->created_at->format('d F Y') }}</span>
    </div>
    </div>
</div>
<div class="main-container">
    <div class="article-detail_qoute">
    <p class="text--midle-range main-blue">{{ $post->frontendExcerpt }}</p>
    </div>
    <div class="article-detail_content">
        {!! $post->body !!}
    </div>
</div>
@endif
<div class="article-detail_sugestion">
    <h3 class="title--main">You might like this</h3>
    <div class="article-content_card">
        @foreach ($recommends as $recommend)
        <div class="card-news">
            <div class="card-news_content">
            <div class="card-news_text">
                <a class="text--large semi-bold white-color" href="{{ route( 'article', [ 'slug' => $recommend->slug ] ) }}">
                {{ $recommend->title }}</a>
                <span class="date">{{ $recommend->created_at->format('d F Y') }}</span></div>
            </div>
            <div class="card-news_images"><img src="{{ $recommend->heroThumbUrl() }}"/></div>
            <div class="card-news_gradient"></div>
        </div>
        @endforeach
    </div>
</div>
@endsection
