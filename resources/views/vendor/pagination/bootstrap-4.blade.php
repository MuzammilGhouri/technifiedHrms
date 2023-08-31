@if ($paginator->hasPages())
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
    <div class="pager_wrapper">
        <ul class="pagination" role="navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                {{-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li> --}}
                <li class="disabled">
                    <a href="" rel="prev"  aria-label="@lang('pagination.previous')"><i class="flaticon-left-arrow"></i></a>
                </li>
            @else
                {{-- <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li> --}}
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"  aria-label="@lang('pagination.previous')"><i class="flaticon-left-arrow"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            {{-- <li class="page-item " aria-current="page">
                                <span class="page-link">{{ $page }}</span>
                            </li> --}}
                            <li class="btc_shop_pagi ">
                                <a href="" class="active">{{ $page }}</a>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())

                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <i class="flaticon-right-arrow"></i></a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                </li>

            @endif
        </ul>
    </div>
</div>
@endif
