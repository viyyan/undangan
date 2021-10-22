<?php
/**
 * pdf investor type
 */
?>

<li>
    <div class="annual_thumb">
    <div class="annual_thumb_images"><img src="{{ frontImage('dummy/annual-report/placeholder.png') }}" alt=""/></div>
    <div class="annual_thumb_info">
        <h2 class="title--sub">{{ $investor->title }}</h2>
        <div class="annual_thumb_download"><a class="donwload-button" href="{{ $investor->pdfFileUrl() }}" target="_blank">Download PDF</a></div>
    </div>
    </div>
</li>
