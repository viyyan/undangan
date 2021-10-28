<?php
/**
 * Market Research / Quiz questions
 */
?>
@extends('frontend.layouts.basic')
@section('content')


<div class="container">
    <div class="p-quiz__main">
    <div class="quiz sidebar sidebar--no-space" data-step="1">
        <div class="quiz__inner sidebar__inner">
        <div class="quiz__top sidebar__main">
            <div class="quiz__top__inner">
            <div class="quiz__title">
                <h2 class="text--lg"> <span>Clove’s <br />Market Research Check up</span></h2>
            </div>
            <div class="quiz__dir">
                <p class="quiz__dir__title"><span>Question</span>
                <strong class="quiz__dir__step">1</strong>
                </p>
                <div class="quiz__dir__bar">
                <div class="quiz__dir__bar__value" style="width: 0%"></div>
                </div>
            </div>
            </div>
        </div>
        <div class="quiz__main sidebar__content">
            <div class="quiz__main__inner">
            <div class="quiz__main__content"></div>
            <div class="quiz__action">
                <div class="quiz__action__reset">
                <button class="button button--white button--md" type="button" disabled="disabled"><span class="button__content"><span class="button__label">Restart</span><span class="button__icon"><i class="icon__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M1 10.1525C1 15.0389 5.02944 19 10 19C14.9706 19 19 15.0389 19 10.1525C19 5.26622 15 1.30508 10 1.30508C4 1.30508 1 6.22034 1 6.22034M1 6.22034L1 1M1 6.22034H5.6551" stroke="#A81D1D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></i></span></span>
                </button>
                </div>
                <div class="quiz__action__dir">
                <div class="quiz__action__prev">
                    <button class="button button--white button--md" type="button" disabled="disabled"><span class="button__content"><span class="button__icon"><i class="icon__arrow">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <line x1="20" x2="4" y1="12" y2="12"></line>
                            <polyline points="10 18 4 12 10 6"></polyline>
                            </svg></i></span><span class="button__label">Previous</span></span>
                    </button>
                </div>
                <div class="quiz__action__next">
                    <button class="button button--white button--md" type="button" data-label-submit="Submit" data-label-next="Next Question"><span class="button__content"><span class="button__label">Next Question</span><span class="button__icon"><i class="icon__arrow">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <polyline points="14 6 20 12 14 18"></polyline>
                            </svg></i></span></span>
                    </button>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="modal modal__alert modal__alert--danger quiz__alert-error" data-state="close">
        <div class="modal__overlay"></div>
        <div class="modal__main">
        <div class="modal__content">
            <div class="modal__icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M18.328 16.922c1.078-1.359 1.688-3.094 1.688-4.922 0-4.406-3.609-8.016-8.016-8.016-1.828 0-3.563 0.609-4.922 1.688zM12 20.016c1.828 0 3.563-0.609 4.922-1.688l-11.25-11.25c-1.078 1.359-1.688 3.094-1.688 4.922 0 4.406 3.609 8.016 8.016 8.016zM12 2.016c5.531 0 9.984 4.453 9.984 9.984s-4.453 9.984-9.984 9.984-9.984-4.453-9.984-9.984 4.453-9.984 9.984-9.984z"></path>
            </svg>
            </div>
            <div class="modal__title">
            <h2>Error</h2>
            </div>
            <div class="modal__info">
            <p>You must select an answer to continue this quiz.</p>
            </div>
            <div class="modal__actions">
            <div class="modal__action">
                <button class="modal__trigger__close button button--modal button--danger" type="button">Ok</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="p-quiz__deco"><img src="{{ frontImages('quiz--object.png') }}" alt=""></div>
    </div>
</div>


@endsection
