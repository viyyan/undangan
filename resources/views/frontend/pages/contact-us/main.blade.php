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
            @if(session()->has('success'))
            <div class="form__alert success">
                <span style="color: green;">
                    {{ session()->get('success') }}
                <span>
            </div>
            @endif
            @if(session()->has('message'))
                <div class="form__alert success">
                    <span>
                        {{ session()->get('message') }}
                    <span>
                </div>
            @endif
            <form method="post" action="{{ route('contact-us.submit') }}" >
                @csrf
                <div class="contact-grid-2">
                    <div class="contact-wrapper_input">
                        <i class="person-icon"></i>
                        <input type="text" name="name" placeholder="Nama Depan">
                        <span><sup>*</sup></span>
                    </div>
                    <div class="contact-wrapper_input">
                        <i class="person-icon"></i>
                        <input type="text" name="last_name" placeholder="Nama Belakang">
                        <span><sup>*</sup></span>
                    </div>
                </div>
                <div class="contact-grid-2">
                    <div class="contact-wrapper_input">
                        <i class="email-icon"></i>
                        <input type="Email" name="email" placeholder="Email">
                        <span><sup>*</sup></span>
                    </div>
                    <div class="contact-wrapper_input">
                        <i class="phone-icon"></i>
                        <input type="Number" name="phone" placeholder="No. Handphone">
                    </div>
                </div>
                <div class="contact-grid-1">
                    <div class="contact-wrapper_input">
                        <i class="subject-icon"></i>
                        <input type="text" name="subject" placeholder="Subject">
                        <span><sup>*</sup></span>
                    </div>
                </div>
                <div class="contact-grid-1">
                    <div class="contact-wrapper_input textarea-field">
                        <textarea name="message" placeholder="Tuliskan isi disini (maks. 1.000 karakter"></textarea>
                        <span style="position: relative;top: 15px;"><sup>*</sup></span>
                    </div>
                </div>
                <div class="contact-grid-1">
                    <div class="contact-wrapper_submit">
                        <button class="submit-button">
                            Submit
                        </button>
                        <span>
                            *) Harus diisi
                        </span>
                    </div>
                </div>
            </form>
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
            <img src="{{ frontImages('parenting-ornament/daun.svg') }}">
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
@endsection
