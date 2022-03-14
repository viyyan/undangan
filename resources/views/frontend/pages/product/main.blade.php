<?php
/**
 * Products page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="product--section">
    <div class="product--section_top">
        <div class="container">
            <h2 class="general-title">Produk kami</h2>
            <p class="general-desc">Ut enim ad minima veniam, quis nostrum exercitationem corporis suscipit laboriosam, nisi nemo enim ut aliquid ex commodi consequatur?</p>
        </div>
    </div>
    <div class="product--section_main">
        <div class="container">
            <div class="product--section_product-wrapper">
                <div class="product--section_product-content {{ isCurrent('product.syrup') ? 'active' : '' }}">
                    <a href="{{ route('product.syrup') }}">
                        <img src="{{ frontImages('product-nipe-syrup.png') }}" />
                    </a>
                </div>
                <div class="product--section_product-content {{ isCurrent('product.drop') || isCurrent('product') ? 'active' : '' }}">
                    <a href="{{ route('product.drop') }}">
                        <img src="{{ frontImages('product-nipe-drop.png') }}" />
                    </a>
                </div>
                <div class="product--section_product-content {{ isCurrent('product.expectorant') ? 'active' : '' }}">
                    <a href="{{ route('product.expectorant') }}">
                        <img src="{{ frontImages('product-nipe-expectorant.png') }}" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    @yield('content.product')
</div>
@endsection
