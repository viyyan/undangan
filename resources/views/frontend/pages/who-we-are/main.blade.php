<?php
/**
 * What we do
 */
?>
@extends('frontend.layouts.basic')
@section('content')

<div class="page-top page-top--fixed">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><span class="page-top__breadcrumb_current">Who We Are</span></div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--primary">
    <div class="section__inner">
    <div class="container container--lg">
        <div class="section__main">
        <div class="cta cta--thumb-right cta--align--middle">
            <div class="cta__inner">
            <div class="cta__main grid">
                <div class="cta__thumbnail column--40"><img src="{{ frontImages('about--who-we-are.png', '2') }}" alt=""/></div>
                <div class="cta__content column--60 cta__content--left">
                <div class="cta__header">
                    <h2 class="cta__title text--3xl">Clove’s DNA is to engage and give the best solution to any marketing concern.</h2>
                </div>
                <div class="cta__body">
                    <p class="text--2md">We are working like an antenna to detect all the symptoms in marketing and eagerly to breaking the mold with our business savvy and not only finding the “answer” but we give you how to get there as your solutions architects.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-2">
    <div class="section__inner">
    <div class="container container--lg">
        <div class="section__main">
        <div class="cta cta--thumb-left cta--align--middle">
            <div class="cta__inner">
            <div class="cta__main grid gap--2xl">
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('about--concern.png', '2') }}" alt=""/></div>
                <div class="cta__content column--50 cta__content--left">
                <div class="cta__header">
                    <h2 class="cta__title text--3xl">We focus on listening to your concern and providing impactful insights to advance your businesses. </h2>
                </div>
                <div class="cta__body">
                    <p class="text--2md">Established in 2018, we assembled a team with background and experience of 15 years in the research industry. We believe a research agency should focus on marketing concern and answering the objectives. Therefore all research will be tailored to provide the best solution for your business objectives.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-2 p-about__bottom">
    <div class="container">
    <div class="grid gap--md">
        <div class="column--50">
        <div class="card card__menu"><a href="{{ route('our-pillars') }}">
            <div class="card__inner">
                <div class="card__thumb">
                <div class="card__thumb__image"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
                </div>
                <div class="card__info">
                <p><strong class="text--xl">Our 4 Pillars</strong></p>
                </div>
            </div>
            <div class="card__deco"><span class="card__deco__icon"></span></div></a></div>
        </div>
        <div class="column--50">
        <div class="card card__menu"><a href="{{ route('our-people') }}">
            <div class="card__inner">
                <div class="card__thumb">
                <div class="card__thumb__image"><img src="{{ frontImages('icon--our-people.png') }}" alt=""/></div>
                </div>
                <div class="card__info">
                <p><strong class="text--xl">Our People</strong></p>
                </div>
            </div>
            <div class="card__deco"><span class="card__deco__icon"></span></div></a></div>
        </div>
    </div>
    </div>
</div>

@endsection
