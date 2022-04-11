<?php
/**
 * Header view
 */
?>
<header class="header">
    <div class="container">
        <div class="header--wraper">
            <div class="logo">
                <a href="#">
                    <img src="{{ frontImages('logo.svg') }}">
                </a>
            </div>
            <nav class="navigation">
                <input id="menu-toggle" type="checkbox" />
                <label class='menu-button-container' for="menu-toggle">
                    <div class='menu-button'></div>
                </label>
                <ul class="menu">
                    <li class="active">
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#product">Product</a>
                    </li>
                    <li>
                        <a href="#location">Locations</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>



