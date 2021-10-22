<?php
/**
 * Contact view
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="masthead_thumb">
    <div class="masthead_thumb_images"><img src="{{ frontImage('contact-us.jpeg') }}" alt=""/></div>
    <div class="masthead_thumb_ornament"></div>
    <div class="masthead_thumb_gradient"></div>
    <div class="masthead_thumb_bottom-gradient"></div>
    <div class="masthead_thumb_info">
    <h2 class="title--big_title white-color">Contact Us</h2>
    <p class="title--small white-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    </div>
</div>
<div class="main-container section--contact">
    <div class="section--contact_block office">
    <div class="section--contact_map">
        <div id="officeAddress" style="height: 225px;" data-marker="{{ frontImage('marker-icon.png') }}" data-marker-retina="{{ frontImage('marker-icon-2x.png') }}">
        </div>
    </div>
    <div class="section--contact_address">
        <h3 class="text--large office-ico">Office</h3>
        <p>Millennium Centennial Center 8th floor, Jl. Jend. Sudirman<br>Kav. 25, Jakarta 12920.</p><span>Phone: 021-3970 6720</span><a class="button_simple blue-background" href="https://g.page/mcc21?share" target="_blank">Get Direction</a>
    </div>
    </div>
    <div class="section--contact_block factory">
    <div class="section--contact_map">
        <div id="factoryAddress" style="height: 225px;" data-marker="{{ frontImage('marker-icon.png') }}"></div>
    </div>
    <div class="section--contact_address">
        <h3 class="text--large factory-ico">Factory</h3>
        <p>Jl. Raya Bogor Km. 38, Tapos, Kota Depok,<br>Jawa Barat 16458.</p><span>Phone: 021- 875 2583/2584</span><a class="button_simple blue-background" href="https://goo.gl/maps/2UGKc1jLbPZNMwVv5" target="_blank">Get Direction</a>
    </div>
    </div>
    <div class="section--contact_block report">
    <div class="section--contact_report-images"><img src="{{ frontImage('contact-report-images.png') }}"></div>
    <div class="section--contact_report-text">
        <h4 class="title--main light-blue">Pharmacovigilance</h4><span class="text--medium white-color">Reports of product complaints and side effects to email :</span><a class="text--large" href="mailto:pvcenter@ma.taisho.co.id">pvcenter@ma.taisho.co.id</a>
    </div>
    </div>
</div>
@endsection
