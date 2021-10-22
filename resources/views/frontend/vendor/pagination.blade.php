@if ($paginator->hasPages())
<ul class="pagination">
    {{-- Pagination Previous --}}
    @if ($paginator->onFirstPage())
        <li class="prev disabled">
            <span class="prev">
                <i class="default-arrow prev-ico"></i>
            </span>
        </li>
    @else
        <li class="prev">
            <a class="prev" href="{{ $paginator->previousPageUrl() }}">
                <i class="default-arrow prev-ico"></i>
            </a>
        </li>
    @endif
    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li class="disabled">
                <span>{{ $element }}</span>
            </li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li>
                        <a class="active" href="#">{{ $page }}</a>
                    </li>
                @else
                    <li>
                        <a href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Pagination Next --}}
    @if ($paginator->hasMorePages())
        <li class="next">
            <a class="next" href="{{ $paginator->nextPageUrl() }}"> <i class="default-arrow next-ico"></i></a>
        </li>
    @else
        <li class="next disabled">
            <span class="next"> <i class="default-arrow next-ico"></i></span>
        </li>
    @endif
</ul>
@endif
