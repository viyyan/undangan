<?php
/**
 * About Vision view
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
                <div class="about_mission">
                <div class="about_mission-text">
                    <h3 class="title--main">Our Mission</h3>
                    <p class="text--midle-range">The Company's mission is to contribute to society by creating and offering superior pharmaceuticals and health-related products as well as healthcare-related information and services in socially responsible ways that enrich people's lives by improving health and beauty.</p>
                </div>
                <div class="about_mission-images"><img src="{{ frontImages('about-mission.png') }}"></div>
                </div>
                <div class="about_vision">
                <h3 class="title--main">Our Vision</h3>
                <div class="about_vision-wrapper">
                    <p class="text--medium">Focus on core businesses :</p>
                    <ul class="border-list">
                    <li class="text--midle-range">Self-Medication Operation Group, Prescription Pharmaceutical Operation Group</li>
                    <li class="text--midle-range">Businesses based on clear scientific and objective evidence that take full advantage of the Company's strengths</li>
                    </ul>
                    <p class="text--medium">Continue to drive sustained growth in business activities while fulfilling the following obligations expected of the Company by stakeholders:</p>
                </div>
                <ul>
                    <li><b>For consumers,</b> the Company will strive to help realize healthier and more enriched lives based on the theme of health in various fields.</li>
                    <li><b>For business customers and suppliers,</b> the Company will establish and maintain fair and reasonable relationships.</li>
                    <li><b>For employees,</b> the Company will respect the human rights and dignity of each individual and endeavor to secure employment.</li>
                    <li><b>For shareholders and other investors,</b> the Company will disclose proper information in a fair and timely manner.</li>
                    <li><b>For local communities,</b> the Company will remain actively engaged in the community as a corporate citizen while striving to protect the environment and build mutually beneficial relationships.</li>
                </ul>
                </div>
            </div>
            </section>
        </section>
    </section>
</div>
<div class="about-value">
    <div class="main-container">
        <section class="about-value_wrapper">
            <h3 class="title--main">Our Values</h3>
            <p class="text--medium">Based on the Company's Founding Spirit, the Company is working to share the following values internally as it conducts business activities:</p>
            <div class="about-value_block">
            <div class="about-value_list">
                <div class="about-value_list-images"><img src="{{ frontImages('about-value_1.png') }}"></div>
                <div class="about-value_list-text">
                <p>Compliance with laws, regulations and other rules</p>
                </div>
            </div>
            <div class="about-value_list">
                <div class="about-value_list-images"><img src="{{ frontImages('about-value_2.png') }}"></div>
                <div class="about-value_list-text">
                <p>High ethical standards</p>
                </div>
            </div>
            <div class="about-value_list">
                <div class="about-value_list-images"><img src="{{ frontImages('about-value_3.png') }}"></div>
                <div class="about-value_list-text">
                <p>Honesty, diligence, passion</p>
                </div>
            </div>
            <div class="about-value_list">
                <div class="about-value_list-images"><img src="{{ frontImages('about-value_4.png') }}"></div>
                <div class="about-value_list-text">
                <p>Competitive viewpoint (Provide higher quality products at lower prices, and even better services)</p>
                </div>
            </div>
            <div class="about-value_list">
                <div class="about-value_list-images"><img src="{{ frontImages('about-value_5.png') }}"></div>
                <div class="about-value_list-text">
                <p>Logical thinking</p>
                </div>
            </div>
            <div class="about-value_list">
                <div class="about-value_list-images"><img src="{{ frontImages('about-value_6.png') }}"></div>
                <div class="about-value_list-text">
                <p>Value standards from a long-term perspective</p>
                </div>
            </div>
            </div>
            <div class="about-4c"><img src="{{ frontImages('about/4c.png') }}"></div>
        </section>
    </div>
</div>
@endsection

