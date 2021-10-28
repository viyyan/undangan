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
            <div class="cta__main grid gap--2xl">
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('cta--thumbnail.png') }}" alt=""/></div>
                <div class="cta__content column--50 cta__content--left">
                <div class="cta__header">
                    <h2 class="cta__title text--3xl">Hello, we are Clove</h2>
                </div>
                <div class="cta__body">
                    <p>The first market research consultant that provide transparent data, with 100% audio checking, tailored to your need.</p>
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
                <div class="cta__thumbnail column--50"><img src="{{ frontImages('cta--thumbnail.png') }}" alt=""/></div>
                <div class="cta__content column--50 cta__content--left">
                <div class="cta__header">
                    <h2 class="cta__title text--3xl">Hello, we are Clove</h2>
                </div>
                <div class="cta__body">
                    <p>The first market research consultant that provide transparent data, with 100% audio checking, tailored to your need.</p>
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
    <div class="container">
    <div class="grid gap--md">
        <div class="column--50">
        <div class="card card__menu"><a href="#">
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
        <div class="card card__menu"><a href="#">
            <div class="card__inner">
                <div class="card__thumb">
                <div class="card__thumb__image"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
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
