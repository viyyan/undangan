<?php
/**
 * Header view
 */
?>
<header class="header header--fixed">
    <div class="header__sticky">
        <div class="header__container container container--full">
        <div class="header__inner">
            <div class="header__main">
            <span><a href="{{ url('/') }}"><img src="{{ frontImages('logo--main.svg') }}" alt="Clove"></a></span>
            </div>
            <nav class="header__nav desktop_nav">
                <div class="header__nav__main nav nav--horizontal">
                    <ul>
                    <li class="header__nav__home {{ isCurrent('home') }}"><a href="{{ route('home') }}"><span>Home</span></a></li>
                    <li class="header__nav__about {{ isCurrent('our-pillars') }}"><a href="{{ route('who-we-are') }}"><span>Who We Are</span></a>
                        <div class="header__nav__subs">
                        <ul>
                            <li><a href="{{ route('our-pillars') }}">Our 4 Pillars</a></li>
                            <li><a href="{{ route('our-people') }}">Our People</a></li>
                            <li><a href="{{ route('careers') }}">Want to join us?</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="header__nav__service"><a href="{{ route('what-we-do') }}"><span>What We Do</span></a>
                        <div class="header__nav__subs">
                        <ul>
                            <li><a href="{{ route('case-study') }}">Case Studies</a></li>
                            <li><a href="{{ route('our-tools') }}">Our Tools</a></li>
                        </ul>
                        </div>
                    </li>
                    <li class="header__nav__blog"><a href="{{ route('our-thinking') }}"><span>Our Thinking</span></a></li>
                    <li class="header__nav__quiz"> <a href="{{ route('market-research') }}"><span>Market research <br />check-up</span></a></li>
                    <li class="header__nav__contact"><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
                    </ul>
                </div>
            </nav>
            <button class="mobile-button">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        </div>
    </div>
    </header>

    <nav class="header__nav mobile_nav">
        <div class="header__nav__main nav nav--horizontal">
            <ul>
            <li class="header__nav__home {{ isCurrent('home') }}"><a href="{{ route('home') }}"><span>Home</span></a></li>
            <li class="header__nav__about {{ isCurrent('our-pillars') }}"><a href="{{ route('who-we-are') }}"><span>Who We Are</span></a>
                <div class="header__nav__subs">
                <ul>
                    <li><a href="{{ route('our-pillars') }}">Our 4 Pillars</a></li>
                    <li><a href="{{ route('our-people') }}">Our People</a></li>
                    <li><a href="{{ route('careers') }}">Want to join us?</a></li>
                </ul>
                </div>
            </li>
            <li class="header__nav__service"><a href="{{ route('what-we-do') }}"><span>What We Do</span></a>
                <div class="header__nav__subs">
                <ul>
                    <li><a href="{{ route('case-study') }}">Case Studies</a></li>
                    <li><a href="{{ route('our-tools') }}">Our Tools</a></li>
                </ul>
                </div>
            </li>
            <li class="header__nav__blog"><a href="{{ route('our-thinking') }}"><span>Our Thinking</span></a></li>
            <li class="header__nav__quiz"> <a href="{{ route('market-research') }}"><span>Market research <br />check-up</span></a></li>
            <li class="header__nav__contact"><a href="{{ route('contact-us') }}"><span>Contact Us</span></a></li>
            </ul>
        </div>
    </nav>

    <div class="overlay-container"></div>
