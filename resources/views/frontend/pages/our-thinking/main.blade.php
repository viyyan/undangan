<?php
/**
 * Our Thinking
 */
?>
@extends('frontend.layouts.basic')
@section('content')

@if (false)
<div class="section section--space-md bg--main-red-4 slider--section">
    <div class="section__slider">
        <div class="slider__wrapper">
            <div class="slider__wrapper__inner">
            <div class="slider__thumb">
                <img src="{{ frontImages('dummy--slider.png') }}" alt=""/>
            </div>
            <div class="slider__info">
                <div class="container">
                    <div class="card__category category"><span class="category__main">Retail Census</span></div>
                    <h2 class="text--2xl">Consumer behavior in the Covid recovery: Polarizing “moving-on mindsets” within retail</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="cta__action">
                    <a class="button button--white button--md" href="{{ route('our-thinking.details', 'slug') }}">
                        <span class="button__content">
                            <span class="button__label">Read more</span>
                        <span class="button__icon">
                        <i class="icon__arrow">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <polyline points="14 6 20 12 14 18"></polyline>
                            </svg>
                        </i>
                        </span></span>
                    </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div>

        </div>
        <div>

        </div>
      </div>
</div>
@endif
@if (false)
<div class="section section--space-md bg--main-red-4 top--section">
    <div class="section__inner">
        <div class="container">
            <div class="section__main">
            <div class="section__header">
                <div class="section__header__main">
                <h2 class="text--xl">What we think recently..</h2>
                </div>
            </div>
            <div class="section__body">
                <div class="grid gap--md">
                <div class="column--50">
                    <article class="card card--info-inside">
                    <div class="card__inner">
                        <div class="card__thumb">
                        <div class="card__thumb__image"><img src="{{ frontImages('card--thumbnail.png') }}" alt=""/></div>
                        </div>
                        <div class="card__info">
                        <div class="card__info__inner">
                            <div class="card__info__main">
                            <div class="card__title">
                                <h3 class="card__title__main text--lg"><a href="{{ route('our-thinking.details', 'slug') }}">3 steps to streamline assortment and merchandising solutions</a></h3>
                            </div>
                            <div class="card__date">
                                <span class="text--md">11 Februari 2021</span>
                            </div>
                            </div>
                        </div>
                        <div class="card__deco"><span class="card__deco__icon"></span></div>
                        </div>
                    </div>
                    </article>
                </div>
                <div class="column--50">
                    <article class="card card--info-inside">
                    <div class="card__inner">
                        <div class="card__thumb">
                        <div class="card__thumb__image"><img src="{{ frontImages('post--thumbnail--2.jpeg') }}" alt=""/></div>
                        </div>
                        <div class="card__info">
                        <div class="card__info__inner">
                            <div class="card__info__main">
                            <div class="card__title">
                                <h3 class="card__title__main text--lg"><a href="{{ route('our-thinking.details', 'slug') }}">Stress Testing an Equity Investment Thesis on the Growth Strategy of a Global C2C Marketplace</a></h3>
                            </div>
                            <div class="card__date">
                                <span class="text--md">11 Februari 2021</span>
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
            </div>
        </div>
    </div>
</div>
@endif
<div class="section section--space-md bg--main-red-5 p-our-thinking__posts">
    <div class="section__inner">
    <div class="container">
        <div class="section__main">
        <div class="section__header">
            <div class="section__header__main">
            <h2 class="text--3xl">All of the thinking</h2>
            </div>
            <div class="section__header__widget">
            @if (false)
            <form class="form__search" method="post" action="">
                <div class="form__search__main">
                <input type="text" name="keyword" placeholder="You can type your search here..">
                </div>
                <div class="form__search__submit">
                <button class="button button--line button--square button--white" type="submit"><span class="button__content"><span class="button__icon"><i class="icon__search">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M27.414,24.586l-5.077-5.077C23.386,17.928,24,16.035,24,14c0-5.514-4.486-10-10-10S4,8.486,4,14  s4.486,10,10,10c2.035,0,3.928-0.614,5.509-1.663l5.077,5.077c0.78,0.781,2.048,0.781,2.828,0  C28.195,26.633,28.195,25.367,27.414,24.586z M7,14c0-3.86,3.14-7,7-7s7,3.14,7,7s-3.14,7-7,7S7,17.86,7,14z"></path>
                        </svg></i></span></span></button>
                </div>
            </form>
            @endif
            </div>

        </div>
        <div class="section__body">
            @if (count($posts) == 0)
                <div style="min-height: 400px;">
                <span class="text--small">Coming soon</span>
                </div>
            @endif
            <div class="grid gap--md">
                @foreach ($posts as $post)
                    <div class="column--33">
                        <article class="card card--info-inside">
                        <div class="card__inner">
                            <div class="card__thumb">
                            <div class="card__thumb__image"><img src="{{ $post->heroUrl() }}" alt=""/></div>
                            </div>
                            <div class="card__info">
                            <div class="card__info__inner">
                                <div class="card__info__main">
                                <div class="card__title">
                                    <h3 class="card__title__main text--lg">
                                        <a href="{{ route('our-thinking.details', $post->slug) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                </div>
                                <div class="card__date">
                                    <span class="text--md">{{ $post->created_at->format('d F Y') }}</span>
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
        <!-- <div class="section__footer">
            <div class="button__group button__pagination"><a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__icon">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <line x1="20" x2="4" y1="12" y2="12"></line>
                <polyline points="10 18 4 12 10 6"></polyline>
                </svg></span></span></a><a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__label">1</span></span></a><a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__label">2</span></span></a><a class="button button--line button--square button--white button--md" href="#" disabled="disabled"><span class="button__content"><span class="button__label">...</span></span></a><a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__label">11</span></span></a><a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__label">12</span></span></a><a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__icon">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <line x1="4" x2="20" y1="12" y2="12"></line>
                <polyline points="14 6 20 12 14 18"></polyline>
                </svg></span></span></a>
            </div>
        </div> -->
        </div>
    </div>
    </div>
</div>

@endsection
