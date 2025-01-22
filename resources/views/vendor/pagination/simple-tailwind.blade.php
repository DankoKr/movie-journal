@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between mt-5 px-2 bg-black">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="invisible">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-yellow-600 bg-black leading-5 rounded-md  hover:text-white transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-yellow-600 bg-black leading-5 rounded-md hover:text-white transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="invisible">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
