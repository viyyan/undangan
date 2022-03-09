<?php
/**
 * Contact Us page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="contact">
    <div class="section_contact-top">
        <h2 class="general-title">Contact us</h2>
        <p class="general-desc">Ut enim ad minima veniam, quis nostrum exercitationem corporis suscipit laboriosam, nisi nemo enim ut aliquid ex commodi consequatur?</p>
    </div>
    <div class="section_contact-content">
        <div class="contact-decoration">
            <img src="{{ frontImages('contact-ornament.svg') }}" />
        </div>
        <div class="contact-form">
            <form>
                <div class="contact-grid-2">
                    <div class="contact-wrapper_input">
                        <i class="person-icon"></i>
                        <input type="text" placeholder="Nama Depan">
                    </div>
                    <div class="contact-wrapper_input">
                        <i class="person-icon"></i>
                        <input type="text" placeholder="Nama Belakang"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
