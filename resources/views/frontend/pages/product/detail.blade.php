<?php
/**
 * Product Detail page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
@if (isset($product))
<div class="masthead_thumb">
    <div class="masthead_thumb_images"><img src="{{ $product->heroUrl() }}" alt=""/></div>
    <div class="masthead_thumb_ornament"></div>
    <div class="masthead_thumb_gradient"></div>
    <div class="masthead_thumb_bottom-gradient"></div>
    <div class="masthead_thumb_info">
    <h2 class="title--big_title white-color">{{ $product->name }}</h2>
    <p class="title--small white-color" style="color:white!important;">{{ $product->subtitle }}</p>
    </div>
</div>
<div class="product-detail_info">
    <div class="product-detail_info-wrapper">
    <div class="product-detail_info-text">
        <h2 class="title--main">About the product</h2>
        <p class="text--medium grey-color">
            {{ $product->desc }}
        </p>
    </div>
    <div class="product-detail_info-images">
        <div class="product-detail_info-images_wrapper"> <img src="{{ $product->imageUrl() }}"></div>
        <div class="halal-label">
            @if($product->is_halal)
            <img src="{{ frontImage('halal.png') }}">
            @endif
        </div>
    </div>
    </div>
</div>
@if (count($product->variants) > 0)
<section class="product-variant">
    <div class="main-container dots-slider">
    <div class="product-variant_title">
        <div class="asNavfor-title">
        <h3 class="title--main">Product variants</h3>
        </div>
        <div class="asNavfor-slider">
            @foreach($product->variants as $key => $variant)
            <div class="asNavfor-slider_wrapper">
                <div class="asNavfor-slider_list"><a class="{{ $key == 0 ? 'active' : ''  }}" href="#" data-slide="{{ $key }}">{{ $variant->name }}</a></div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="product-variant_content anime--slider" id="product_detail-slider">
        @foreach($product->variants as $key => $variant)
        <div class="product-variant_slide-wrapper">
            <div class="product-variant_slide">
                <div class="product-variant_images" data-animation="animate__fadeInLeft" data-delay="0.1"> <img src="{{ $variant->imageUrl() }}"></div>
                <div class="product-variant_copy costumscroll" data-mcs-theme="dark">
                <div class="product-variant_wrapper">
                    <h4 class="title--big_title">{{ $variant->name }}</h4>
                    <h5 class="title--main light-blue">{{ $variant->subtitle }}</h5>
                    <p class="text--medium">{{ $variant->desc }}</p>
                    @if(!empty($variant->category))
                    <div class="product-variant_desc">
                        <div class="product-variant_desc-title"><span>Category </span></div>
                        <div class="product-variant_desc-detail"><span>{!! $variant->category !!}</span></div>
                    </div>
                    @endif
                    @if(!empty($variant->packaging))
                    <div class="product-variant_desc">
                        <div class="product-variant_desc-title"><span>Packaging</span></div>
                        <div class="product-variant_desc-detail"><span>{!! $variant->packaging !!}</span></div>
                    </div>
                    @endif
                    @if(!empty($variant->composition))
                    <div class="product-variant_desc">
                    <div class="product-variant_desc-title"><span>Composition</span></div>
                    <div class="product-variant_desc-detail"><span>{!! $variant->composition !!}</span></div>
                    </div>
                    @endif
                    @if(!empty($variant->dose_usage))
                    <div class="product-variant_desc">
                    <div class="product-variant_desc-title"><span>Dose &amp; Usage</span></div>
                    <div class="product-variant_desc-detail"><span>{!! $variant->dose_usage !!}</span></div>
                    </div>
                    @endif
                    @if(!empty($variant->note))
                    <div class="product-variant_desc">
                    <div class="product-variant_desc-title"><span>Note</span></div>
                    <div class="product-variant_desc-detail"><span>{!! $variant->note !!}</span></div>
                    </div>
                    @endif
                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="product-detail_slider-nav blue-active_dots">  </div>
    <div class="home--product_direct-link">
        <p>Wants to buy our product online?</p><a class="button_simple white" href="#">Click Here         </a>
    </div>
    </div>
</section>
@endif

<section class="product-tvc">
        <div class="product-tvc_wrapper home--comercial">
            <div class="masthead-container">
                <div class="home--comercial_wrapper dots-slider">
                    <div class="masthead_slider article_slider" id="comercial_slider">
                        @foreach($product->tvcs as $tvc)
                        <div class="masthead_slider-wrapper">
                            <div class="masthead_slider-block">
                            <div class="masthead_slider-featured">
                                <div class="banner--video-bg">
                                <div class="banner--media _media--video">
                                    <div class="video__youtube" data-video-id="{{ $tvc->youtube_id }}" data-autoplay="false"></div>
                                </div>
                                <div class="video__youtube--cover">
                                    <div class="banner--bg _bg--image" style="background-image:url('{{ $tvc->youtubeThumbUrl }}');"> </div>
                                    <div class="banner--bg _bg--gradient"></div>
                                    <div class="banner--inner">
                                    <div class="banner--main">
                                        <div class="banner--content _text--white"></div><a class="video__youtube--play" href=""><i class="icon--play"></i></a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="masthead_slider-text">
                                <h2 class="title--main">{{ $tvc->title }}</sup></h2>
                                <p class="text--medium">{{ $tvc->desc }}</p>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="masthead_slider-nav blue-active_dots"></div>
                </div>
            </div>
        </div>
</section>

<section class="product-social_media">
    <div class="main-container">
    <div class="product-social_media-wrapper">
        <div class="product-social_media-title">
        <h4 class="title--main white-color">Follow {{ $product->name }} on Social media</h4>
        </div>
        <div class="product-social_media-link">
            @if ($product->instagram_name)
            <a class="button_white" href="{{ $product->instagram_url }}" target="_blank">>
                <i class="instagram"></i> {{ $product->instagram_name }}
            </a>
            @endif
            @if ($product->facebook_name)
            <a class="button_white" href="{{ $product->facebook_url }}" target="_blank">>
                <i class="facebook"></i> {{ $product->facebook_name }}
            </a>
            @endif
        </div>
    </div>
    </div>
</section>
@endif
@endsection
