<div class="pagination-wrapper container my-6">
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if($data['prev_page'])
            <a href="{{$data['prev_page']}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-700 bg-white border border-emerald-300 leading-5 rounded-md hover:bg-emerald-100 active:bg-emerald-100 active:text-emerald-700 transition ease-in-out duration-150">
                &laquo; Previous
            </a>
            @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-emerald-500 bg-white border border-emerald-300 cursor-default leading-5 rounded-md">
                &laquo; Previous
            </span>
            @endif

            @if($data['next_page'])
            <a href="{{$data['next_page']}}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-emerald-700 bg-white border border-emerald-300 leading-5 rounded-md hover:bg-emerald-100 active:bg-emerald-100 active:text-emerald-700 transition ease-in-out duration-150">
                Next &raquo;
            </a>
            @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-emerald-500 bg-white border border-emerald-300 cursor-default leading-5 rounded-md">
                Next &raquo;
            </span>
            @endif
        </div>

        <div class="hidden sm:block mx-auto">
            <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                @if($data['prev_page'])
                <a href="{{$data['prev_page']}}" rel="previous" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-emerald-500 bg-white border border-emerald-300 rounded-l-md leading-5 hover:bg-emerald-100 focus:z-10 active:bg-emerald-100 active:text-emerald-500 transition ease-in-out duration-150" aria-label="Previous &amp;laquo;">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                @else
                <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                    <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-emerald-500 bg-white border border-emerald-300 cursor-default rounded-l-md leading-5" aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </span>
                @endif

                @foreach($data['links']['all'] as $link)
                @if($link['page'] == $data['current_page'])
                <span aria-current="page">
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium bg-emerald-600 text-white border border-emerald-300 cursor-default leading-5">{{$link['page']}}</span>
                </span>
                @else
                <a href="{{$link['url']}}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-emerald-700 bg-white border border-emerald-300 leading-5 hover:bg-emerald-100 focus:z-10 active:bg-emerald-100 active:text-emerald-700 transition ease-in-out duration-150" aria-label="Go to page {{$link['page']}}">
                    {{$link['page']}}
                </a>
                @endif
                @endforeach

                @if($data['next_page'])
                <a href="{{$data['next_page']}}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-emerald-500 bg-white border border-emerald-300 rounded-r-md leading-5 hover:bg-emerald-100 focus:z-10 active:bg-emerald-100 active:text-emerald-500 transition ease-in-out duration-150" aria-label="Next &amp;raquo;">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                @else
                <span aria-disabled="true" aria-label="&amp;raquo; Next">
                    <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-emerald-500 bg-white border border-emerald-300 cursor-default rounded-r-md leading-5" aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </span>
                @endif

            </span>
        </div>
    </nav>
</div>