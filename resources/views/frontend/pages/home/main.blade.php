<?php
/**
 * Home page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
    <section>
        <!--===============-->
        <!--Banner Section-->
        <!--===============-->
        <div class="home--section_top">
            <div class="container relative">
                <div class="home--section_top-text">
                    <h2>
                        Hilang Demamnya<br>
                        <font>Gembira Harinya!</font>
                    </h2>
                    <a class="main-button">Lihat produk kami</a>
                </div>
                <div class="home--section_top-images">
                    <div class="home--section_top-images-duck">
                        <img src="{{ frontImages('home-ornament/home-duck.svg') }}">
                    </div>
                    <div class="home--section_top-images-product">
                        <div class="home--section_top-images-product inside_left">
                            <img src="{{ frontImages('home-ornament/home-product_paracetamol-small.svg') }}">
                        </div>
                        <div class="home--section_top-images-product inside_right">
                            <img src="{{ frontImages('home-ornament/home-product_paracetamol.svg') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="general-ornament">
                <div class="general-ornament_gunung-left">
                    <img src="{{ frontImages('parenting-ornament/gunung_bg.svg') }}">
                </div>
                <div class="general-ornament_gunung-right">
                    <img src="{{ frontImages('parenting-ornament/gunung.svg') }}">
                </div>
                <div class="general-ornament_daun-center">
                    <div class="leaf"></div>
                </div>
                <div class="general-ornament_field-left">
                    <img src="{{ frontImages('parenting-ornament/field-left.svg') }}">
                </div>
                <div class="general-ornament_field-right">
                    <img src="{{ frontImages('parenting-ornament/field-right.svg') }}">
                </div>
                <div class="general-ornament_field-right">
                    <img src="{{ frontImages('parenting-ornament/field-right.svg') }}">
                </div>
                <div class="general-ornament_daun-right">
                    <img src="{{ frontImages('parenting-ornament/daun-small.svg') }}">
                </div>
                <div class="general-ornament_daun-left">
                    <img src="{{ frontImages('parenting-ornament/daun-medium.svg') }}">
                </div>
            </div>
        </div>
        <!--===============-->
        <!--Product Section-->
        <!--===============-->
        <div class="home--section_product">
            <div class="container relative">
                <div class="home--section_product-desc">
                    <div class="home--section_product-center">
                        <img src="{{ frontImages('Bottle.png') }}">
                    </div>
                    <div class="home--section_product-desc-text">
                        <div class="home--section_product-box right top">
                            <span>Nipe<sup>&reg;</sup> Fever Drop & Nipe<sup>&reg;</sup> Fever Sirup berguna untuk menurunkan demam yang menyertai flu serta meredakan rasa sakit seperti sakit kepala dan sakit gigi.</span>
                        </div>
                        <div class="home--section_product-box right center">
                            <span>Nipe<sup>&reg;</sup> Fever Drop cocok untuk Si Kecil usia 3-36 bulan</span>
                        </div>
                        <div class="home--section_product-box right bottom">
                            <span>1ml Nipe® Fever Drop mengandung 100mg Paracetamol*</span>
                        </div>
                        <div class="home--section_product-box left top">
                            <span>Nipe® Fever Sirup cocok untuk Si Kecil usia 1-6 tahun</span>
                        </div>
                        <div class="home--section_product-box left center">
                            <span>5ml Nipe® Fever Sirup mengandung 160mg Paracetamol*</span>
                        </div>
                        <div class="home--section_product-box left bottom">
                            <span>*baca aturan pakai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home--section_promotions">
            <!--===============-->
            <!--Berita Section-->
            <!--===============-->
            <div class="home--section_news">
                <div class="home--section_title flat">
                    <div class="home--section_title-text">
                        <div class="container">
                            <h2 class="main-title">Berita & Promo</h2>
                        </div>
                        <div class="outer-wrapper">
                            <div class="home--section_news-slider_content">
                                <div class="home--section_news-slider" id="promo">
                                    @foreach($banners as $banner)
                                    <div class="home--section_news-wrapper">
                                        <div class="home--section_news-content">
                                            <div class="content-images">
                                                <img src="{{ $banner->heroUrl() }}">
                                            </div>
                                            <div class="content-desc">
                                                @if (!empty($banner->logoUrl()))
                                                <div class="addon-logo">
                                                    <img src="{{ $banner->logoUrl() }}">
                                                </div>
                                                @endif
                                                <h2>{{ $banner->title }}</h2>
                                                <p>{{ $banner->subtitle }}</p>
                                                @if (isset($banner->url))
                                                    <a href="{{ $banner->url }}" class="main-button">{{ isset($banner->button_title) ? $banner->button_title : "Klik di sini" }}</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============-->
            <!--Article Section-->
            <!--===============-->
            <div class="home--section_articles">
                <div class="container">
                    <div class="home--section_title">
                        <div class="home--section_title-text">
                            <h2 class="main-title">Parenting tips</h2>
                        </div>
                        <div class="home--section_title-button">
                            <a class="main-button">Lihat semua tips</a>
                        </div>
                    </div>
                    <div class="home--section_articles-block">
                        <div class="article-blocks">
                            <div class="article-blocks_images">
                                <a href="">
                                    <img src="{{ frontImages('home-dummy01.png') }}">
                                </a>
                            </div>
                            <div class="article-blocks_desc">
                                <div class="article-blocks_tag default">
                                    <span class="tag">Demam & Penyakit</span>
                                    <a class="link-button">Read more</a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                        <div class="article-blocks">
                            <div class="article-blocks_images">
                                <a href="">
                                    <img src="{{ frontImages('home-dummy02.png') }}">
                                </a>
                            </div>
                            <div class="article-blocks_desc">
                                <div class="article-blocks_tag tumbuh-kembang">
                                    <span class="tag">Tumbuh Kembang</span>
                                    <a class="link-button">Read more</a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                        <div class="article-blocks">
                            <div class="article-blocks_images">
                                <a href="">
                                    <img src="{{ frontImages('home-dummy03.png') }}">
                                </a>
                            </div>
                            <div class="article-blocks_desc">
                                <div class="article-blocks_tag tips-bunda">
                                    <span class="tag">Tips Bunda Nippe</span>
                                    <a class="link-button">Read more</a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===============-->
            <!--Bottom Ornament Section-->
            <!--===============-->
            <div class="general--section_ornament">
                <img src="{{ frontImages('home--bottom_ornament.png') }}">
            </div>
        </div>
    </section>
@endsection
