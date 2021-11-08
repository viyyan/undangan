<?php
/**
 * Market Research / Landing page Quiz
 */
?>
@extends('frontend.layouts.basic')
@section('content')

<div class="page-top page-top--fixed">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><span class="page-top__breadcrumb_current">MARKET RESEARCH CHECK-UP</span></div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--primary no--padding-bottom">
    <div class="section__inner">
    <div class="container container--lg">
        <div class="section__main">
        <div class="cta cta--thumb-right cta--align--middle">
            <div class="cta__inner">
            <div class="cta__main grid gap--2xl">
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('market--research_banner.png', '2') }}" alt=""/></div>
                <div class="cta__content column--50 cta__content--left">
                <div class="cta__header">
                    <h2 class="cta__title text--3xl">Welcome to Clove’s Market Research Check up</h2>
                </div>
                <div class="cta__body">
                    <p>Access your free assessment by answering 6 questions to discover the most suitable research you need.</p>
                </div>
                <div class="cta__action">
                    <a class="button button--white button--md" href="{{ route('market-research.quiz') }}">
                        <span class="button__content">
                            <span class="button__label">Let's Go!</span>
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
        </div>
    </div>
    </div>
</div>

@endsection
