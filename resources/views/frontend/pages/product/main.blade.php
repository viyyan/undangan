<?php
/**
 * Product page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="product-masthead">
    <div class="main-container">
    <div class="product-masthead_wrapper">
        <h2 class="title--big_title white-color">Our products</h2>
        <div class="product-masthead_images"><img src="{{ frontImage('product-hero.png') }}"></div>
        <div class="product-masthead_copy">
        <h3 class="title--main light-blue">Our expansive product line supports healthy lifestyles around the world</h3>
        <p class="text--medium white-color">With over a century of history, Taisho Pharmaceutical Holdings has the largest share of Japan’s over-the-counter pharmaceutical market and a strong presence in health food, cosmetics, and other fields. Our overseas expansion began in 1963 with exports of Lipovitan D to Taiwan. Today, our brands are popular with consumers in every part of Asia. In Europe, we are expanding based on 80 years of tradition and brand recognition built across the continent by French pharmaceutical manufacturer UPSA SAS.</p>
        </div>
    </div>
    </div>
</div>
<div class="main-container">
    <div class="product-content">
    <div class="product-sidebar">
        <p class="text--large">Categories</p>
        <div class="product-sidebar_search">
        <input class="input-normal" type="text" placeholder="Search">
        </div>
        <div class="product-sidebar_filter">
        <ul class="main-tree">
            <li>
            <div class="checkbox-filter">
                <input class="list-check" id="all" type="checkbox">
                <label class="checker all-check" for="all"></label>
            </div>All products
            <ul class="tree">
                @foreach($categories as $category)
                <li class="tree-item controllers">
                    <div class="checkbox-filter">
                        <input class="list-check" id="product-1" type="checkbox">
                        <label class="checker" for="product-1"></label>
                    </div><a class="trigger" href="#">{{ $category->name }}</a>
                    <ul class="tree-parent open">
                        @foreach($category->products as $product)
                        <li class="tree-item view">
                            <div class="checkbox-filter">
                                <input class="list-check" id="counterpain" type="checkbox">
                                <label class="checker" for="counterpain"></label>
                            </div>{{ $product->name }}
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
            </li>
        </ul>
        </div>
    </div>
    <div class="product-main">
        <div class="title--section">
        <div class="title--section_main">
            <h2 class="title--main">All products</h2>
        </div>
        <div class="title--section_option">
            <div class="title--section_option-wraper">
                @include('frontend.vendor.sort')
            </div>
        </div>
        </div>
        <div class="product-main_content">
            @foreach($products as $product)
            <div class="product-block">
                <div class="product_images"><img src="{{ $product->imageUrl() }}"/>
                @if($product->is_halal)
                <div class="product_images-halal"><img src="{{ frontImage('halal.png') }}"/></div>
                @endif
                </div>
                <div class="product_content">
                <h4 class="text--large">{{ $product->name }}</h4>
                <p class="text--medium">{{ $product->subtitle }}</p>
                </div>
                <div class="product-button"><a class="button_simple" href="{{ route('product', [ 'slug' => $product->slug ]) }}" tabindex="-1">View product Page</a></div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection
