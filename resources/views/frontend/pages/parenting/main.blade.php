<?php
/**
 * Parenting Tips page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="section_parenting-tips">
    <div class="section_parenting-tips-top">
        <div class="container">
            <h2 class="general-title">Parenting Tips</h2>
            <p class="general-desc">Ut enim ad minima veniam, quis nostrum exercitationem corporis suscipit laboriosam, nisi nemo enim ut aliquid ex commodi consequatur?</p>
            <ul class="filter">
                <li>
                    <a href="{{ route('parenting-tips') }}" class="{{ empty(app('request')->input('category')) ? 'active' : '' }}">
                        <span>Semua tips</span>
                        <svg width="120" height="48" viewBox="0 0 120 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M119.84 38.75C119.625 48.4946 115.64 48.657 113.674 47.5202C112.601 47.1087 93.0301 48.4947 91.6896 47.5202C90.3491 46.5457 62.4669 47.5201 56.8368 47.5202L21.1798 47.5202L2.68098 47.5202C-1.6086 47.5202 0.536195 36.8011 0.536196 26.082C0.536196 18.7736 -4.26503e-06 9.51618 0.536198 5.1311C1.07239 0.746034 3.75338 0.746034 6.43436 0.746034C9.11535 0.746034 47.1853 3.18226 63.8074 0.746039C76.7702 -1.15385 104.558 1.23327 111.529 0.746043C118.499 0.258812 120.644 2.2078 119.84 9.51619C119.227 15.0879 120.108 26.5693 119.84 38.75Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                @foreach($categories as $category)
                <li>
                    <a href="{{ route('parenting-tips', ['category' => $category->slug ]) }}" class="{{ $category->color }} {{ app('request')->input('category') == $category->slug ? 'active' : '' }}">
                        <span>{{ $category->name }}</span>
                        <svg width="180" height="48" viewBox="0 0 180 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.240066 9.24997C0.561784 -0.494637 6.54038 -0.657046 9.48946 0.479824C11.0981 0.891253 40.4548 -0.494678 42.4655 0.479824C44.4763 1.45433 86.2996 0.479897 94.7447 0.479824H148.23H175.979C182.413 0.479824 179.196 11.1988 179.196 21.918C179.196 29.2264 180 38.4838 179.196 42.8689C178.391 47.254 174.37 47.254 170.348 47.254C166.327 47.254 109.222 44.8177 84.2889 47.254C64.8447 49.1539 23.1625 46.7667 12.7066 47.254C2.25079 47.7412 -0.966387 45.7922 0.240066 38.4838C1.15983 32.9121 -0.162082 21.4307 0.240066 9.24997Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="section_parenting-tips-content">
        <div class="container">
            <div class="section_parenting-tips-content-wrapper">
                <!-- post items -->
                @include('frontend.vendor.posts')
            </div>
        </div>
    </div>
    <div class="section_parenting-tips-pagination">
        {{ $posts->links( 'frontend.vendor.pagination' ) }}
    </div>
    <div class="section_parenting-tips-ornament">
        <div class="section_parenting-tips-ornament_gunung-left">
            <img src="{{ frontImages('parenting-ornament/gunung_bg.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_gunung-right">
            <img src="{{ frontImages('parenting-ornament/gunung.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_daun-center">
            <img src="{{ frontImages('parenting-ornament/daun.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_field-left">
            <img src="{{ frontImages('parenting-ornament/field-left.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_field-right">
            <img src="{{ frontImages('parenting-ornament/field-right.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_field-right">
            <img src="{{ frontImages('parenting-ornament/field-right.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_daun-right">
            <img src="{{ frontImages('parenting-ornament/daun-small.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_daun-left">
            <img src="{{ frontImages('parenting-ornament/daun-medium.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_bebek">
            <img src="{{ frontImages('parenting-ornament/bebek.svg') }}">
        </div>
    </div>
</div>
@endsection
