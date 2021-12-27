<?php
/**
 * Our Details
 */
?>
@extends('frontend.layouts.basic')
@section('content')


<div class="blog__detail__cover">
    <div class="card card--info-inside">
    <div class="card__thumb">
        <div class="card__thumb__image"><img src="{{ $post->heroUrl() }}" alt=""></div>
    </div>
    <div class="card__info">
        <div class="card__info__inner">
        <div class="card__title">
            <h3 class="card__title__main text--2xl">{{ $post->title }}</h3>
        </div>
        <div class="card__desc">
            <p>{{ $post->created_at->format('d F Y') }}</p>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="blog__detail__main bg--content text--black">
    <div class="container container--md">
    <p>{!! $post->body !!}</p>
    @include('frontend.includes.share-buttons')
    </div>
</div>
<div class="section section--space-md bg--main-red-5 p-our-thinking-detail__others">
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
            @foreach ($recommends as $rec)
            <div class="column--33">
                <article class="card card--info-inside">
                <div class="card__inner">
                    <div class="card__thumb">
                    <div class="card__thumb__image"><img src="{{ $rec->heroUrl() }}" alt=""/></div>
                    </div>
                    <div class="card__info">
                    <div class="card__info__inner">
                        <div class="card__info__main">
                        <div class="card__title">
                            <h3 class="card__title__main text--lg">
                                <a href="{{ route('our-thinking.details', $rec->slug) }}">
                                    {{ $rec->title }}
                                </a>
                            </h3>
                        </div>
                        <div class="card__date">
                            <span class="text--md">{{ $rec->created_at->format('d F Y') }}</span>
                        </div>
                        </div>
                    </div>
                    <div class="card__deco">
                        <span class="card__deco__icon"></span></div>
                    </div>
                </div>
                </article>
            </div>
            @endforeach
            </div>
        </div>
        </div>
    </div>
    </div>
</div>


@endsection

