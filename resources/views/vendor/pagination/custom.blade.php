@if ($paginator->hasPages())
    <div class="iqoniq-pagination text-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="page-numbers disabled">1</span>
        @else
            <a class="page-numbers" href="{{ $paginator->previousPageUrl() }}" rel="prev">1</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="page-numbers border_none">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page-numbers current">{{ $page }}</span>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next">{{ $paginator->lastPage() }}</a>
        @else
            <span class="page-numbers disabled">{{ $paginator->lastPage() }}</span>
        @endif
    </div>
@endif
