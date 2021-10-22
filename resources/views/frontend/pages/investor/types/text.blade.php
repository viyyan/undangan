<?php
/**
 * pdf investor type
 */
?>

<li>
    <div class="annual_info">
    <div class="annual_info_date">
        <h2 class="text--medium light-blue">{{ $investor->title }}, {{ $investor->created_at->format('d F Y') }}</h2>
    </div>
    <div class="annual_info_text">
        <p class="text--medium">
            {{ $investor->frontendExcerpt }}
            <a href="{{ route('investor', $investor->slug ) }}" class="light-blue"> more..</a>
        </p>
    </div>
    </div>
</li>
