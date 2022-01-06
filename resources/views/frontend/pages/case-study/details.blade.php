<?php
/**
 * Case Study details
 */
?>
@extends('frontend.layouts.basic')
@section('content')

<div class="blog__detail__cover">
    <div class="card card--info-inside">
    <div class="card__thumb">
        <div class="card__thumb__image"><img src="{{ $caseStudy->heroUrl() }}" alt=""></div>
    </div>
    <div class="card__info">
        <div class="card__info__inner">
        <div class="card__category category"><span class="category__main">{{ $caseStudy->industry->name }}</span></div>
        <div class="card__title">
            <h3 class="card__title__main text--2xl">{{ $caseStudy->title }}</h3>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="blog__detail__main bg--content text--black">
    <div class="container container--lg">
    <div class="grid tap-of-research">
        <div class="column--20">

        </div>
        <div class="column--80">
            <ul>
                @foreach($caseStudy->researches as $res)
                <li>
                    <a href="{{ route('case-study', ['type_of_research' => $res->id ]) }}">
                        {{ $res->name }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="grid">
        <div class="column--20">
            <h4 class="sub--title_section">Objective</h4>
        </div>
        <div class="column--80 list-study">
            <p>{!! $caseStudy->objective !!}</p>
        </div>
    </div>
    <div class="grid">
        <div class="column--20">
            <h4 class="sub--title_section">Approach</h4>
        </div>
        <div class="column--80 list-study">
            <p>{!! $caseStudy->approach !!}</p>
        </div>
    </div>
    <div class="grid">
        <div class="column--20">
            <h4 class="sub--title_section">Result</h4>
        </div>
        <div class="column--80 list-study">
            <p>{!! $caseStudy->result !!}</p>
        </div>
    </div>
    <div class="grid">
        <div class="column--20">
            <h4 class="sub--title_section">Recommendation</h4>
        </div>
        <div class="column--80 list-study">
            <p>{!! $caseStudy->recommendation !!}</p>
        </div>
    </div>
    @if (isset($caseStudy->tools))
    <div class="grid">
        <div class="column--20">
            <h4 class="sub--title_section">Our Tools</h4>
        </div>
        <div class="column--80 list-study">
            <p>{{ $caseStudy->tools }}</p>
        </div>
    </div>
    @endif
    @include('frontend.includes.share-buttons')
    </div>
</div>

@include('frontend.includes.contact')

<div class="section section--space-md bg--main-red-5 p-case-study-detail__others">
    <div class="section__inner">
    <div class="container">
        <div class="section__main">
        <div class="section__header">
            <div class="section__header__main">
            <h2 class="text--xl">You might interest with this too</h2>
            </div>
        </div>
        <div class="section__body">
            <div class="grid gap--md">
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('card--thumbnail.png') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Retail Census</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="#">3 steps to streamline assortment and merchandising solutions</a></h3>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('post--thumbnail--2.jpeg') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Event Evaluation</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="#">Stress Testing an Equity Investment Thesis on the Growth Strategy of a Global C2C Marketplace</a></h3>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco"><span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ frontImages('post--thumbnail--3.jpeg') }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__category category"><span class="category__main">Product Placement Test</span></div>
                        <div class="card__title">
                            <h3 class="card__title__main text--lg"><a href="#">Improving a New Product for Commercial Acceleration</a></h3>
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
        </div>
    </div>
    </div>
</div>

@endsection
