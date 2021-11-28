<?php
/**
 * Case studies
 */
?>
@extends('frontend.layouts.basic')
@section('content')

<div class="page-top">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><a href="">What We Do</a><span class="page-top__breadcrumb__sep">/</span><span class="page-top__breadcrumb_current">Our Tools</span></div>
        </div>
        </div>
        <div class="page-top__info">
        <h1 class="text--3xl">Tools that are exclusively <br />made by CLOVE</h1>
        <p>Monitor the survey progress and reports live and engage with the research data and insights.</p>
        </div>
    </div>
    </div>
</div>
<div class="section bg--main-red-4">
    <div class="container">
    <div class="section__main">
        <div class="section__body">
        <div class="grid grid--center gap--md">
            <div class="column--33">
            <article class="card card--info-bottom">
                <div class="card__inner">
                <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('our_tools-images01.png') }}" alt=""/></div>
                </div>
                <div class="card__tag bg--primary">Registered PowerBI or Tableau</div>
                <div class="card__info">
                    <div class="card__info__inner">
                    <div class="card__icon"><img src="{{ frontImages('card--icon.svg') }}" alt=""/></div>
                    <div class="card__info__main">
                        <div class="card__title">
                        <h3 class="card__title__main text--lg"><a href="#">Live Achievement Dashboard</a></h3>
                        </div>
                        <div class="card__desc">
                        <p>Showing the achievement in real time basis</p>
                        </div>
                    </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                </div>
                </div>
            </article>
            </div>
            <div class="column--33">
            <article class="card card--info-bottom">
                <div class="card__inner">
                <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('our_tools-images02.png') }}" alt=""/></div>
                </div>
                <div class="card__tag bg--primary">Registered PowerBI or Tableau</div>
                <div class="card__info">
                    <div class="card__info__inner">
                    <div class="card__icon"><img src="{{ frontImages('card--icon02.svg') }}" alt=""/></div>
                    <div class="card__info__main">
                        <div class="card__title">
                        <h3 class="card__title__main text--lg"><a href="#">Online Reporting</a></h3>
                        </div>
                        <div class="card__desc">
                        <p>Report put into online which can be accessed anytime anywhere</p>
                        </div>
                    </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                </div>
                </div>
            </article>
            </div>
            <div class="column--33">
            <article class="card card--info-bottom">
                <div class="card__inner">
                <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('our_tools-images03.png') }}" alt=""/></div>
                </div>
                <div class="card__tag bg--main-red-4">Closer (made by Clove))</div>
                <div class="card__info">
                    <div class="card__info__inner">
                    <div class="card__icon"><img src="{{ frontImages('card--icon03.svg') }}" alt=""/></div>
                    <div class="card__info__main">
                        <div class="card__title">
                        <h3 class="card__title__main text--lg"><a href="#">Online Diary</a></h3>
                        </div>
                        <div class="card__desc">
                        <p>Capturing consumers<br>activities in real time</p>
                        </div>
                    </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                </div>
                </div>
            </article>
            </div>
            <div class="column--33">
            <article class="card card--info-bottom">
                <div class="card__inner">
                <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('our_tools-images04.png') }}" alt=""/></div>
                </div>
                <div class="card__tag bg--black">MyPer (made by Clove)</div>
                <div class="card__info">
                    <div class="card__info__inner">
                    <div class="card__icon"><img src="{{ frontImages('card--icon04.svg') }}" alt=""/></div>
                    <div class="card__info__main">
                        <div class="card__title">
                        <h3 class="card__title__main text--lg"><a href="#">Mystery Shoppers</a></h3>
                        </div>
                        <div class="card__desc">
                        <p>Capturing the process with hidden camera</p>
                        </div>
                    </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                </div>
                </div>
            </article>
            </div>
            <div class="column--33">
            <article class="card card--info-bottom">
                <div class="card__inner">
                <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('our_tools-images05.png') }}" alt=""/></div>
                </div>
                <div class="card__tag bg--main-red-4">Registered PowerBI or Tableau</div>
                <div class="card__info">
                    <div class="card__info__inner">
                    <div class="card__icon"><img src="{{ frontImages('card--icon05.svg') }}" alt=""/></div>
                    <div class="card__info__main">
                        <div class="card__title">
                        <h3 class="card__title__main text--lg"><a href="#">Client Relationship</a></h3>
                        </div>
                        <div class="card__desc">
                        <p>Getting the last insight of study with Clove as well marketing news</p>
                        </div>
                    </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                </div>
                </div>
            </article>
            </div>
        </div>
        </div>
        <div class="section__footer">
        <p>..and more coming soon</p>
        </div>
    </div>
    </div>
</div>
@endsection
