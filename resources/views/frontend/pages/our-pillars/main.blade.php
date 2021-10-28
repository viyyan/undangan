<?php
/**
 * Our 4 Pilars
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="page-top page-top--fixed">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><a href="">Who We Are</a><span class="page-top__breadcrumb__sep">/</span><span class="page-top__breadcrumb_current">OUR 4 PILLARS</span></div>
        </div>
        </div>
        <div class="page-top__info">
        <h1 class="text--3xl">We always push to deliver</h1>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-lg">
    <div class="container">
    <div class="grid gap--md">
        <div class="column--25">
        <div class="feature">
            <div class="feature__thumb"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
            <div class="feature__title">
            <h3 class="text--lg">High Quality & Transparent Data</h3>
            </div>
        </div>
        </div>
        <div class="column--25">
        <div class="feature">
            <div class="feature__thumb"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
            <div class="feature__title">
            <h3 class="text--lg">High Quality & Transparent Data</h3>
            </div>
        </div>
        </div>
        <div class="column--25">
        <div class="feature">
            <div class="feature__thumb"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
            <div class="feature__title">
            <h3 class="text--lg">High Quality & Transparent Data</h3>
            </div>
        </div>
        </div>
        <div class="column--25">
        <div class="feature">
            <div class="feature__thumb"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
            <div class="feature__title">
            <h3 class="text--lg">High Quality & Transparent Data</h3>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-5">
    <div class="container"></div>
</div>
@endsection
