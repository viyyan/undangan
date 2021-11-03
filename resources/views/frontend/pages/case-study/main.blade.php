<?php
/**
 * Case studies
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="page-top">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><a href="">What We Do</a><span class="page-top__breadcrumb__sep">/</span><span class="page-top__breadcrumb_current">Case Studies</span></div>
        </div>
        </div>
        <div class="page-top__info">
        <h1 class="text--3xl">Our case studies</h1>
        <p>Combining digital approach to get deeper and impactful insight.</p>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-5">
    <div class="section__inner">
    <div class="container">
        <div class="section__main">
        <div class="section__header p-case-study__filter">
            <div class="section__header__main">
            <h2 class="text--xl p-case-study__filter__label">All case studies</h2>
            </div>
            <div class="section__header__widget">
            <div class="p-case-study__filter__group">
                <div class="p-case-study__filter__icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="512pt" width="512pt" viewBox="0 0 512 512">
                    <path d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z"></path>
                </svg>
                </div>
                <div class="p-case-study__filter__item">
                <div class="select" data-state="close" data-filter="industries" data-value="">
                    <div class="select__selected" data-placeholder="Industries">
                    <button type="button"> <span class="select__selected__label">Industries</span><span class="select__selected__icon"><i class="select__selected__icon__open">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                            <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z"></path>
                            </svg></i><i class="select__selected__icon__close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                            <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z"></path>
                            </svg></i></span></button>
                    </div>
                    <div class="select__options">
                    <ul>
                        <li>
                        <button type="button" data-value="all"><span>All</span></button>
                        </li>
                        <li>
                        <button type="button" data-value="2"><span>Retail Census</span></button>
                        </li>
                        <li>
                        <button type="button" data-value="3"><span>Event Evaluation</span></button>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="p-case-study__filter__item">
                <div class="select" data-state="close" data-filter="type_of_research" data-value="">
                    <div class="select__selected" data-placeholder="Type of research">
                    <button type="button"> <span class="select__selected__label">Type of research</span><span class="select__selected__icon"><i class="select__selected__icon__open">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                            <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z"></path>
                            </svg></i><i class="select__selected__icon__close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                            <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z"></path>
                            </svg></i></span></button>
                    </div>
                    <div class="select__options">
                    <ul>
                        <li>
                        <button type="button" data-value="all"><span>All</span></button>
                        </li>
                        <li>
                        <button type="button" data-value="2"><span>Electronic Products</span></button>
                        </li>
                        <li>
                        <button type="button" data-value="3"><span>Vinyl & HPL</span></button>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="p-case-study__filter__group">
                <div class="p-case-study__filter__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M413.1 222.5l22.2 22.2c9.4 9.4 9.4 24.6 0 33.9L241 473c-9.4 9.4-24.6 9.4-33.9 0L12.7 278.6c-9.4-9.4-9.4-24.6 0-33.9l22.2-22.2c9.5-9.5 25-9.3 34.3.4L184 343.4V56c0-13.3 10.7-24 24-24h32c13.3 0 24 10.7 24 24v287.4l114.8-120.5c9.3-9.8 24.8-10 34.3-.4z"></path>
                </svg>
                </div>
                <div class="p-case-study__filter__item">
                <div class="select" data-state="close" data-filter="order" data-value="">
                    <div class="select__selected" data-placeholder="Order">
                    <button type="button"> <span class="select__selected__label">Latest</span><span class="select__selected__icon"><i class="select__selected__icon__open">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                            <path d="M1408 1216q0 26-19 45t-45 19h-896q-26 0-45-19t-19-45 19-45l448-448q19-19 45-19t45 19l448 448q19 19 19 45z"></path>
                            </svg></i><i class="select__selected__icon__close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                            <path d="M1408 704q0 26-19 45l-448 448q-19 19-45 19t-45-19l-448-448q-19-19-19-45t19-45 45-19h896q26 0 45 19t19 45z"></path>
                            </svg></i></span></button>
                    </div>
                    <div class="select__options">
                    <ul>
                        <li>
                        <button type="button" data-value="1"><span>Latest</span></button>
                        </li>
                        <li>
                        <button type="button" data-value="2"><span>Oldest</span></button>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">3 steps to streamline assortment and merchandising solutions</a></h3>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">Stress Testing an Equity Investment Thesis on the Growth Strategy of a Global C2C Marketplace</a></h3>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">Improving a New Product for Commercial Acceleration</a></h3>
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
                    <div class="card__thumb__image"><img src="{{ frontImages('card--thumbnail.png') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Retail Census</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">3 steps to streamline assortment and merchandising solutions</a></h3>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">Stress Testing an Equity Investment Thesis on the Growth Strategy of a Global C2C Marketplace</a></h3>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">Improving a New Product for Commercial Acceleration</a></h3>
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
                    <div class="card__thumb__image"><img src="{{ frontImages('card--thumbnail.png') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Retail Census</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">3 steps to streamline assortment and merchandising solutions</a></h3>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">Stress Testing an Equity Investment Thesis on the Growth Strategy of a Global C2C Marketplace</a></h3>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">Improving a New Product for Commercial Acceleration</a></h3>
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
                    <div class="card__thumb__image"><img src="{{ frontImages('card--thumbnail.png') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Retail Census</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">3 steps to streamline assortment and merchandising solutions</a></h3>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">Stress Testing an Equity Investment Thesis on the Growth Strategy of a Global C2C Marketplace</a></h3>
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
                            <h3 class="card__title__main text--lg"><a href="{{ route('case-study.details', 'slug') }}">Improving a New Product for Commercial Acceleration</a></h3>
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
        <div class="section__footer">
            <div class="button__group button__pagination"><a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__icon">
                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="20" x2="4" y1="12" y2="12"></line>
                    <polyline points="10 18 4 12 10 6"></polyline>
                    </svg></span></span></a>
                        <a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__label">1</span></span></a>
                        <a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__label">2</span></span></a>
                        <a class="button button--line button--square button--white button--md" href="#" disabled="disabled"><span class="button__content"><span class="button__label">...</span></span></a>
                        <a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__label">11</span></span></a>
                        <a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__label">12</span></span></a>
                        <a class="button button--line button--square button--white button--md" href="#"><span class="button__content"><span class="button__icon">
                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <polyline points="14 6 20 12 14 18"></polyline>
                    </svg></span></span></a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

@endsection
