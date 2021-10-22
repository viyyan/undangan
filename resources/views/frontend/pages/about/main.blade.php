<?php
/*
* About-us view
*/
?>
@extends('frontend.layouts.basic')
@section('content')
    <div class="masthead_thumb">
        <div class="masthead_thumb_images"><img src="{{ frontImage('aboutus.jpeg') }}" alt=""/></div>
        <div class="masthead_thumb_ornament"></div>
        <div class="masthead_thumb_gradient"></div>
        <div class="masthead_thumb_bottom-gradient"></div>
        <div class="masthead_thumb_info">
        <h2 class="title--big_title white-color">About Us</h2>
        <p class="title--small white-color">Ever since our founding, we have evolved in response to changing times, always seeking to support the health of our customers.</p>
        </div>
    </div>
    <div class="section--caption blue-background flex-box">
        <div class="section--caption-images"><img src="{{ frontImage('aboutthumbnail.png') }}"></div>
        <div class="section--caption-text">
        <h2 class="title--main light-blue">Brief History</h2>
        <p class="text--medium white-color" id="content-about">PT Taisho Pharmaceutical Indonesia Tbk   (the “Company”) was initially established as PT Squibb Indonesia in 1970. The Company commenced commercial operations in 1972. The Company was running in pharmaceutical industry, produced Over- the- Counter (“ OTC”)  and Ethical products, both for domestic and export markets. In accordance with article 3 of the Company's Articles of Association, the Company's activities are to develop, register, process, produce and sell chemical, pharmaceutical and health care products. In 2009, the ownership of the Company acquired by Taisho Pharmaceutical Co. Ltd., a company incorporated in Japan.<br>Our head office is located at Wisma Tamara 10th floor, Jl. Jenderal Sudirman Kav. 24, Jakarta 12920 . The Company's manufacturing plant is located at JI. Raya Bogor Km. 38, Cilangkap Depok – 16958</p>
        </div>
    </div>
    @yield('content-about')
@endsection
