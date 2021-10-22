<?php
/**
 * About Board view
 */
?>
@extends('frontend.pages.about.main')
@section('content-about')
<div class="main-container">
    <section class="flex-container">
        @include('frontend.pages.about.sidebar')
        <section class="main--content small">
            <section class="about">
            <div class="about-wrapper">
                <h3 class="title--main">Board of Commisioner</h3>
                <ul class="list-person">
                <li>
                    <h5 class="title--sub">Takeshi Ishiguro</h5><span class="text--medium light-blue">President Commissioner</span>
                    <p class="text--medium">He joined Taisho Co., Ltd. since 2006. He is in position of General Manager in Finance Division in Taisho Japan. Prior to joining Taisho, he worked for SRL Inc., a clinical testing company.</p>
                    <p class="text--medium"> Citizenship: Japanese</p>
                    <p class="text--medium"> Education: Master of Business Administration - Keio University Graduate School of Business Administration</p>
                </li>
                <li>
                    <h5 class="title--sub">Osamu Murakami</h5><span class="text--medium light-blue">Commissioner</span>
                    <p class="text--medium"> He joined Taisho Co., Ltd. since 1997. He is in position of General Manager in International Business Management Division in Taisho Japan. He has a CPA (Certified Public Accountant) license in Japan.</p>
                    <p class="text--medium">Citizenship: Japanese</p>
                    <p class="text--medium"> Education: Waseda University- Faculty of Economics, graduated in 1997</p>
                </li>
                <li>
                    <h5 class="title--sub">Adji Baroto</h5><span class="text--medium light-blue">Independent Commissioner</span>
                    <p class="text--medium">He joined PT Taisho Pharmaceutical Indonesia Tbk in 2019. He is experienced in pharmaceutical products marketing, in national and multinational companies. Currently, he is also a lecturer and consultant in marketing and management.</p>
                    <p class="text--medium">Citizenship: Indonesian</p>
                    <p class="text--medium">Education: Medical Faculty – Indonesia University</p>
                </li>
                </ul>
            </div>
            <div class="about-wrapper about-board-director">
                <h3 class="title--main">Board of Directors</h3>
                <ul class="list-person">
                <li>
                    <h5 class="title--sub">Jun Kuroda</h5><span class="text--medium light-blue">President Director</span>
                    <p class="text--medium">He has more than 25 years of marketing experiences with Taisho Co., Ltd. He has been working for Taisho’s subsidiaries in USA and Europe.  He is currently in the position of Executive Officer, International Business Headquarter.</p>
                    <p class="text--medium">Citizenship: Japanese</p>
                    <p class="text--medium">Education: Management School - Golden Gate University, USA, graduated in 1983</p>
                </li>
                <li>
                    <h5 class="title--sub">Toshiyuki Ishii</h5><span class="text--medium light-blue">Director</span>
                    <p class="text--medium">He joined Taisho Co., Ltd. in April 2020 as a Senior Manager in International Business Headquarters. Prior to joining Taisho, he has worked for Astellas Pharma Inc., Business Development.</p>
                    <p class="text--medium">Citizenship: Japanese</p>
                    <p class="text--medium">Education: Hitotsubashi University, graduated in 1989.</p>
                </li>
                <li>
                    <h5 class="title--sub">Budhy Herwindo</h5><span class="text--medium light-blue">Director</span>
                    <p class="text--medium">He joined PT Taisho Pharmaceutical Indonesia Tbk in 2017.  Before joining Taisho, he held a position of Plant Head at PT. Ethica Industri Farmasi Joint Venture with Fresenius Kabi, Jakarta.</p>
                    <p class="text--medium">Citizenship: Indonesia</p>
                    <p class="text--medium">Education: Master of Management-Prasetiya Mulya Business School, graduated in 2012</p>
                </li>
                <li>
                    <h5 class="title--sub">Sonny Adi Nugroho</h5><span class="text--medium light-blue">Director</span>
                    <p class="text--mediumHe">joined PT Taisho Pharmaceutical Indonesia Tbk in February 2018.  Before joining with Taisho, he held a Director of PT Pfizer Indonesia. </p>
                    <p class="text--medium">Citizenship: Indonesia</p>
                    <p class="text--medium">Education: University of Applied Sciences Konstanz (Germany) - Swiss German University Jakarta Indonesia – MBA &amp; MM Double Degree Programme, graduated in 2010.  Bachelor degree at Bogor Agricultural Institute Indonesia, graduated in 1998</p>
                </li>
                </ul>
            </div>
            </section>
        </section>
    </section>
</div>
@endsection
