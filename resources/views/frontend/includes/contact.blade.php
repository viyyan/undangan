<?php
/**
 * contact form
*/
?>

<div class="chat">
    <div class="chat__inner">
    <div class="grid">
        <div class="column--50">
        <div class="chat__info">
            <div class="chat__info__inner">
            <div class="chat__info__thumb"><img src="{{ frontImages('chat--thumbnail.png') }}" alt=""></div>
            <div class="chat__info__main">
                <h2 class="text--3xl">So, let’s have a chat!</h2>
                <p>Your concern is the most<br>important for us.</p>
            </div>
            </div>
        </div>
        </div>
        <div class="column--50">
        <div class="chat__form">
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
</div>
