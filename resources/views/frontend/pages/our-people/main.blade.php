<?php
/**
 * Our People
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="page-top page-top--fixed">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><a href="">Who We Are</a><span class="page-top__breadcrumb__sep">/</span><span class="page-top__breadcrumb_current">OUR People</span></div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-lg bg--main-red-4">
    <div class="section__inner">
    <div class="container container--lg">
        <div class="section__main">
        <div class="cta cta--thumb-left cta--align--middle">
            <div class="cta__inner">
            <div class="cta__main grid gap--xl">
                <div class="cta__thumbnail column--40 banner"><img src="{{ frontImages('our--people-banner.png') }}" alt=""/></div>
                <div class="cta__content column--60 cta__content--left">
                <div class="cta__header right--align">
                    <h2 class="cta__title text--3xl">Meet our architects for your marketing concerns & solutions</h2>
                </div>
                <div class="cta__body right-align">
                    <p>
                        We believe research agencies should focus on the marketing concern dan answering the objective. We have the capabilities and your concern is the most important for us.
                    </p>
                    <span class="cta__sign">Scroll down to see the team</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-3">
    <div class="section__inner" style="position: relative;z-index:30;">
    <div class="container">
        <div class="section__main">
        <div class="section__header section__header--center">
            <div class="section__header__main">
            <h2 class="text--3xl">Meet the leaders</h2>
            </div>
        </div>
        <div class="section__body">
            <div class="grid gap--md">
                @foreach($leaders as $member)
                    @include('frontend.pages.our-people.components.member-item')
                @endforeach
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-5">
    <div class="section__inner" style="position: relative;z-index:30;">
    <div class="container">
        <div class="section__main">
        <div class="section__header section__header--center">
            <div class="section__header__main">
            <h2 class="text--3xl">Our team members</h2>
            </div>
        </div>
        <div class="section__body">
            <div class="grid gap--md">
                @foreach($members as $member)
                    @include('frontend.pages.our-people.components.member-item')
                @endforeach
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
