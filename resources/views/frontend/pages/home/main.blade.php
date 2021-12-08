<?php
/**
 * Home page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="home__intro">
    <div class="section section--space-md bg--primary">
    <div class="section__inner">
        <div class="container container--lg">
        <div class="section__main">
            <div class="cta cta--thumb-left cta--align--middle">
            <div class="cta__inner">
                <div class="cta__main grid gap--2xl">
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('cta--thumbnail.png', '2') }}" alt="Hello We are Clove"/></div>
                <div class="cta__content column--50 cta__content--left">
                    <div class="cta__header">
                    <h2 class="cta__title text--3xl">Hello, we are Clove</h2>
                    <h3 class="cta__subtitle text--md">Creating loyalty and value</h3>
                    </div>
                    <div class="cta__body">
                    <p class="text--2md">The first market research consultant that provide transparent data, with <b>100% AUDIO CHECKING</b>, tailored to your need.</p>
                    </div>
                    <div class="cta__action"><a class="button button--white button--md" href="{{ route('who-we-are') }}"><span class="button__content"><span class="button__label">Who we are</span><span class="button__icon"><i class="icon__arrow">
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
</div>
<div class="home__services">
    <div class="section section--space-lg bg--main-red-2">
    <div class="container">
        <div class="section__main">
        <div class="section__header section__header--center">
            <div class="section__header__main">
            <h2 class="text--3xl">We always push to deliver</h2>
            </div>
        </div>
        <div class="section__body">
            <div class="grid gap--md">
            <div class="column--25">
                <div class="feature">
                <div class="feature__thumb"><img src="{{ frontImages('home--transparent_data-visual.png') }}" alt="High Quality & Transparent Data"/></div>
                <div class="feature__title">
                    <h3 class="text--lg">High Quality & Transparent Data</h3>
                </div>
                </div>
            </div>
            <div class="column--25">
                <div class="feature">
                <div class="feature__thumb"><img src="{{ frontImages('home--responsible-visual.png') }}" alt=""/></div>
                <div class="feature__title">
                    <h3 class="text--lg">Responsive & <br />Responsible</h3>
                </div>
                </div>
            </div>
            <div class="column--25">
                <div class="feature">
                <div class="feature__thumb"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
                <div class="feature__title">
                    <h3 class="text--lg">Deep Analysis & <br />Impactful Insight</h3>
                </div>
                </div>
            </div>
            <div class="column--25">
                <div class="feature">
                <div class="feature__thumb"><img src="{{ frontImages('home--accesible-visual.png') }}" alt=""/></div>
                <div class="feature__title">
                    <h3 class="text--lg">Accessible Report Both Offline & Online</h3>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="section__footer"><a class="button button--white button--md" href="{{ route('our-pillars') }}"><span class="button__content"><span class="button__label">Learn More</span><span class="button__icon"><i class="icon__arrow">
                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <polyline points="14 6 20 12 14 18"></polyline>
                    </svg></i></span></span></a>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="home__projects">
    <div class="section section--space-md bg--main-red-3">
    <div class="section__inner">
        <div class="container">
        <div class="section__main">
            <div class="section__header">
            <div class="section__header__main" id="counter">
                <h2 class="text--3xl">What we’ve done</h2>
                <p>We provide you with solutions for improvement to <br />help you business grow.</p>
            </div>
            <div class="section__header__widget">
                <div class="feature__count">
                    <div class="feature__count__block">
                        <span>We’ve been running for</span>
                        <h3 class="text--2xl count" data-count="3">0</h3>
                        <span>Year</span>
                    </div>
                    <div class="feature__count__block">
                        <span>With nearly</span>
                        <h3 class="text--2xl count" data-count="100">0</h3>
                        <span>Projects</span>
                    </div>
                    <div class="feature__count__block">
                        <span>With</span>
                        <h3 class="text--2xl count" data-count="30">0</h3>
                        <span>Repeated clients</span>
                    </div>
                </div>
            </div>
            </div>
            <div class="section__body">
            <div class="grid gap--md">
                @foreach ($caseStudies as $case)
                <div class="column--33">
                    <article class="card card--info-inside">
                        <div class="card__inner">
                        <div class="card__thumb">
                            <div class="card__thumb__image"><img src="{{ $case->heroUrl() }}" alt=""/></div>
                        </div>
                        <div class="card__info">
                            <div class="card__info__inner">
                            <div class="card__info__main">
                                <div class="card__category category"><span class="category__main">{{ $case->industry->name }}</span></div>
                                <div class="card__title">
                                <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', $case->id ) }}">{{ excerptLimit($case->researchesStr, 50) }}</a></h3>
                                </div>
                            </div>
                            </div>
                            <div class="card__deco"><span class="card__deco__icon"></span></div>
                        </div>
                        </div>
                    </article>
                </div>
                @endforeach
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
</div>
<div class="home__market">
    <div class="section section--space-lg bg--main-red-4">
    <div class="section__inner">
        <div class="container container--lg">
        <div class="section__main">
            <div class="cta cta--thumb-left cta--align--middle">
            <div class="cta__inner">
                <div class="cta__main grid gap--2xl">
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('home--market-research.png') }}" alt=""/></div>
                <div class="cta__content column--50 cta__content--left">
                    <div class="cta__header">
                    <h2 class="cta__title text--3xl">Market Research Checkup!</h2>
                    </div>
                    <div class="cta__body">
                    <p>Access your free assessment by answering 6 questions to discover the most suitable research you need.</p>
                    </div>
                    <!-- hide for while -->
                    @if (false)
                    <div class="cta__action"><a class="button button--white button--md" href="{{ route('market-research') }}">
                        <span class="button__content"><span class="button__label">Let’s go!</span><span class="button__icon">
                            <i class="icon__arrow">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <line x1="4" x2="20" y1="12" y2="12"></line>
                                <polyline points="14 6 20 12 14 18"></polyline>
                            </svg></i></span></span></a>
                    </div>
                    @else
                    <div class="cta__action">
                        <a class="button button--white button--md" href="#">
                            <span class="button__content"><span class="button__label">Coming soon</span><span class="button__icon">
                        </a>
                    </div>
                    @endif
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="home__posts">
    <div class="section section--space-lg bg--main-red-3">
    <div class="section__inner">
        <div class="container">
        <div class="section__main">
            <div class="section__header">
            <div class="section__header__main">
                <h2 class="text--3xl">Here are some of our recent thoughts</h2>
            </div>
            </div>
            @if (count($posts) > 0)
            <div class="section__body">
                <div class="grid gap--md">
                    @foreach($posts as $post)
                    <div class="column--50">
                        <article class="card card--info-inside">
                            <div class="card__inner">
                            <div class="card__thumb">
                                <div class="card__thumb__image"><img src="{{ $post->heroUrl() }}" alt=""/></div>
                            </div>
                            <div class="card__info">
                                <div class="card__info__inner">
                                <div class="card__info__main">
                                    <div class="card__title">
                                    <h3 class="card__title__main text--lg"><a href="{{ route('our-thinking.details', $post->slug) }}">{{ $post->title }}</a></h3>
                                    </div>
                                </div>
                                </div>
                                <div class="card__deco"><span class="card__deco__icon"></span></div>
                            </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="section__footer"><a class="button button--white button--md" href="{{ route('our-thinking') }}"><span class="button__content"><span class="button__label">See all</span><span class="button__icon"><i class="icon__arrow">
                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" x2="20" y1="12" y2="12"></line>
                        <polyline points="14 6 20 12 14 18"></polyline>
                    </svg></i></span></span></a>
            </div>
            @else
                <div class="cta__action">
                    <a class="button button--white button--md" href="#">
                        <span class="button__content"><span class="button__label">Coming soon</span><span class="button__icon">
                    </a>
                </div>
            @endif
        </div>
        </div>
    </div>
    </div>
</div>
<div class="home__supported">
    <div class="section section--space-lg bg--main-red-2">
    <div class="container container--sm">
        <div class="section__main">
        <div class="section__header section__header--center">
            <div class="section__header__main">
            <h2 class="text--3xl">We have supported</h2>
            </div>
        </div>
        <div class="section__body">
            <ul class="home__supported__list">
            <li><span><img src="{{ frontImages('logo--belfoods.png') }}" alt="Belfoods"></span></li>
            <li><span><img src="{{ frontImages('logo--bintang-toedjoe.png') }}" alt="Bintang Toedjoe"></span></li>
            <li><span><img src="{{ frontImages('logo--savoria.png') }}" alt="Savoria"></span></li>
            <li><span><img src="{{ frontImages('logo--universal-music.png') }}" alt="Universal Music Indonesia"></span></li>
            <li><span><img src="{{ frontImages('logo--sera.png', 1) }}" alt="Serasi Autoraya"></span></li>
            <li><span><img src="{{ frontImages('logo--blue-scope.png') }}" alt="Blue Scope"></span></li>
            <li><span><img src="{{ frontImages('logo--danone.png') }}" alt="Danone"></span></li>
            <li><span><img src="{{ frontImages('logo--h-three.png') }}" alt="H Three"></span></li>
            <li><span><img src="{{ frontImages('logo--pharos.png') }}" alt="Pharos"></span></li>
            <li><span><img src="{{ frontImages('logo--kfc.png') }}" alt="KFC"></span></li>
            <li><span><img src="{{ frontImages('logo--mitsubishi.png', 1) }}" alt="Mitsubishi Motors"></span></li>
            <li><span><img src="{{ frontImages('logo--uj.png') }}" alt="Ultra Jaya"></span></li>
            <li><span><img src="{{ frontImages('logo--godrej.png') }}" alt="Godrej"></span></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="home__testimony">
    <div class="section section--space--lg bg--main-red-2">
    <div class="section__bg" style="background-image: url({{ frontImages('home__testimony--bg.jpg') }})"></div>
    <div class="container">
        <div class="section__main">
        <div class="section__body">
            <div class="home__testimony__main">
            <blockquote class="text--3xl">We believe research agencies should focus on the marketing concern and answering the objective. <strong>Although we have the capabilities, but your concern is the most important for us.</strong></blockquote>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@include('frontend.includes.contact')
@endsection
