<?php
/**
 * Where To Buy page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="wheretobuy--section">
    <div class="wheretobuy--section_top">
        <div class="container">
            <h2 class="general-title">Where to Buy</h2>
            <p class="general-desc">Ut enim ad minima veniam, quis nostrum exercitationem corporis suscipit laboriosam, nisi nemo enim ut aliquid ex commodi consequatur?</p>
            <div class="wheretobuy--section_store">
                <ul>
                    <li>
                        <div class="wheretobuy--section_store-images">
                            <img src="{{ frontImages('where-to-buy_tokopedia.svg') }}" />
                        </div>
                        <div class="wheretobuy--section_store-name">
                            <p>Menarini Official Store</p>
                        </div>
                        <div class="wheretobuy--section_store-action">
                            <a href="" class="main-button">
                                Buka Tokopedia
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="wheretobuy--section_store-images">
                            <img src="{{ frontImages('where-to-buy_shoope.svg') }}" />
                        </div>
                        <div class="wheretobuy--section_store-name">
                            <p>Menarini Official Store</p>
                        </div>
                        <div class="wheretobuy--section_store-action">
                            <a href="" class="main-button">
                                Buka Shoope
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="wheretobuy--section_store-images">
                            <img src="{{ frontImages('where-to-buy_bukalapak.png') }}" />
                        </div>
                        <div class="wheretobuy--section_store-name">
                            <p>Menarini Official Store</p>
                        </div>
                        <div class="wheretobuy--section_store-action">
                            <a href="" class="main-button">
                                Buka Bukalapak
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="wheretobuy--section_store-images">
                            <img src="{{ frontImages('where-to-buy_lazada.svg') }}" />
                        </div>
                        <div class="wheretobuy--section_store-name">
                            <p>Menarini Official Store</p>
                        </div>
                        <div class="wheretobuy--section_store-action">
                            <a href="" class="main-button">
                                Buka lazada
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="wheretobuy--section_box-addres">
                <div class="wheretobuy--section_box-addres_title">
                    <div class="wheretobuy--section_box-addres_title-images">
                        <img src="{{ frontImages('products-fever-sirup/product-apotek-ilustration.svg') }}" />
                    </div>
                    <div class="wheretobuy--section_box-addres_title-text">
                       <h3> Nipe<sup>&reg;</sup> Fever juga tersedia di berbagai jaringan apotek dan toko obat terdekat di sekitarmu</h3>
                    </div>
                    <div class="wheretobuy--section_box-addres_title-action">
                        <button class="main-button">
                            Beri akses lokasi
                        </button>
                    </div>
                </div>
                <div class="wheretobuy--section_box-addres_content">
                    <div class="wheretobuy--section_box-addres_content-map">
                        <div id='contact-map'></div>
                    </div>
                    <div class="wheretobuy--section_box-addres_content-detail" id="scrollbar">
                        <ul>
                            <li class="box-address">
                                <div class="box-address-number">
                                    <div class="box-address-number-value">
                                        <span>
                                            1
                                        </span>
                                    </div>
                                </div>
                                <div class="box-address-detail">
                                    <div class="box-address-detail-title">
                                        <h3>Apotek Senopati</h3>
                                        <h4>0.7 Km</h4>
                                    </div>
                                    <div class="box-address-detail_content">
                                        <p class="detail-address">
                                            Jl. Senopati Dalam I No.15, RT.6/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190
                                        </p>
                                        <div class="box-address-detail_action">
                                            <p class="phone-number">
                                                +62215736355
                                            </p>
                                            <button class="main-button">
                                                Get Direction
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="box-address">
                                <div class="box-address-number">
                                    <div class="box-address-number-value">
                                        <span>
                                            2
                                        </span>
                                    </div>
                                </div>
                                <div class="box-address-detail">
                                    <div class="box-address-detail-title">
                                        <h3>Apotek Senopati</h3>
                                        <h4>0.7 Km</h4>
                                    </div>
                                    <div class="box-address-detail_content">
                                        <p class="detail-address">
                                            Jl. Senopati Dalam I No.15, RT.6/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190
                                        </p>
                                        <div class="box-address-detail_action">
                                            <p class="phone-number">
                                                +62215736355
                                            </p>
                                            <button class="main-button">
                                                Get Direction
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="box-address">
                                <div class="box-address-number">
                                    <div class="box-address-number-value">
                                        <span>
                                            3
                                        </span>
                                    </div>
                                </div>
                                <div class="box-address-detail">
                                    <div class="box-address-detail-title">
                                        <h3>Apotek Senopati</h3>
                                        <h4>0.7 Km</h4>
                                    </div>
                                    <div class="box-address-detail_content">
                                        <p class="detail-address">
                                            Jl. Senopati Dalam I No.15, RT.6/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190
                                        </p>
                                        <div class="box-address-detail_action">
                                            <p class="phone-number">
                                                +62215736355
                                            </p>
                                            <button class="main-button">
                                                Get Direction
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="box-address">
                                <div class="box-address-number">
                                    <div class="box-address-number-value">
                                        <span>
                                            4
                                        </span>
                                    </div>
                                </div>
                                <div class="box-address-detail">
                                    <div class="box-address-detail-title">
                                        <h3>Apotek Senopati</h3>
                                        <h4>0.7 Km</h4>
                                    </div>
                                    <div class="box-address-detail_content">
                                        <p class="detail-address">
                                            Jl. Senopati Dalam I No.15, RT.6/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190
                                        </p>
                                        <div class="box-address-detail_action">
                                            <p class="phone-number">
                                                +62215736355
                                            </p>
                                            <button class="main-button">
                                                Get Direction
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wheretobuy--section-ornament">
        <div class="wheretobuy--section-ornament_gunung-left">
            <img src="{{ frontImages('parenting-ornament/gunung_bg.svg') }}">
        </div>
        <div class="wheretobuy--section-ornament_gunung-right">
            <img src="{{ frontImages('parenting-ornament/gunung.svg') }}">
        </div>
        <div class="wheretobuy--section-ornament_daun-center">
            <img src="{{ frontImages('parenting-ornament/daun.svg') }}">
        </div>
        <div class="wheretobuy--section-ornament_field-left">
            <img src="{{ frontImages('parenting-ornament/field-left.svg') }}">
        </div>
        <div class="wheretobuy--section-ornament_field-right">
            <img src="{{ frontImages('parenting-ornament/field-right.svg') }}">
        </div>
        <div class="wheretobuy--section-ornament_field-right">
            <img src="{{ frontImages('parenting-ornament/field-right.svg') }}">
        </div>
        <div class="wheretobuy--section-ornament_daun-right">
            <img src="{{ frontImages('parenting-ornament/daun-small.svg') }}">
        </div>
        <div class="wheretobuy--section-ornament_daun-left">
            <img src="{{ frontImages('parenting-ornament/daun-medium.svg') }}">
        </div>
        <div class="wheretobuy--section-ornament_bebek">
            <img src="{{ frontImages('wheretobuy-bebek.svg') }}">
        </div>
    </div>
</div>
@endsection
