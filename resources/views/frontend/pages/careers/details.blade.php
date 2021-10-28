<?php
/**
 * Career Details
 */
?>
@extends('frontend.layouts.basic')
@section('content')

<div class="page-top">
    <div class="container">
    <div class="page-top__main">
        <div class="page-top__breadcrumb">
        <div class="category">
            <div class="category__main"><a href="{{ route('who-we-are') }}">Who We Are</a><span class="page-top__breadcrumb__sep">/</span><a href="">WANT TO JOIN US?</a><span class="page-top__breadcrumb__sep">/</span><span class="page-top__breadcrumb_current">LISTING DETAILS</span></div>
        </div>
        </div>
        <div class="page-top__info">
        <h1 class="text--3xl">Quantitative Research <br />Manager</h1>
        <p>Full Time Position</p>
        </div>
    </div>
    </div>
</div>
<div class="career__detail__main">
    <div class="grid">
    <div class="column--50">
        <div class="career__detail__content bg--content text--black content__entry">
        <h2>Requirements </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non tincidunt ex. Ut commodo justo eget felis fringilla aliquet. Fusce in accumsan dui. Morbi elementum massa volutpat risus maximus, feugiat sodales dolor semper. Mauris justo quam, iaculis vitae diam a, pretium interdum risus. Donec sagittis odio quis rutrum finibus. Integer eleifend ullamcorper euismod. Phasellus sed gravida mauris. Cras lacinia vitae sapien vel semper. Nam sed tellus neque. Sed nunc eros, commodo sit amet volutpat eu, rhoncus vel urna. Etiam at scelerisque mauris, vel sagittis lectus. In ac eros arcu. Aliquam elementum rhoncus placerat. Donec dignissim, diam quis elementum faucibus, massa odio auctor eros, semper ultrices lacus risus lobortis quam. Integer non lectus placerat, tristique sapien et, consectetur lectus.</p><br><br>
        <h2>Responsibilites</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non tincidunt ex. Ut commodo justo eget felis fringilla aliquet. Fusce in accumsan dui. Morbi elementum massa volutpat risus maximus, feugiat sodales dolor semper. Mauris justo quam, iaculis vitae diam a, pretium interdum risus. Donec sagittis odio quis rutrum finibus. Integer eleifend ullamcorper euismod. Phasellus sed gravida mauris. Cras lacinia vitae sapien vel semper. Nam sed tellus neque. Sed nunc eros, commodo sit amet volutpat eu, rhoncus vel urna. Etiam at scelerisque mauris, vel sagittis lectus. In ac eros arcu. Aliquam elementum rhoncus placerat. Donec dignissim, diam quis elementum faucibus, massa odio auctor eros, semper ultrices lacus risus lobortis quam. Integer non lectus placerat, tristique sapien et, consectetur lectus.</p>
        </div>
    </div>
    <div class="column--50">
        <div class="career__detail__form bg--primary">
        <form class="form" method="post" action="" enctype="multipart/form-data">
            <div class="form__field">
            <div class="form__icon"><img src="{{ frontImages('icon--user--white.svg') }}" alt=""></div>
            <div class="form__main">
                <div class="form__control">
                <input type="text" name="name" placeholder="Name *">
                </div>
            </div>
            </div>
            <div class="form__field">
            <div class="form__icon"><img src="{{ frontImages('icon--email--white.svg') }}" alt=""></div>
            <div class="form__main">
                <div class="form__control">
                <input type="text" name="email" placeholder="E-mail *">
                </div>
            </div>
            </div>
            <div class="form__field form__upload">
            <div class="form__icon"><img src="{{ frontImages('icon--notes--white.svg') }}" alt=""></div>
            <div class="form__main">
                <div class="form__label">Already have the brief?</div>
                <div class="form__upload__main">
                <div class="form__upload__info">(PDF, PPT or Word)</div>
                <div class="form__upload__control">
                    <input type="file" name="doc" accept="application/pdf,application/vnd.ms-powerpoint,application/msword">
                    <div class="form__upload__button">
                    <button class="button button--dark button--sm" type="button"><span class="button__content"><span class="button__icon"><i class="icon__arrow">
                            <svg stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="16 12 12 8 8 12"></polyline>
                                <line x1="12" x2="12" y1="16" y2="8"></line>
                            </svg></i></span><span class="button__label">Upload here</span></span>
                    </button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="form__field form__field__message">
            <div class="form__main">
                <div class="form__control">
                <textarea name="message" placeholder="What do you wanna say?"></textarea>
                </div>
            </div>
            </div>
            <div class="form__submit">
            <button class="button button--white button--md" type="button"><span class="button__content"><span class="button__label">Submit</span><span class="button__icon"><i class="icon__arrow">
                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <line x1="4" x2="20" y1="12" y2="12"></line>
                        <polyline points="14 6 20 12 14 18"></polyline>
                    </svg></i></span></span>
            </button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>

@endsection
