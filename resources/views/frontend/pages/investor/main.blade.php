<?php
/**
 * Investors view
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="masthead_thumb">
    <div class="masthead_thumb_images"><img src="{{ frontImages('investor.png') }}" alt=""/></div>
    <div class="masthead_thumb_ornament"></div>
    <div class="masthead_thumb_gradient"></div>
    <div class="masthead_thumb_bottom-gradient"></div>
    <div class="masthead_thumb_info">
    <h2 class="title--big_title white-color">Investor</h2>
    <p class="title--small white-color">
        <br>
    </p>
    </div>
</div>
<div class="section--caption blue-background">
    <h2 class="title--main light-blue">Information for Investors</h2>
    <p class="text--medium white-color">{!! __('investor.subtitle') !!}</p>
</div>
<div class="main-container">
    <section class="flex-container">
    @include('frontend.pages.investor.sidebar')
    <section class="main--content">
        @include('frontend.pages.investor.content')
    </section>
    </section>
</div>
@endsection
