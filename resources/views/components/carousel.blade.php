<div data-carousel-component class="carousel-component relative w-full overflow-hidden">
    <button data-carousel-arrow data-carousel-arrow-left class="carousel-arrow absolute top-1/2 left-0 transform -translate-y-1/2 bg-sky-300 p-2 rounded-full z-10 h-10 w-10">
        <x-svg-solid.arrow-left />
    </button>
    <div data-carousel class="carousel flex space-x-4 overflow-x-auto scroll-smooth">
        {{ $slot }}
    </div>
    <button data-carousel-arrow data-carousel-arrow-right class="carousel-arrow absolute top-1/2 right-0 transform -translate-y-1/2 bg-sky-300 p-2 rounded-full z-10 h-10 w-10">
        <x-svg-solid.arrow-right />
    </button>
    <div class="m-8 text-center ">
        <a href="#" class="btn-primary">
            View all
        </a>
    </div>
</div>