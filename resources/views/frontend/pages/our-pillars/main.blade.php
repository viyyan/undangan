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
<div class="section section--space-md bg--main-red-5">
    <div class="container">
        
            <div class="feature__desc feature--left mb--20">
                <div class="absolute--number gradient--number">
                    <span>1</span>
                </div>
                <div class="grid bg--main-red-3 column--85 align-center">
                    <div class="column--25">
                        <div class="feature__thumb"><img src="{{ frontImages('home--transparent_data-visual.png') }}" alt=""/></div>
                    </div>
                    <div class="column--75">
                        <div class="feature__title-left wd-90">
                            <h3 class="text--xl no-margin">Are you sure your data is valid and relevant to you research objective?</h3>
                            <p class="text--sm">We deliver 100% AUDIO RECORD CHECKING for high quality data and analysis.</p>
                            <span class="text--sm bg--primary">High Quality & Transparent Data</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature__desc feature--right mb--20">
                <div class="absolute--number gradient--number">
                    <span>2</span>
                </div>
                <div class="grid bg--main-red-3 column--85 align-center">
                    <div class="column--25">
                        <div class="feature__thumb"><img src="{{ frontImages('home--responsible-visual.png') }}" alt=""/></div>
                    </div>
                    <div class="column--75">
                        <div class="feature__title-left wd-90">
                            <h3 class="text--xl no-margin">Are you sure your research is on the right hand?</h3>
                            <p class="text--sm">We respond within 1 working day. You have our undivided attention. We have high senior involvement to cater your business objectives.</p>
                            <span class="text--sm bg--primary">Responsive & Responsible</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="feature__desc feature--left mb--20">
                <div class="absolute--number gradient--number">
                    <span>3</span>
                </div>
                <div class="grid bg--main-red-3 column--85 align-center">
                    <div class="column--25">
                        <div class="feature__thumb"><img src="{{ frontImages('card-menu--thumbnail.png') }}" alt=""/></div>
                    </div>
                    <div class="column--75">
                        <div class="feature__title-left wd-90">
                            <h3 class="text--xl no-margin">Are you sure your research result is the best solution?</h3>
                            <p class="text--sm">We deliver high quality data results into deep analysis. More than just research, we focus on delivering impactful insight for your business solution.</p>
                            <span class="text--sm bg--primary">Responsive & Responsible</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature__desc feature--right mb--20 no-line">
                <div class="absolute--number gradient--number">
                    <span>4</span>
                </div>
                <div class="grid bg--main-red-3 column--85 px--10">
                    <div class="column--25">
                        <div class="feature__thumb"><img src="{{ frontImages('home--accesible-visual.png') }}" alt=""/></div>
                    </div>
                    <div class="column--75">
                        <div class="feature__title-left wd-90">
                            <h3 class="text--xl no-margin">Are you curious about your research progress?</h3>
                            <p class="text--sm">Our tools allow you to monitor the survey progress and reports live. You can access and engage with the research data and insights.                            </p>
                            <span class="text--sm bg--primary">High Quality & Transparent Data</span>
                            <div class="feature_tableu placeholder bg--main-red-5">
                                <span class="text--xs">Embedded Tableau Placeholder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
