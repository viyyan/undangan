<?php
/**
 * Career / Want to Join Us
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="page-top page-top--fixed">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><a href="{{ route('who-we-are') }}">Who We Are</a><span class="page-top__breadcrumb__sep">/</span><span class="page-top__breadcrumb_current">WANT TO JOIN US?</span></div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-lg bg--main-red-4">
    <div class="section__inner">
    <div class="container container--lg">
        <div class="section__main">
        <div class="cta cta--thumb-right cta--align--middle">
            <div class="cta__inner">
            <div class="cta__main grid gap--2xl">
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('careers--banner.png') }}" alt=""/></div>
                <div class="cta__content column--50 cta__content--left">
                <div class="cta__header">
                    <h2 class="cta__title text--3xl">Be a part of our magnificent team</h2>
                </div>
                <div class="cta__body">
                    <p>If people believe they share values with a company, they will stay loyal to the brand.
                       <b> - Howard Schultz, Former Starbucks CEO</b>
                       <span class="cta__sign left--sign">Scroll down to see the team</span>
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-5">
    <div class="section__inner">
    <div class="container">
        <div class="section__main">
        <div class="section__header">
            <div class="section__header__main">
            <h2 class="text--xl">Available Positions</h2>
            </div>
        </div>
        <div class="section__body"></div>
            @foreach ($careers as $career)
            <div class="card__career bg--content ">
                <div class="card__career__desc">
                    <p class="text--black">{{ $career->title }}</p>
                </div>
                <div class="card__button">
                    <a href="{{ route('careers.details', $career->slug) }}" class="button button--red-dark button__arrow-right">See listing details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection
