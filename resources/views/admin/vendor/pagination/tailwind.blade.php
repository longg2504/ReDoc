@if ($paginator->hasPages())
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <div class="hidden md:block text-gray-600">
            Hiển thị {{$paginator->firstItem()}} đến {{$paginator->lastItem()}} của {{$paginator->total()}} kết quả
        </div>
    </div>
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li>
                    <button class="pagination__link" disabled>
                        <i class="w-4 h-4" data-feather="chevrons-left"></i>
                    </button>
                </li>
                <li>
                    <button class="pagination__link" disabled>
                        <i class="w-4 h-4" data-feather="chevron-left"></i>
                    </button>
                </li>
            @else
                <li>
                    <a class="pagination__link" href="{{$paginator->url(1)}}">
                        <i class="w-4 h-4" data-feather="chevrons-left"></i>
                    </a>
                </li>
                <li>
                    <a class="pagination__link" href="{{ $paginator->previousPageUrl() }}">
                        <i class="w-4 h-4" data-feather="chevron-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li>
                        <a class="pagination__link" href="">...{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <a class="pagination__link pagination__link--active" href="">{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a class="pagination__link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li>
                    <a class="pagination__link" href="{{ $paginator->nextPageUrl() }}">
                        <i class="w-4 h-4" data-feather="chevron-right"></i>
                    </a>
                </li>
                <li>
                    <a class="pagination__link" href="{{$paginator->url($paginator->lastPage())}}">
                        <i class="w-4 h-4" data-feather="chevrons-right"></i>
                    </a>
                </li>
            @else
                <li>
                    <button class="pagination__link" disabled>
                        <i class="w-4 h-4" data-feather="chevron-right"></i>
                    </button>
                </li>
                <li>
                    <button class="pagination__link" disabled>
                        <i class="w-4 h-4" data-feather="chevrons-right"></i>
                    </button>
                </li>
            @endif

        </ul>
        <form action="" method="get" id="pageLoad">
            <input type="hidden" name="search_key" value="{{ request('search_key') }}}">
            <select class="w-20 form-select box mt-3 sm:mt-0" name="per_page" onchange="document.getElementById('pageLoad').submit()">
                <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20</option>
                <option value="30" {{ request('per_page') == 30 ? 'selected' : '' }}>30</option>
                <option value="40" {{ request('per_page') == 40 ? 'selected' : '' }}>40</option>
            </select>
        </form>
    </div>
@endif
