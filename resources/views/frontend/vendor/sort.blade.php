<?php
/**
 * sort template
 */

?>
<ul class="select">
    <li>
        <input class="select_close" id="sort-select" type="radio" name="sort_input" value=""><span class="select_label select_label-placeholder">Sort by : Newest</span>
        </li>
        <li class="select_items">
        <input class="select_expand" id="sort-opener" type="radio" name="sort_input">
        <label class="select_closeLabel" for="sort-select"></label>
        <ul class="select_options">
            @foreach ($sortOptions as $sort => $sortVal)
            <li class="select_option"></li>
            <input class="select_input dropdown_filter" id="sort-{{ $sortVal }}" type="radio" name="sort_input"
                data-param="sort" value="{{ $sortVal }}" {{ app('request')->input('sort') === $sortVal ? 'checked' : '' }}>
            <label class="select_label {{ ($sort === array_key_last($sortOptions)) ? 'last-option' : '' }}" for="sort-{{ $sortVal }}">{{ $sort }}</label>
            @endforeach
        </ul>
        <label class="select_expandLabel" for="sort-opener"></label>
    </li>
</ul>
