@extends('layouts.layout')

@section('body')
<section class="home-hero-section">
    <div class="container">
        <div class="slider-wrapper py-8 w-full text-center overflow-hidden">
            <div data-slides class="slides flex overflow-x-auto scroll-smooth">
                <div id="slide-1" class="slide relative w-full h-[300px] origin-center transition ease-linear delay-50 grid grid-cols-2 gap-4 shrink-0">
                    <div class="slide-content space-y-6 text-left">
                        <div class="content-header text-4xl font-bold bg-gradient-to-t from-emerald-300 via-emerald-500 to-green-800 bg-clip-text text-transparent">Gain skills, get certified</div>
                        <div class="content-subheader text-3xl text-stone-100">Gain skills, get certified</div>
                        <div class="content-description text-2xl text-stone-100">Looking to grow your career? With our certification prep you can validate your skills in AWS, Azure, CompTIA, and more.</div>
                        <div class="content-cta">
                            <button type="submit" class="btn-primary">Explore</button>

                        </div>
                    </div>
                    <div class="slide-image flex justify-center items-center h-[300px]">
                        <x-svg-banner.functions class="max-w-full max-h-full object-cover" />
                    </div>
                </div>
                <div id="slide-2" class="slide relative w-full h-[300px] origin-center transition ease-linear delay-50 grid grid-cols-2 gap-4 shrink-0">
                    <div class="slide-content space-y-6 text-left">
                        <div class="content-header text-4xl font-bold bg-gradient-to-t from-emerald-300 via-emerald-500 to-green-800 bg-clip-text text-transparent">Learn anytime, anywhere</div>
                        <div class="content-subheader text-3xl text-stone-100">Subscribe to access all courses</div>
                        <div class="content-description text-2xl text-stone-100">Start your subscription today and save big!</div>
                        <div class="content-cta">
                            <button type="submit" class="btn-primary">Subscribe now</button>

                        </div>
                    </div>
                    <div class="slide-image flex justify-center items-center h-[300px]">
                        <x-svg-banner.devices class="max-w-full max-h-full object-cover" />
                    </div>
                </div>
                <div id="slide-3" class="slide relative w-full h-[300px] origin-center transition ease-linear delay-50 grid grid-cols-2 gap-4 shrink-0">
                    <div class="slide-content space-y-6 text-left">
                        <div class="content-header text-4xl font-bold bg-gradient-to-t from-emerald-300 via-emerald-500 to-green-800 bg-clip-text text-transparent">Turn Black Friday into a brighter future</div>
                        <div class="content-subheader text-3xl text-stone-100">Don't miss our offers</div>
                        <div class="content-description text-2xl text-stone-100">Transform your career during our biggest sale of the season. Courses from ₹399 until Nov 29.</div>
                        <div class="content-cta">
                            <button type="submit" class="btn-primary">View offers</button>

                        </div>
                    </div>
                    <div class="slide-image flex justify-center items-center h-[300px]">
                        <x-svg-banner.discount class="max-w-full max-h-full object-cover" />
                    </div>
                </div>
            </div>
            <div class="slides-navigation-wrapper bg-gradient-to-r from-transparent via-sky-400 to-transparent p-4">
                <div class="grid grid-cols-2">
                    <div class="space-x-14 text-center">
                        <button data-slide="1" data-slide-navigation-btn class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3 active border-b-2">Featured</button>
                        <button data-slide="2" data-slide-navigation-btn class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3">Subscription</button>
                        <button data-slide="3" data-slide-navigation-btn class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3">Offers</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-explore-section mt-10">
    <div class="container">
        <div class="explore-header space-y-2 text-gray-900">
            <div class="header">
                <h1 class="text-3xl font-semibold">All the skills you need in one place </h1>
            </div>
            <div class="subheader">
                From critical skills to technical topics, We support your professional development.
            </div>
        </div>
        <div class="tab-pane-wrapper py-8 container">
            <x-tabs>
                @slot('tabs')
                <button data-tab="tab-1" data-tab-button class="tab-button cursor-pointer text-lg font-bold pr-2 py-2 border-green-400 active border-b-2 text-gray-900">
                    Data Science
                </button>
                <button data-tab="tab-2" data-tab-button class="tab-button cursor-pointer text-lg font-bold px-4 py-2 border-green-400">
                    IT Certifications
                </button>
                <button data-tab="tab-3" data-tab-button class="tab-button cursor-pointer text-lg font-bold px-4 py-2 border-green-400">
                    Leadership
                </button>
                @endslot

                @slot('panes')
                <div id="tab-1" data-tab-pane class="tab-pane active">
                    <x-carousel>
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                    </x-carousel>
                </div>
                <div id="tab-2" data-tab-pane class="tab-pane hidden">
                    <x-carousel>
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                    </x-carousel>
                </div>
                <div id="tab-3" data-tab-pane class="tab-pane hidden">
                    <x-carousel>
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                        <x-product-card />
                    </x-carousel>
                </div>
                @endslot
            </x-tabs>
        </div>
    </div>
</section>
<section class="home-partners-section">
    <div class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-6">
            <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world’s most innovative teams</h2>
            <div class="mx-auto mt-10 grid grid-cols-5 items-center gap-x-8 gap-y-10">
                <img class="max-h-12 w-full object-contain" src="https://tailwindui.com/plus/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
                <img class="max-h-12 w-full object-contain" src="https://tailwindui.com/plus/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
                <img class="max-h-12 w-full object-contain" src="https://tailwindui.com/plus/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
                <img class="max-h-12 w-full object-contain" src="https://tailwindui.com/plus/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
                <img class="max-h-12 w-full object-contain" src="https://tailwindui.com/plus/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
            </div>
        </div>
    </div>

</section>
@endsection