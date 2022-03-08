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
                    <a href="" class="active">
                        <span>Semua tips</span>
                        <svg width="120" height="48" viewBox="0 0 120 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M119.84 38.75C119.625 48.4946 115.64 48.657 113.674 47.5202C112.601 47.1087 93.0301 48.4947 91.6896 47.5202C90.3491 46.5457 62.4669 47.5201 56.8368 47.5202L21.1798 47.5202L2.68098 47.5202C-1.6086 47.5202 0.536195 36.8011 0.536196 26.082C0.536196 18.7736 -4.26503e-06 9.51618 0.536198 5.1311C1.07239 0.746034 3.75338 0.746034 6.43436 0.746034C9.11535 0.746034 47.1853 3.18226 63.8074 0.746039C76.7702 -1.15385 104.558 1.23327 111.529 0.746043C118.499 0.258812 120.644 2.2078 119.84 9.51619C119.227 15.0879 120.108 26.5693 119.84 38.75Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Demam & Penyakit</span>
                        <svg width="180" height="48" viewBox="0 0 180 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.240066 9.24997C0.561784 -0.494637 6.54038 -0.657046 9.48946 0.479824C11.0981 0.891253 40.4548 -0.494678 42.4655 0.479824C44.4763 1.45433 86.2996 0.479897 94.7447 0.479824H148.23H175.979C182.413 0.479824 179.196 11.1988 179.196 21.918C179.196 29.2264 180 38.4838 179.196 42.8689C178.391 47.254 174.37 47.254 170.348 47.254C166.327 47.254 109.222 44.8177 84.2889 47.254C64.8447 49.1539 23.1625 46.7667 12.7066 47.254C2.25079 47.7412 -0.966387 45.7922 0.240066 38.4838C1.15983 32.9121 -0.162082 21.4307 0.240066 9.24997Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="orange">Tumbuh Kembang</span>
                        <svg width="180" height="48" viewBox="0 0 180 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.240066 9.24997C0.561784 -0.494637 6.54038 -0.657046 9.48946 0.479824C11.0981 0.891253 40.4548 -0.494678 42.4655 0.479824C44.4763 1.45433 86.2996 0.479897 94.7447 0.479824H148.23H175.979C182.413 0.479824 179.196 11.1988 179.196 21.918C179.196 29.2264 180 38.4838 179.196 42.8689C178.391 47.254 174.37 47.254 170.348 47.254C166.327 47.254 109.222 44.8177 84.2889 47.254C64.8447 49.1539 23.1625 46.7667 12.7066 47.254C2.25079 47.7412 -0.966387 45.7922 0.240066 38.4838C1.15983 32.9121 -0.162082 21.4307 0.240066 9.24997Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="green"> Tips Bunda Nippe</span>
                        <svg width="180" height="48" viewBox="0 0 180 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.240066 9.24997C0.561784 -0.494637 6.54038 -0.657046 9.48946 0.479824C11.0981 0.891253 40.4548 -0.494678 42.4655 0.479824C44.4763 1.45433 86.2996 0.479897 94.7447 0.479824H148.23H175.979C182.413 0.479824 179.196 11.1988 179.196 21.918C179.196 29.2264 180 38.4838 179.196 42.8689C178.391 47.254 174.37 47.254 170.348 47.254C166.327 47.254 109.222 44.8177 84.2889 47.254C64.8447 49.1539 23.1625 46.7667 12.7066 47.254C2.25079 47.7412 -0.966387 45.7922 0.240066 38.4838C1.15983 32.9121 -0.162082 21.4307 0.240066 9.24997Z" fill="white"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="section_parenting-tips-content">
        <div class="container">
            <div class="section_parenting-tips-content-wrapper">
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="{{ route('parenting-tips.details', 'dummy-slug') }}">
                            <img src="{{ frontImages('home-dummy01.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag default">
                            <span class="tag">Demam & Penyakit</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="{{ route('parenting-tips.details', 'dummy-slug') }}">
                            <img src="{{ frontImages('home-dummy02.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag tumbuh-kembang">
                            <span class="tag">Tumbuh Kembang</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy03.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag tips-bunda">
                            <span class="tag">Tips Bunda Nippe</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy01.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag default">
                            <span class="tag">Demam & Penyakit</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy02.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag tumbuh-kembang">
                            <span class="tag">Tumbuh Kembang</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy03.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag tips-bunda">
                            <span class="tag">Tips Bunda Nippe</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy01.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag default">
                            <span class="tag">Demam & Penyakit</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy02.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag tumbuh-kembang">
                            <span class="tag">Tumbuh Kembang</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy03.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag tips-bunda">
                            <span class="tag">Tips Bunda Nippe</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy01.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag default">
                            <span class="tag">Demam & Penyakit</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                <div class="article-blocks">
                    <div class="article-blocks_images">
                        <a href="">
                            <img src="{{ frontImages('home-dummy02.png') }}">
                        </a>
                    </div>
                    <div class="article-blocks_desc">
                        <div class="article-blocks_tag tumbuh-kembang">
                            <span class="tag">Tumbuh Kembang</span>
                            <a class="link-button">Read more</a>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="section_parenting-tips-pagination">
        <ul class="pagination">
            <li>
                <a href="#" class="prev">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_94_10823)">
                        <path d="M22.4819 5.57061e-05C14.4308 -0.149944 5.97022 3.71256 2.18344 11.5126C-0.750467 17.5126 -0.716352 25.1626 2.28578 31.1626C5.39026 37.3876 10.951 41.1376 16.1706 44.9626C18.6269 46.7626 21.3561 47.7376 24.1877 47.9251C34.8999 48.7501 46.5331 39.0376 47.9318 26.8876C48.5459 21.3751 46.5672 15.8251 43.4628 11.4751C38.4478 4.50006 30.5331 0.150056 22.4819 5.57061e-05Z" fill="#00A7E0"/>
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
                        <clipPath id="clip0_94_10823">
                        <rect width="48" height="48" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>                        
                </a>
            </li>
            <li>
                <a href="#">
                    1
                </a>
            </li>
            <li>
                <a href="#">
                    2
                </a>
            </li>
            <li>
                <a href="#">
                    3
                </a>
            </li>
            <li>
                <a href="#">
                    4
                </a>
            </li>
            <li>
                <a href="#">
                    ...
                </a>
            </li>
            <li>
                <a href="#">
                    10
                </a>
            </li>
            <li>
                <a href="#" class="next">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_94_10812)">
                        <path d="M22.4819 5.57061e-05C14.4308 -0.149944 5.97022 3.71256 2.18344 11.5126C-0.750467 17.5126 -0.716352 25.1626 2.28578 31.1626C5.39026 37.3876 10.951 41.1376 16.1706 44.9626C18.6269 46.7626 21.3561 47.7376 24.1877 47.9251C34.8999 48.7501 46.5331 39.0376 47.9318 26.8876C48.5459 21.3751 46.5672 15.8251 43.4628 11.4751C38.4478 4.50006 30.5331 0.150056 22.4819 5.57061e-05Z" fill="#00A7E0"/>
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
                        <path d="M21.7071 16.2929C21.3166 15.9024 20.6834 15.9024 20.2929 16.2929C19.9024 16.6834 19.9024 17.3166 20.2929 17.7071L21.7071 16.2929ZM28 24L28.7071 24.7071C29.0976 24.3166 29.0976 23.6834 28.7071 23.2929L28 24ZM20.2929 30.2929C19.9024 30.6834 19.9024 31.3166 20.2929 31.7071C20.6834 32.0976 21.3166 32.0976 21.7071 31.7071L20.2929 30.2929ZM20.2929 17.7071L27.2929 24.7071L28.7071 23.2929L21.7071 16.2929L20.2929 17.7071ZM27.2929 23.2929L20.2929 30.2929L21.7071 31.7071L28.7071 24.7071L27.2929 23.2929Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_94_10812">
                        <rect width="48" height="48" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg> 
                </a>
            </li>
        </ul>
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
