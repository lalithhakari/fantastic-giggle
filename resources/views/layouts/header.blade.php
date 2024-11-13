<div class="mx-auto flex w-full max-w-7xl items-center justify-between gap-4 px-6 py-6 md:gap-8 md:py-10">
    <div class="xl:gap-18 flex items-center gap-16">
        <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 hover:-translate-y-1 hover:opacity-70 focus-visible:ring-offset-2" href="/" wire:navigate.hover="">
            <img class="lg:h-18 lg:w-18 h-12 w-12 sm:h-16 sm:w-16" width="87" height="86" src="https://picperf.io/https://laravel-news.com/images/logo.svg" alt="{{config('app.name')}}">
            <span class="sr-only">{{config('app.name')}}</span>
        </a>
        <div class="hidden items-center gap-4 sm:flex md:gap-8">
            @foreach(Statamic::tag('collection:pages') as $page)
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/{{$page->slug}}" wire:navigate.hover="">
                {{$page->title}}
            </a>
            @endforeach
        </div>
    </div>
    <div class="xl:gap-18 flex items-center gap-16">
        <div class="hidden items-center gap-4 md:gap-8 lg:flex">







            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/partners" wire:navigate.hover="">
                Partners
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/links" wire:navigate.hover="">
                Links
            </a>
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 p-1 font-bold hover:text-gray-600" href="/login" wire:navigate.hover="">
                Your Account
            </a>
        </div>
        <div class="-mr-1 flex items-center gap-2">
            <button class="inline-flex rounded-sm p-1 leading-none text-black transition duration-300 hover:text-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 focus-visible:ring-offset-4 focus-visible:ring-offset-white" @click.prevent="searchModalIsOpen = true">
                <img src="https://picperf.io/https://laravel-news.com/images/icons/search.svg" class="h-6 w-6" alt="Search">
                <span class="sr-only">Search</span>
            </button>
            <button class="inline-flex rounded-sm p-1 leading-none text-black transition duration-300 hover:text-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 focus-visible:ring-offset-4 focus-visible:ring-offset-white lg:hidden" @click.prevent="mobileMenuIsOpen = true">
                <img src="https://picperf.io/https://laravel-news.com/images/icons/menu.svg" class="h-6 w-6" alt="Menu">
                <span class="sr-only">Menu</span>
            </button>
        </div>
    </div>
</div>