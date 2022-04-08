<?php
/**
 * Home page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
    <!--===============-->
    <!--start: fixed Banner Section-->
    <!--===============-->
    <section class="banner--section">
        <img src="{{ frontImages('background.jpeg') }}">
    </section>
    <!--===============-->
    <!--start: title Section-->
    <!--===============-->
    <section class="title--section">
        <div class="container">
            <h2>
                YOUR<br>E-LIFESTYLE
            </h2>
            <h3>
                Bring future lifestyle into your today’s living.
            </h3>
        </div>
    </section>
    <!--===============-->
    <!--start: why-elektron Section-->
    <!--===============-->
    <section class="why-section">
        <div class="container">
            <div class="why-section_top">
                <div class="why-section_top-images">
                    <img src="{{ frontImages('why-gesit.jpeg') }}" alt="why Gesit">
                </div>
                <div class="why-section_top-content">
                    <h3>Why Elektron?</h3>
                    <p>
                        A FUTURE LIFESTYLE company with mission in changing current habit of Indonesian mobility and lifestyle, from conventional to electrification. By being simple, innovative, clear, accessible and fast.
                    </p>
                </div>
            </div>
            <div class="why-section_bottom">
                <div class="product-advantages">
                    <div class="product-advantages_box">
                        <div class="product-advantages_box-number">
                            01
                        </div>
                        <div class="product-advantages_box-content">
                            <h4>Future way of mobility</h4>
                            <p>Kendaraan listrik</p>
                        </div>
                    </div>
                    <div class="product-advantages_box">
                        <div class="product-advantages_box-number">
                            02
                        </div>
                        <div class="product-advantages_box-content">
                            <h4>Lifestyle products with edgy/futuristic touch</h4>
                            <p>Gadget dan mobility apparels</p>
                        </div>
                    </div>
                    <div class="product-advantages_box">
                        <div class="product-advantages_box-number">
                            03
                        </div>
                        <div class="product-advantages_box-content">
                            <h4>Future way of after sales service</h4>
                            <p>Service center dengan konsep baru</p>
                        </div>
                    </div>
                    <div class="product-advantages_box m-30">
                        <div class="product-advantages_box-number">
                            04
                        </div>
                        <div class="product-advantages_box-content p-30">
                            <h4>Future way of maintenance</h4>
                            <p>Sistem dan teknologi khas Elektron</p>
                        </div>
                    </div>
                    <div class="product-advantages_box w-40">
                        <div class="product-advantages_box-number">
                            05
                        </div>
                        <div class="product-advantages_box-content">
                            <h4>Future way of product interaction</h4>
                            <p>Dealership online</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===============-->
    <!--start: showcase section-->
    <!--===============-->
    <section class="section--showcase">
        <div class="section--showcase_wrapper">
            <div class="container">
                <div class="control-wrapper">
                    <h3>Our Products</h3>
                    <div class="tab-control tabLinks">
                        <button> Introduction</button>
                        <button> Featured</button>
                        <button> View in 360</button>
                        <button> Gallery</button>
                    </div>
                </div>
            </div>
            <div id="tab" class="tabs inliner">
                 <!--start: main section-->
                <div class="section-showcase_block main-show">
                    <div class="wrapper-inside">
                        <div class="desc-product">
                            <h4>
                                <img src="{{ frontImages('logo-gesit.svg') }}" alt="logo gesit">
                            </h4>
                            <p>
                                GESITS Electric Motorcycle is a work by Indonesian people. Initiated as a research project from Sepuluh November Technology Institute (ITS) and supported by Ministry of Research and Higher Education. Manufactured in PT WIKA Industri Manufaktur at Cileungsi Plant, Bogor, West Java.
                            </p>
                        </div>
                        <div class="images-product">
                            
                        </div>
                    </div>
                </div> 
                <!--start: hotspot section-->
                <div class="section-showcase_block hotspot-show">
                    content 2
                </div> 
                <!--start: rotate gallery section-->
                <div class="section-showcase_block rotate-show">
                    content 3
                </div> 
                <!--start: gallery section-->
                <div class="section-showcase_block gallery-show">
                    content 4
                </div> 
            </div>
        </div>
    </section>
    <!--==========================-->
    <!--=====start: location======-->
    <!--==========================-->
    <section class="section--location">
        <div class="container">
            <div class="section--location_wrapper">
                <div class="section--location_left">
                    <div class="section--location_title">
                        <h2>Our locations</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue tellus tellus senectus purus urna, aliquam neque. Interdum maecenas.
                        </p>
                    </div>
                    <div class="section--location_point" id="scrollbar">
                        <a href="#" class="active">
                            <div class="section--location_point-block">
                                <h3>Elektron Official Store</h3>
                                <p>Ruko Tol Boulevard, Blok F10, Jl. Pahlawan Seribu, Kelurahan Rawa Buntu, Kecamatan Serpong, Kota Tangerang Selatan, Provinsi Banten</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="section--location_point-block">
                                <h3>Elektron Gramedia Matraman</h3>
                                <p>Coming Soon</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="section--location_point-block">
                                <h3>Elektron Gramedia Bintaro Emerald</h3>
                                <p>Coming Soon</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="section--location_right">
                    <div id='contact-map'></div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================-->
    <!--=====end: location======-->
    <!--==========================-->
@endsection
