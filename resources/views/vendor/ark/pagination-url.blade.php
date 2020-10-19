<div class="pagination-wrapper">
    <div class="pagination-pages-mobile">
        <button type="button" class="button-pagination-page-indicator" disabled><span>Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span></button>
    </div>

    <div class="flex space-x-3">
        @if($paginator->onFirstPage())
            <div class="flex items-center button-generic button-disabled">
                <span class="flex items-center">@svg('pagination-first', 'h-3 w-3')</span>
            </div>
        @else
            <a class="flex" href="{{ $paginator->url(1) }}">
                <div class="flex items-center h-full button-secondary pagination-button-mobile">
                    <span class="flex items-center">@svg('pagination-first', 'h-3 w-3')</span>
                </div>
            </a>
        @endif

        @if($paginator->onFirstPage())
            <div class="flex items-center button-generic button-disabled">
                <div class="flex items-center">@svg('chevron-left', 'h-3 w-3')<span class="hidden lg:flex lg:ml-2">Previous</span></div>
            </div>
        @else
            <a class="flex" href="{{ $paginator->previousPageUrl() }}">
                <div class="flex items-center h-full button-secondary pagination-button-mobile">
                    <div class="flex items-center">@svg('chevron-left', 'h-3 w-3')<span class="hidden lg:flex lg:ml-2">Previous</span></div>
                </div>
            </a>
        @endif

        <div class="hidden px-2 rounded bg-theme-primary-100 md:flex flex-inline">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <button type="button" class="button-pagination-page-indicator" disabled><span>{{ $element }}</span></button>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <a
                            href="{{ $url }}"
                            class="@if ($paginator->currentPage() === $page) button-pagination-page-indicator--selected @else button-pagination-page-indicator  @endif"
                        >
                            {{ $page }}
                        </a>
                    @endforeach
                @endif
            @endforeach
        </div>

        <div class="pagination-pages md:hidden">
            <button type="button" class="button-pagination-page-indicator" disabled><span>Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span></button>
        </div>

        @if($paginator->hasMorePages())
            <a class="flex" href="{{ $paginator->nextPageUrl() }}">
                <div class="flex items-center h-full button-secondary pagination-button-mobile">
                    <div class="flex items-center"><span class="hidden lg:flex lg:mr-2">Next</span>@svg('chevron-right', 'h-3 w-3')</div>
                </div>
            </a>
        @else
            <div class="flex items-center button-generic button-disabled">
                <div class="flex items-center"><span class="hidden lg:flex lg:mr-2">Next</span>@svg('chevron-right', 'h-3 w-3')</div>
            </div>
        @endif

        @if($paginator->hasMorePages())
            <a class="flex" href="{{ $paginator->url($paginator->lastPage()) }}">
                <div class="flex items-center h-full button-secondary pagination-button-mobile">
                    <span class="flex items-center">@svg('pagination-last', 'h-3 w-3')</span>
                </div>
            </a>
        @else
            <div class="flex items-center button-generic button-disabled">
                <span class="flex items-center">@svg('pagination-last', 'h-3 w-3')</span>
            </div>
        @endif
    </div>
</div>