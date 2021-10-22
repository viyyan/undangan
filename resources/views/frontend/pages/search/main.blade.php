<?php
/**
 * Search page
 */
?>
@extends('frontend.layouts.basic')
@section('content')
<section class="search--result_head">
    <div class="main-container">
    <h2 class="title--big_title main-blue">Search Result</h2>
    <form class="another-search" method="GET" action="{{ route('search') }}">
        <label>Search for another keyword :</label>
        <input class="main-input" type="text" placeholder="search" name="q" value="{{ app('request')->input('q') }}">
        <input class="search-submit" type="submit" value="search">
    </form>
    </div>
</section>
<section class="search--result_content">
    <div class="main-container">
    <div class="title--section">
        <div class="title--section_main">
        <h2 class="text--large bold light-blue"> Search Results for “tablet” on : Display 1-10 out of 21</h2>
        </div>
        <div class="title--section_option">
        <div class="title--section_option-wraper">
            <ul class="select">
            <li>
                <input class="select_close" id="filter-select" type="radio" name="sort" value=""><span class="select_label select_label-placeholder">Sort by : Alphabetical (A-Z)</span>
            </li>
            <li class="select_items">
                <input class="select_expand" id="sort-opener" type="radio" name="sort">
                <label class="select_closeLabel" for="sort-select"></label>
                <ul class="select_options">
                <li class="select_option"></li>
                <input class="select_input" id="cat1" type="radio" name="sort">
                <label class="select_label" for="cat1">Alphabetical (Z-A)</label>
                <li class="select_option"></li>
                <input class="select_input" id="cat2" type="radio" name="sort">
                <label class="select_label last-option" for="cat2">Price</label>
                </ul>
                <label class="select_expandLabel" for="sort-opener"></label>
            </li>
            </ul>
        </div>
        </div>
    </div>
    <div class="search--result_list">
        <ul>
        <li class="result-normal">
            <div class="content-result">
            <h3 class="text--large"> <span class="search--result_category">Vision</span><span class="search--result_title">Taisho Pharmaceutical Indonesia</span></h3>
            <p>Our release of this Tablet, an antibiotic easily meeting these international standards,</p><a href="#">https://www.taisho.co.id/who_we_are/visionmission.html</a>
            </div>
        </li>
        <li class="result-with-images">
            <div class="images_result"> <img src="{{ frontImage('dummy/annual-report/annual1.png') }}"></div>
            <div class="content-result">
            <h3 class="text--large"> <span class="search--result_title">2020 Annual Report</span></h3>
            <p>Our release of this Tablet, an antibiotic easily meeting these international standards,</p><a href="#">https://www.taisho.co.id/investor/2020-annual-report.pdf</a>
            </div>
        </li>
        <li class="result-with-images">
            <div class="images_result"> <img src="{{ frontImage('dummy/annual-report/placeholder.png') }}"></div>
            <div class="content-result">
            <h3 class="text--large"> <span class="search--result_title">2020 Annual Report</span></h3>
            <p>Our release of this Tablet, an antibiotic easily meeting these international standards,</p><a href="#">https://www.taisho.co.id/investor/2020-annual-report.pdf</a>
            </div>
        </li>
        <li class="result-normal">
            <div class="content-result">
            <h3 class="text--large"> <span class="search--result_category">Vision</span><span class="search--result_title">Taisho Pharmaceutical Indonesia</span></h3>
            <p>Our release of this Tablet, an antibiotic easily meeting these international standards,</p><a href="#">https://www.taisho.co.id/who_we_are/visionmission.html</a>
            </div>
        </li>
        <li class="result-normal">
            <div class="content-result">
            <h3 class="text--large"> <span class="search--result_category">Vision</span><span class="search--result_title">Taisho Pharmaceutical Indonesia</span></h3>
            <p>Our release of this Tablet, an antibiotic easily meeting these international standards,</p><a href="#">https://www.taisho.co.id/who_we_are/visionmission.html</a>
            </div>
        </li>
        <li class="result-normal">
            <div class="content-result">
            <h3 class="text--large"> <span class="search--result_category">Vision</span><span class="search--result_title">Taisho Pharmaceutical Indonesia</span></h3>
            <p>Our release of this Tablet, an antibiotic easily meeting these international standards,</p><a href="#">https://www.taisho.co.id/who_we_are/visionmission.html</a>
            </div>
        </li>
        <li class="result-with-images">
            <div class="images_result"> <img src="{{ frontImage('dummy/annual-report/placeholder.png') }}"></div>
            <div class="content-result">
            <h3 class="text--large"> <span class="search--result_title">2020 Annual Report</span></h3>
            <p>Our release of this Tablet, an antibiotic easily meeting these international standards,</p><a href="#">https://www.taisho.co.id/who_we_are/visionmission.html</a>
            </div>
        </li>
        </ul>
    </div>
    <div class="search--result_pagination">
        <ul class="pagination">
        <li><a class="prev" href="#"><i class="default-arrow prev-ico"></i></a></li>
        <li><a class="active" href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">...</a></li>
        <li><a href="#">22</a></li>
        <li class="next"><a class="next" href="#"> <i class="default-arrow next-ico"></i></a></li>
        </ul>
    </div>
    </div>
</section>
@endsection
