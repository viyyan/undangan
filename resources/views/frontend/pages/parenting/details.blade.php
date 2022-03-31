<?php
/**
 * Parenting Tips Details page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<div class="section_parenting-tips">
    <div class="container">
        <div class="section_parenting-tips_detail">
            <div class="section_parenting-tips_detail_banner">
                <img src="{{ $post->heroUrl('870x430') }}">
                <!--============-->
                <!--please changes the class color based on the filter default is orange other green and blue-->
                <!--============-->
                <div class="section_parenting-tips_detail_tag">
                    <a href="{{ route('parenting-tips') }}">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_167_7531)">
                            <path class="bg" d="M22.4819 5.57061e-05C14.4308 -0.149944 5.97022 3.71256 2.18344 11.5126C-0.750467 17.5126 -0.716352 25.1626 2.28578 31.1626C5.39026 37.3876 10.951 41.1376 16.1706 44.9626C18.6269 46.7626 21.3561 47.7376 24.1877 47.9251C34.8999 48.7501 46.5331 39.0376 47.9318 26.8876C48.5459 21.3751 46.5672 15.8251 43.4628 11.4751C38.4478 4.50006 30.5331 0.150056 22.4819 5.57061e-05Z" fill="#EA9F1B"/>
                            <g opacity="0.38">
                            <g opacity="0.48">
                            <g opacity="0.48">
                            <path opacity="0.48" d="M8.18783 17.7001C11.7699 14.5126 16.1708 10.7626 21.1175 11.5501C23.6761 11.9626 24.7678 7.65011 22.2092 7.23761C15.5567 6.18761 10.2689 10.1626 5.32216 14.5501C3.30937 16.3501 6.17504 19.5001 8.18783 17.7001Z" fill="white"/>
                            </g>
                            </g>
                            <g opacity="0.48">
                            <g opacity="0.48">
                            <path opacity="0.48" d="M25.3479 12.2251C25.5867 12.3376 25.7914 12.4876 26.0302 12.6001C26.269 12.7501 26.5078 12.8626 26.7807 12.8626C27.0537 12.9376 27.3266 12.9001 27.5995 12.8251C27.8724 12.7501 28.0771 12.6376 28.2818 12.4126C28.4865 12.2626 28.6912 12.0376 28.7935 11.7751C29.0323 11.2501 29.1688 10.6126 28.9982 10.0501C28.8277 9.52511 28.5206 8.96261 28.0771 8.70011C27.8383 8.58761 27.6336 8.43761 27.3948 8.32511C27.156 8.17511 26.9172 8.06261 26.6443 8.06261C26.3714 7.98761 26.0984 8.02511 25.8255 8.10011C25.5526 8.17511 25.3479 8.28761 25.1432 8.51261C24.9385 8.66261 24.7338 8.88761 24.6315 9.15011C24.3927 9.67511 24.2562 10.3126 24.4268 10.8751C24.5633 11.4376 24.8703 11.9626 25.3479 12.2251Z" fill="white"/>
                            </g>
                            </g>
                            </g>
                            <path d="M26.2929 31.7071C26.6834 32.0976 27.3166 32.0976 27.7071 31.7071C28.0976 31.3166 28.0976 30.6834 27.7071 30.2929L26.2929 31.7071ZM20 24L19.2929 23.2929C18.9024 23.6834 18.9024 24.3166 19.2929 24.7071L20 24ZM27.7071 17.7071C28.0976 17.3166 28.0976 16.6834 27.7071 16.2929C27.3166 15.9024 26.6834 15.9024 26.2929 16.2929L27.7071 17.7071ZM27.7071 30.2929L20.7071 23.2929L19.2929 24.7071L26.2929 31.7071L27.7071 30.2929ZM20.7071 24.7071L27.7071 17.7071L26.2929 16.2929L19.2929 23.2929L20.7071 24.7071Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_167_7531">
                            <rect width="48" height="48" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <div class="tag">
                        <span class="{{ $post->category->color }}" >{{ $post->category->name }}</span>
                        <svg width="180" height="48" viewBox="0 0 180 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.240066 9.24997C0.561784 -0.494637 6.54038 -0.657046 9.48946 0.479824C11.0981 0.891253 40.4548 -0.494678 42.4655 0.479824C44.4763 1.45433 86.2996 0.479897 94.7447 0.479824H148.23H175.979C182.413 0.479824 179.196 11.1988 179.196 21.918C179.196 29.2264 180 38.4838 179.196 42.8689C178.391 47.254 174.37 47.254 170.348 47.254C166.327 47.254 109.222 44.8177 84.2889 47.254C64.8447 49.1539 23.1625 46.7667 12.7066 47.254C2.25079 47.7412 -0.966387 45.7922 0.240066 38.4838C1.15983 32.9121 -0.162082 21.4307 0.240066 9.24997Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="section_parenting-tips_detail_content">
                <h2>
                    {{ $post->title }}
                </h2>
                <div class="excerpt">
                    {!! $post->excerpt !!}
                </div>
                <div class="content">
                    {!! $post->body !!}
                </div>
            </div>
            <div class="section_parenting-tips_detail_social">
                <ul>
                    <li class="fb">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('parenting-tips.details', $post->slug) }}" target="_blank">Facebook</a>
                    </li>
                    <li class="tw">
                        <a href="#" target="_blank">Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="section_parenting-tips_detail_related">
                <h2>Artikel terkait</h2>
                <div class="section_parenting-tips_detail_related-wrapper">
                    <!-- post items -->
                    @include('frontend.vendor.posts')
                </div>
            </div>
        </div>
    </div>
    <div class="section_parenting-tips-ornament">
        <div class="section_parenting-tips-ornament_gunung-left">
            <img src="{{ frontImages('parenting-ornament/gunung_bg.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_gunung-right">
            <img src="{{ frontImages('parenting-ornament/gunung.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_daun-center happy">
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
        <div class="section_parenting-tips-ornament_daun-left happy">
            <img src="{{ frontImages('parenting-ornament/daun-medium.svg') }}">
        </div>
        <div class="section_parenting-tips-ornament_bebek happy">
            <img src="{{ frontImages('parenting-ornament/happy-duck.svg') }}">
        </div>
    </div>
</div>
@endsection
