<?php
/**
 * About Coorporate view
 */
?>
@extends('frontend.pages.about.main')
@section('content-about')
<div class="main-container">
    <section class="flex-container">
    @include('frontend.pages.about.sidebar')
        <section class="main--content small">
            <section class="about">
            <div class="about-wrapper">
                <h3 class="title--main">Corporate Secretary</h3>
                <ul class="list-person">
                <li>
                    <h5 class="title--sub">Girinatha Gunatama Wasito</h5><span class="text--medium light-blue">Corporate Secretary</span>
                    <p class="text--medium">Appointed since 2021</p>
                    <p class="text--medium">Education: 2011 – Monash University – Bachelor of Business and Commerce</p>
                </li>
                </ul>
            </div>
            </section>
        </section>
    </section>
</div>
@endsection

