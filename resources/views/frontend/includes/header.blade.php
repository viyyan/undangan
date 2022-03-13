<?php
/**
 * Header view
 */
?>
<header class="header">
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
