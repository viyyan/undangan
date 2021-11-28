<?php
/**
 * Our 4 Pilars
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="page-top page-top--fixed">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><a href="">Who We Are</a><span class="page-top__breadcrumb__sep">/</span><span class="page-top__breadcrumb_current">OUR 4 PILLARS</span></div>
        </div>
        </div>
        <div class="page-top__info">
        <h1 class="text--3xl">We always push to deliver</h1>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-lg top">
    <div class="container">
    <div class="grid gap--md">
        <div class="column--25">
        <div class="feature">
            <div class="feature__thumb"><img src="{{ frontImages('home--transparent_data-visual.png') }}" alt=""/></div>
            <div class="feature__title">
            <h3 class="text--lg">High Quality & Transparent Data</h3>
            </div>
        </div>
        </div>
        <div class="column--25">
        <div class="feature">
            <div class="feature__thumb"><img src="{{ frontImages('home--responsible-visual.png') }}" alt=""/></div>
            <div class="feature__title">
            <h3 class="text--lg">Responsive & Responsible</h3>
            </div>
        </div>
        </div>
        <div class="column--25">
        <div class="feature">
            <div class="feature__thumb"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
            <div class="feature__title">
            <h3 class="text--lg">Deep Analysis & Impactful Insight</h3>
            </div>
        </div>
        </div>
        <div class="column--25">
        <div class="feature">
            <div class="feature__thumb"><img src="{{ frontImages('home--accesible-visual.png') }}" alt=""/></div>
            <div class="feature__title">
            <h3 class="text--lg">Accessible Report Both Offline & Online</h3>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="section section--space-md bg--main-red-5 main--pilar">
    <div class="container">

            <div class="feature__desc feature--left mb--20">
                <div class="absolute--number gradient--number">
                    <span>1</span>
                </div>
                <div class="grid bg--main-red-3 column--85 align-center">
                    <div class="column--thumb">
                        <div class="feature__thumb"><img src="{{ frontImages('home--transparent_data-visual.png') }}" alt=""/></div>
                    </div>
                    <div class="column--auto">
                        <div class="feature__title-left wd-90">
                            <p class="text--sm">Are you sure your data is valid and relevant to you research objective?</p>
                            <h3 class="text--xl no-margin">We deliver 100% AUDIO RECORD CHECKING for high quality data and analysis.</h3>
                            <span class="text--md add-border">High Quality & Transparent Data</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature__desc feature--right mb--20">
                <div class="absolute--number gradient--number">
                    <span>2</span>
                </div>
                <div class="grid bg--main-red-3 column--85 align-center">
                    <div class="column--thumb">
                        <div class="feature__thumb"><img src="{{ frontImages('home--responsible-visual.png') }}" alt=""/></div>
                    </div>
                    <div class="column--auto">
                        <div class="feature__title-left wd-90">
                            <p class="text--sm">Are you sure your research is on the right hand?</p>
                            <h3 class="text--xl no-margin">We respond within 1 working day. You have our undivided attention. We have high senior involvement to cater your business objectives.</h3>
                            <span class="text--md add-border">Responsive & Responsible</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="feature__desc feature--left mb--20 third-point">
                <div class="absolute--number gradient--number">
                    <span>3</span>
                </div>
                <div class="grid bg--main-red-3 column--85 align-center">
                    <div class="column--thumb">
                        <div class="feature__thumb"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
                    </div>
                    <div class="column--auto">
                        <div class="feature__title-left wd-90">
                            <p class="text--sm">Are you sure your research result is the best solution?</p>
                            <h3 class="text--xl no-margin">We deliver high quality data results into deep analysis. More than just research, we focus on delivering impactful insight for your business solution.</h3>
                            <span class="text--md add-border">Responsive & Responsible</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature__desc feature--right mb--20 no-line">
                <div class="absolute--number gradient--number">
                    <span>4</span>
                </div>
                <div class="grid bg--main-red-3 column--85 px--10">
                    <div class="column--thumb">
                        <div class="feature__thumb"><img src="{{ frontImages('home--accesible-visual.png') }}" alt=""/></div>
                    </div>
                    <div class="column--auto">
                        <div class="feature__title-left wd-90">
                            <p class="text--sm">Are you curious about your research progress?</p>
                            <h3 class="text--xl no-margin">Our tools allow you to monitor the survey progress and reports live. You can access and engage with the research data and insights.</h3>
                            <span class="text--md add-border">Accessible Report Both Online & Offline</span>
                        </div>
                        <p class="text--md no-margin">Click here to see sample</p>
                        <div class="cta__action feature__cta">
                            <div class="feature__cta-block">
                                <a class="button button--white button--md" href="https://public.tableau.com/app/profile/digital.clove/viz/LiveAchievementDummy/Dashboard" target="blank_"><span class="button__content"><span class="button__label">Live Achievement Dashboard</span><span class="button__icon"><i class="icon__arrow">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="4" x2="20" y1="12" y2="12"></line>
                                    <polyline points="14 6 20 12 14 18"></polyline>
                                    </svg></i></span></span>
                                </a>
                            </div>
                            <div class="feature__cta-block">
                                <a class="button button--white button--md" href="https://public.tableau.com/app/profile/digital.clove/viz/OnlineReportDummy/Cover" target="blank_"><span class="button__content"><span class="button__label">Online Report</span><span class="button__icon"><i class="icon__arrow">
                                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="4" x2="20" y1="12" y2="12"></line>
                                    <polyline points="14 6 20 12 14 18"></polyline>
                                    </svg></i></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<script type='text/javascript'>
    var scriptElement = document.createElement('script');
    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';

    var divElement1 = document.getElementById('viz1636272595134');
    var vizElement1 = divElement1.getElementsByTagName('object')[0];
    vizElement1.style.width = '100%';
    vizElement1.style.height = '1010px';

    var divElement2 = document.getElementById('viz1636272821106');
    var vizElement2 = divElement2.getElementsByTagName('object')[0];
    vizElement2.style.width = '100%';
    vizElement2.style.height = '760px';

    vizElement1.parentNode.insertBefore(scriptElement, vizElement1);
    vizElement2.parentNode.insertBefore(scriptElement, vizElement2);
</script>
@endsection
