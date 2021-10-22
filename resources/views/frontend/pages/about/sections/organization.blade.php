<?php
/**
 * About Organization view // dummy
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
                <h3 class="title--main">Organization Structure</h3>
                <div class="wrapper_mobile_scroll">
                    <div class="wrapper_mobile_scroll-inside">
                        <div class="about-organization">
                            <div class="block-position">
                                <div class="block-position_title">
                                <h4 class="text--medium">Board of Commisioners</h4>
                                </div>
                                <div class="block-position_list"><span>Takeshi Ishiguro</span><span class="center">Osamu Murakami</span><span>Adji Baroto</span></div>
                            </div>
                            <div class="block-position">
                                <div class="block-position_title">
                                <h4 class="text--medium">President Director</h4>
                                </div>
                                <div class="block-position_list"><span>Jun Kuroda</span></div>
                            </div>
                            <div class="block-position">
                                <div class="block-position_title">
                                <h4 class="text--medium">General Manager</h4>
                                </div>
                                <div class="block-position_list"><span>Toshiyuki Ishii</span></div>
                            </div>
                        </div>
                        <div class="about-organization fluid">
                            <div class="block-position">
                                <div class="block-position_title">
                                <h4 class="text--medium">Commercial Director</h4>
                                </div>
                                <div class="block-position_list"><span>Sonny A. Nugroho</span></div>
                            </div>
                            <div class="block-position">
                                <div class="block-position_title">
                                <h4 class="text--medium">Finance Director</h4>
                                </div>
                                <div class="block-position_list"><span>David Pranadjaja</span></div>
                            </div>
                            <div class="block-position">
                                <div class="block-position_title">
                                <h4 class="text--medium">Technical Operational Director</h4>
                                </div>
                                <div class="block-position_list"><span>Budhy Herwindo</span></div>
                            </div>
                            <div class="block-position">
                                <div class="block-position_title">
                                <h4 class="text--medium">Human Resource</h4>
                                </div>
                                <div class="block-position_list"><span>Yetty Tampubolon</span></div>
                            </div>
                            <div class="block-position">
                                <div class="block-position_title">
                                <h4 class="text--medium">Internal Audit</h4>
                                </div>
                                <div class="block-position_list"><span>Grinatha G. Wasito</span></div>
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

