@extends('frontend.pages.product.main')
@section('content.product')
<div class="product--section_wave">
    <div class="product--section_wave-content third-product"></div>
</div>
<div class="product--section_content">

        <!--===============================================-->
        <!--============ product detail title =============-->
        <!--===============================================-->
        <div class="product--section_content-title nipe-expectorant">
            <div class="product--section_content-title-images nipe-expectorant">
                <div class="product--section_content-title-images-main">
                    <img src="{{ frontImages('products-fever-expectorant/product-sirup_main.png') }}" />
                </div>
            </div>
            <div class="product--section_content-title-text nipe-expectorant">
                <img src="{{ frontImages('products-fever-drop/product-sirup_title.svg') }}" />
            </div>
        </div>
    <div class="container">
        <!--================================================-->
        <!--============ product detail manfaat ============-->
        <!--================================================-->
        <div class="product_expectorant">
            <div class="container relative">
                <div class="product_expectorant-desc">
                    <div class="product_expectorant-center">
                        <img src="{{ frontImages('products-fever-expectorant/product-expectorant.png') }}">
                    </div>
                    <div class="product_expectorant-desc-text">
                        <div class="product_expectorant-box right top">
                            <span>Nipe<sup>&reg;</sup> Expectorant Kids & Nipe<sup>&reg;</sup> Expectorant Adult berguna Meredakan gejala batuk berdahak untuk anak dan dewasa.</span>
                        </div>
                        <div class="product_expectorant-box right center">
                            <span>Nipe<sup>&reg;</sup> Expectorant Adult cocok untuk dewasa atau usia di atas 12 Tahun</span>
                        </div>
                        <div class="cloud-ornament left">
                            <img src="{{ frontImages('products-fever-expectorant/awan_left.svg') }}">
                        </div>
                        <div class="product_expectorant-box right bottom">
                            <span>5ml Nipe<sup>&reg;</sup> Expectorant Adult mengandung 100mg Guaifenesin*</span>
                        </div>
                        <div class="product_expectorant-box left top">
                            <span>Nipe<sup>&reg;</sup> Fever Sirup cocok untuk Si Kecil usia 1-6 tahun</span>
                        </div>
                        <div class="cloud-ornament right">
                            <img src="{{ frontImages('products-fever-expectorant/awan_right.svg') }}">
                        </div>
                        <div class="product_expectorant-box left center">
                            <span>5ml Nipe<sup>&reg;</sup> Expectorant Kids mengandung 50mg Guaifenesin*</span>
                        </div>
                        <div class="product_expectorant-box left bottom">
                            <span>*baca aturan pakai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product--section_ornament">
        <div class="cloud-ornament">
            <img src="{{ frontImages('products-fever-expectorant/awan_right.svg') }}">
        </div>
        <img src="{{ frontImages('product-ornament.svg') }}" />
    </div>
</div>
@endsection
