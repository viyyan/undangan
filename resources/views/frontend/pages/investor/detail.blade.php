<?php
/*
* Details investor Detail view
*/
?>
@extends('frontend.layouts.basic')
@section('content')
@if (isset($investor))
<div class="article-detail_head">
    <div class="article-detail_head-images"><img src="{{ frontImages('investor.png') }}"></div>
    <div class="article-detail_head-title">
    <div class="article-detail_head-wrapper">
        <h2 class="title--big_title white-color">{{ $investor->title }}</h2><span class="date">{{ $investor->created_at->format('d F Y') }}</span>
    </div>
    </div>
</div>
<div class="main-container">
    <div class="article-detail_content">
        {!! $investor->content !!}
    </div>
</div>
@endif
@endsection
