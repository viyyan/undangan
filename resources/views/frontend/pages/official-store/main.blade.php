<?php
/**
 * Official-store view
*/
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="masthead_thumb">
    <div class="masthead_thumb_images"><img src="{{ frontImage('official-store.jpeg') }}" alt=""/></div>
    <div class="masthead_thumb_ornament"></div>
    <div class="masthead_thumb_gradient"></div>
    <div class="masthead_thumb_bottom-gradient"></div>
    <div class="masthead_thumb_info">
        <h2 class="title--big_title white-color">Official Store</h2>
        <p class="title--small white-color">
            <br/>
        </p>
    </div>
</div>
<div class="main-container official-store">
    <section class="section--store">
    <h2 class="title--main light-blue">Our official online store</h2>
    <p class="title--small">Please click one of the following marketplace option and you will be redirected to our official store.</p>
    <div class="section--store_wrapper">
        <div class="section--store_block">
        </div>
        <div class="section--store_block">
        <div class="section--store_images"><img src="{{ frontImage('shoope.png') }}" width="62"></div>
        <div class="section--store_button"><a class="button_blue" href="https://shopee.co.id/taishoofficialshop" target="_blank">Check here</a></div>
        </div>
        <div class="section--store_block">
        <div class="section--store_images"><img src="{{ frontImage('store-bukalapak.png') }}" width="200"></div>
        <div class="section--store_button"><a class="button_blue" href="https://www.bukalapak.com/taisho-official" target="_blank">Check here</a></div>
        </div>
        <div class="section--store_block">
        </div>
    </div>
    </section>
</div>
@endsection
