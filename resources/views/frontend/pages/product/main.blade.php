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
                    <img src="{{ frontImages('product-nipe-syrup.png') }}" />
                    <div class="product_button-klick">
                        <a href="{{ route('product.syrup') }}">
                            Klik untuk detail
                        </a>
                    </div>
                </div>
                <div class="product--section_product-content {{ isCurrent('product.drop') || isCurrent('product') ? 'active' : '' }}">
                    <img src="{{ frontImages('product-nipe-drop.png') }}" />
                    <div class="product_button-klick">
                        <a href="{{ route('product.drop') }}">
                            Klik untuk detail
                        </a>
                    </div>
                </div>
                <div class="product--section_product-content {{ isCurrent('product.expectorant') ? 'active' : '' }}">
                    <img src="{{ frontImages('product-nipe-expectorant.png') }}" />
                    <div class="product_button-klick">
                        <a href="{{ route('product.expectorant') }}">
                            Klik untuk detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content.product')
</div>
@endsection
