<?php
/**
 * Footer view
 */
?>
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
        <div class="footer__primary">
            <div class="footer__logo"><a href="index.html" title=""><img src="{{ frontImages('logo--main.svg') }}" alt="Clove"></a></div>
            <div class="footer__social">
                <a href="https://www.instagram.com/clove_research/" title="Clove Resaerch Linkedin"><i class="fab fa-instagram"><img src="{{ frontImages('instagram.svg') }}" alt="Linkedin"></i></a>
                <a href="https://www.linkedin.com/company/clove-research-and-marketing-analytics/" title="Clove Resaerch Instagram"><i class="fab fa-instagram"><img src="{{ frontImages('linkedin.svg') }}" alt="Instagram"></i></a>
            </div>
            <div class="footer__nav">
            <p><a href="#">Privacy Policy</a><span>|</span><a href="#">Terms & Condition</a><span>|</span><a href="{{ route('contact-us') }}">Contact Us</a></p>
            </div>
        </div>
        <div class="footer__secondary">
            <div class="footer__content">
            <div class="footer__address">
                <p> <strong>CLOVE INDONESIA</strong></p>
                <p>Jl. Mampang Prapatan X, RT.6/RW.1, Tegal Parang, Kec. Mampang Prpt., <br />Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12790</p>
            </div>
            <div class="footer__copy">
                <p>&copy; 2021 - CLOVE Research & Marketing Analytics |  All Rights Reserved.</p>
            </div>
            </div>
        </div>
        @if(Request::is('/'))
        <div class="footer__chat"><a href="{{ route('market-research') }}"><img src="{{ frontImages('quiz--bottom.png') }}" alt=""></a></div>
        </div>
        @endif
    </div>
    </footer>
