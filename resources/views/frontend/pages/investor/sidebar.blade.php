<?php
/**
 *
 **/
?>

<section class="sidebar">
    <ul>
        @foreach($categories as $key => $category)
            <li class="{{ isCurrent('investors', $category->slug) }}">
                <a href="{{ route('investors', $category->slug) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</section>
