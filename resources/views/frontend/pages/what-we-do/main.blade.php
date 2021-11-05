<?php
/**
 * Who we are
 */
?>
@extends('frontend.layouts.basic')
@section('content')

<div class="page-top page-top--fixed">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><span class="page-top__breadcrumb_current">What We Do</span></div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-lg bg--primary">
    <div class="section__inner">
    <div class="container container--lg">
        <div class="section__main">
        <div class="cta cta--thumb-left cta--align--middle">
            <div class="cta__inner">
            <div class="cta__main grid gap--2xl">
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('what-we-do--banner.png') }}" alt=""/></div>
                <div class="cta__content column--50 cta__content--left">
                <div class="cta__header right--align">
                    <h2 class="cta__title text--3xl">We perform extensive range of type of research.</h2>
                </div>
                <div class="cta__body right-align">
                    <p>Both in quantitative and qualitative methods across industries.
                        Since our specialty is in the deep analysis, most of our project were conducted full service. However, we are open for opportunity to field work only.
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
<div class="section section--space-md bg--main-red-2">
    <div class="section__inner">
    <div class="container">
        <div class="section__main">
        <div class="section__header section__header--center">
            <div class="section__header__main">
            <h2 class="text--3xl">Our case studies</h2>
            <p>Combining digital approach to get deeper and impactful insight.</p>
            </div>
        </div>
        <div class="section__body">
            <div class="grid gap--md">
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('card--thumbnail.png') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Retail Census</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'dummy-slug' ) }}">3 steps to streamline assortment and merchandising solutions</a></h3>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('post--thumbnail--2.jpeg') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Event Evaluation</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'dummy-slug' ) }}">Stress Testing an Equity Investment Thesis on the Growth Strategy of a Global C2C Marketplace</a></h3>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('post--thumbnail--3.jpeg') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Product Placement Test</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'dummy-slug' ) }}">Improving a New Product for Commercial Acceleration</a></h3>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            </div>
        </div>
        <div class="section__footer"><a class="button button--white button--md" href="{{ route('case-study') }}"><span class="button__content"><span class="button__label">See all</span><span class="button__icon"><i class="icon__arrow">
                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <polyline points="14 6 20 12 14 18"></polyline>
                    </svg></i></span></span></a>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-3 our--tools">
    <div class="section__inner">
    <div class="container container--lg">
        <div class="section__main">
        <div class="cta cta--thumb-right cta--align--middle">
            <div class="cta__inner">
            <div class="cta__main grid gap--2xl">
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('our--tools-banner.png') }}" alt=""/></div>
                <div class="cta__content column--50 cta__content--left">
                <div class="cta__header">
                    <h2 class="cta__title text--3xl">Our Tools</h2>
                </div>
                <div class="cta__body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a class="button button--white button--md mt-20" href="{{ route('our-tools') }}"><span class="button__content"><span class="button__label">See all tools</span><span class="button__icon"><i class="icon__arrow">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" x2="20" y1="12" y2="12"></line>
                        <polyline points="14 6 20 12 14 18"></polyline>
                        </svg></i></span></span></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection
