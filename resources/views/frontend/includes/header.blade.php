<?php
/**
 * Header view
 */
?>
<header class="header">
    <nav>
        <ul>
            <li>
                <a href="">
                    <span>PRODUCTS</span>
                </a>
            </li>
            <li>
                <a href="{{ route(‘parenting-tips’) }}">
                    <span>PARENTING TIPS</span>
                </a>
            </li>
            <li class="header--logo">
                <a href="">
                    <img src="{{ frontImages('logo-rounded.svg') }}" />
                </a>
            </li>
            <li>
                <a href="">
                    <span>WHERE TO BUY</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span>CONTACT US</span>
                </a>
            </li>
        </ul>
    </nav>
</header>
