<?php
/**
 * Investor Stock view
 */
?>
<section class="main--report">
<div class="title--section">
    <div class="title--section_main">
    <h2 class="title--main">{{ $subTitle }}</h2>
    </div>
    <div class="title--section_option">
        @include('frontend.vendor.sort')
    </div>
</div>
<div class="main--report_content">
    <ul>
        @if(count($groupYears) > 0)
            @foreach($groupYears as $key => $year)
                @include('frontend.pages.investor.types.group-years')
            @endforeach
        @endif
        @foreach($investors as $investor)
            @if($investor->hasPdf())
                @include('frontend.pages.investor.types.pdf')
            @else
                @include('frontend.pages.investor.types.text')
            @endif
        @endforeach
    </ul>
</div>
</section>
