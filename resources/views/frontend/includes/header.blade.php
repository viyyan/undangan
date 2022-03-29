<?php
/**
 * Header view
 */
?>
<header class="header desktop-view">
    <nav>
        <ul>
            <li>
                <a href="{{ route('product') }}">
                    <span>PRODUCTS</span>
                </a>
            </li>
            <li>
                <a href="{{ route('parenting-tips') }}">
                    <span>PARENTING TIPS</span>
                </a>
            </li>
            <li class="header--logo">
                <a href="{{ route('home') }}">
                    <img src="{{ frontImages('logo-rounded.svg') }}" />
                </a>
            </li>
            <li>
                <a href="{{ route('where-to-buy') }}">
                    <span>WHERE TO BUY</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact-us') }}">
                    <span>CONTACT US</span>
                </a>
            </li>
        </ul>
    </nav>
</header>

<header class="header mobile-view">
    <div class="logo-mobile">
        <a href="{{ route('home') }}">
            <img src="{{ frontImages('logo-rounded.svg') }}" />
        </a>
    </div>
    <nav class="mobile pushy pushy-right">
        <div class="pushy-content">
            <ul>
                <li class="pushy-link">
                    <a href="{{ route('product') }}">
                        <span>PRODUCTS</span>
                    </a>
                </li>
                <li class="pushy-link">
                    <a href="{{ route('parenting-tips') }}">
                        <span>PARENTING TIPS</span>
                    </a>
                </li>
                <li class="pushy-link">
                    <a href="{{ route('where-to-buy') }}">
                        <span>WHERE TO BUY</span>
                    </a>
                </li>
                <li class="pushy-link">
                    <a href="{{ route('contact-us') }}">
                        <span>CONTACT US</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Menu Button -->
    <div class="menu-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>

<!-- Site Overlay -->
<div class="site-overlay"></div>


