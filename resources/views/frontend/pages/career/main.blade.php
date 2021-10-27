<?php
/**
 * Careers view
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="masthead_thumb">
    <div class="masthead_thumb_images"><img src="{{ frontImages('career.jpeg') }}" alt=""/></div>
    <div class="masthead_thumb_ornament"></div>
    <div class="masthead_thumb_gradient"></div>
    <div class="masthead_thumb_bottom-gradient"></div>
    <div class="masthead_thumb_info">
    <h2 class="title--big_title white-color">Careers</h2>
    <p class="title--small white-color">Working at Taisho Pharmaceutical Indonesia means working alongside bright, driven teammates who are constantly pushing the envelope.</p>
    </div>
</div>
<div class="career_info">
    <div class="career_info-wrapper">
    <h2 class="title--main light-blue">Want to join us?</h2>
    <p class="text--medium grey-color">If you’re a driven individual that shares our passion for growing your career opportunity, you’re in the right place. Join us to contribute to society by creating and offering superior pharmaceuticals and health-related products as well as healthcare-related information and services in socially responsible ways that enrich people's lives by improving health and beauty.</p>
    </div>
</div>
<div class="main-container">
    <div class="career_content">
    <div class="career_content_title">
    @if(count($careers) == 0)
        <h3 class="title--main">Thank you for your interest in our company.<br>We are sorry that we do not have any opening at this moment.</h3>
    @else
        <h3 class="title--main">All open opportunities</h3>
        <span class="text--midle-range light-blue">{{ count($careers) }} Available Opportunities</span>
    @endif
    </div>
    <div class="career_content_list">
        <ul>
            @foreach($careers as $career)
            <li>
                <div class="career_content_list-detail">
                <div class="career_content-position">
                    <h4 class="text--large grey-color">{{ $career->title }}</h4>
                </div>
                <div class="career_content-type">
                    <p class="text--medium">{{ $career->category->name }}</p>
                    <div class="career_content-link">
                        <a class="button_simple blue-background" href="{{ route( 'career', [ 'slug' => $career->slug ] ) }}">
                            See listing details
                        </a>
                    </div>
                </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    </div>
</div>
@endsection
