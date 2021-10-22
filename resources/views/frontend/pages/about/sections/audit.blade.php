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
                <h3 class="title--main">Audit Comittee</h3>
                <ul class="list-person">
                <li>
                    <h5 class="title--sub">Adji Baroto</h5><span class="text--medium light-blue">Chairman</span>
                    <p class="text--medium">Adji Baroto joined PT Taisho Pharmaceutical Indonesia Tbk in 2019. </p>
                    <p class="text--medium">Education: Indonesia University- Medical Faculty –</p>
                </li>
                <li>
                    <h5 class="title--sub">Lufti Julian</h5><span class="text--medium light-blue">Member</span>
                    <p class="text--medium">Adji Baroto joined PT Taisho Pharmaceutical Indonesia Tbk in 2019. </p>
                    <p class="text--medium">Education: Indonesia University- Medical Faculty –</p>
                </li>
                <li>
                    <h5 class="title--sub">Anang Yudiansyah S.</h5><span class="text--medium light-blue">Chairman</span>
                    <p class="text--medium">Diangkat sejak tahun 2019. </p>
                    <p class="text--medium">Education: 1994 - University of Indonesia – Faculty of Economics.</p>
                </li>
                </ul>
            </div>
            </section>
        </section>
    </section>
</div>
@endsection

