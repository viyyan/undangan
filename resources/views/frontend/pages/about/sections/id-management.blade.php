<?php
/**
 * About Indonesia Management view //dummy
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
            <h3 class="title--main">Management Taisho Pharmaceutical Indonesia</h3>
            <div class="about-management">
            <div class="about-management_top"><img src="{{ frontImage('indonesia-management.jpeg?v=1') }}"></div>
            <div class="about-management_role border-conect hidden-sm hidden-xs">
                <div class="role_style">General Manager</div>
                <div class="role_style center">Technical Operation</div>
                <div class="role_style">Regional Commercial Director</div>
            </div>
            <div class="about-management_person">
                <div class="about-management_role hidden-lg hidden-md visible-sm visible-xs">
                    <div class="role_style">General Manager</div>
                </div>
                <div class="about-management_person-list">
                    <div class="about-management_person-images">
                        <img src="{{ frontImage('about/toshiyuki-ishii.jpg') }}">
                    </div>
                    <div class="about-management_person-copy">
                        <h5 class="text--medium">Toshiyuki Ishii</h5>
                        <p class="text--medium">{!! __('about.quote_gm') !!}</p>
                    </div>
                </div>
                <div class="about-management_role hidden-lg hidden-md visible-sm visible-xs">
                    <div class="role_style">Technical Operation</div>
                </div>
                <div class="about-management_person-list">
                    <div class="about-management_person-images">
                        <img src="{{ frontImage('about/budhy-herwindo.jpg') }}">
                    </div>
                    <div class="about-management_person-copy">
                        <h5 class="text--medium">Budhy Herwindo</h5>
                        <p class="text--medium">{!! __('about.quote_to') !!}</p>
                    </div>
                </div>
                <div class="about-management_role hidden-lg hidden-md visible-sm visible-xs">
                    <div class="role_style">Regional Commercial Director</div>
                </div>
                <div class="about-management_person-list">
                    <div class="about-management_person-images">
                        <img src="{{ frontImage('about/sonny-adi-nugroho.jpg') }}">
                    </div>
                    <div class="about-management_person-copy">
                        <h5 class="text--medium">Sonny Adi Nugroho</h5>
                        <p class="text--medium">{!! __('about.quote_rcd') !!}</p>
                    </div>
                </div>
            </div>
            <div class="about-management_role hidden-sm hidden-xs">
                <div class="role_style second">Finance Director</div>
                <div class="role_style second">HR Head</div>
                <div class="role_style second">Internal Audit</div>
            </div>
            <div class="about-management_person">
                <div class="about-management_role hidden-lg hidden-md visible-sm visible-xs">
                    <div class="role_style">HR Head</div>
                </div>
                <div class="about-management_person-list">
                    <div class="about-management_person-images">
                        <img src="{{ frontImage('about/david-pranadjaja.jpg') }}">
                    </div>
                    <div class="about-management_person-copy">
                        <h5 class="text--medium">David Pranadjaja</h5>
                        <p class="text--medium">{!! __('about.quote_fd') !!}</p>
                    </div>
                </div>
                <div class="about-management_role hidden-lg hidden-md visible-sm visible-xs">
                    <div class="role_style">Corporate Secretary</div>
                </div>
                <div class="about-management_person-list">
                    <div class="about-management_person-images">
                        <img src="{{ frontImage('about/yetty-tampubolon.jpg') }}">
                    </div>
                    <div class="about-management_person-copy">
                        <h5 class="text--medium">Yetty Tampubolon</h5>
                        <p class="text--medium">{!! __('about.quote_hr') !!}</p>
                    </div>
                </div>
                <div class="about-management_role hidden-lg hidden-md visible-sm visible-xs">
                    <div class="role_style">Finance Director</div>
                </div>
                <div class="about-management_person-list">
                    <div class="about-management_person-images">
                        <img src="{{ frontImage('about/girinatha-wasito.jpg') }}">
                    </div>
                    <div class="about-management_person-copy">
                        <h5 class="text--medium">Girinatha Wasito</h5>
                        <p class="text--medium">{!! __('about.quote_audit') !!}</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </section>
    </section>
</div>
@endsection

