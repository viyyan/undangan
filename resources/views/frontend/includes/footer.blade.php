<?php
/**
 * Footer view
 */
?>
<footer class="footer">
    <div class="container">
        <div class="footer--logo">
            <a href="">
                <img src="{{ frontImages('footer-logo.svg') }}">
            </a>
        </div>
        <div class="footer--center">
            <div class="footer--address">
                <p>
                    PT Transfarma Medica Indah Suite 802, 8th Fl., Wisma Pondok Indah 2<br> Jl.
                    Sultan Iskandar Muda Blok V - TA Pondok Indah Jakarta 12310, Indonesia<br>
                    Ph. +62-21-769-7323 | Fax. +62-21-769-7150
                </p>
            </div>
            <div class="footer--social">
                <ul>
                    <li class="fb">
                        <a href="#" target="_blank">Facebook</a>
                    </li>
                    <li class="ig">
                        <a href="#" target="_blank">Instagram</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer--bottom">
            <div class="footer--copyright">
                <span>Copyright &copy; 2022 Nipe Fever All rights reserved</span>
            </div>
            <div class="footer--nav">
                <ul>
                    <li>
                        <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 </footer>
