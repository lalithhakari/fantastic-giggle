@extends('layouts.layout')

@section('body')
<div class="home-hero-section">
    <div class="container">
        <div class="slider-wrapper py-8">
            <div class="slider-container w-full text-center overflow-hidden">
                <div class="slides flex overflow-x-auto scroll-smooth">
                    <div id="slide-1" class="slide relative grid grid-cols-2 gap-4 shrink-0">
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
                    <div id="slide-2" class="slide relative grid grid-cols-2 gap-4 shrink-0">
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
                    <div id="slide-3" class="slide relative grid grid-cols-2 gap-4 shrink-0">
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
                <div class="slide-navigation-wrapper bg-gradient-to-r from-transparent to-sky-400 p-4">
                    <div class="grid grid-cols-2">
                        <div class="space-x-14 text-center">
                            <button data-slide="1" class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3 active border-b-2">Featured</button>
                            <button data-slide="2" class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3">Subscription</button>
                            <button data-slide="3" class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3">Offers</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="home-explore-section mt-10">
    <div class="container">
        <div class="heading space-y-2">
            <div class="main-heading">
                <h1 class="text-3xl font-semibold">All the skills you need in one place </h1>
            </div>
            <div class="sub-heading">
                From critical skills to technical topics, We support your professional development.
            </div>
        </div>
        <!--  -->
        <div class="tabs-section py-8">
            <div class="container">
                <!-- Tab Buttons -->
                <div class="tabs-navigation flex space-x-4 border-b border-gray-300">
                    <button data-tab="tab-1" class="tab-button text-lg font-bold pr-2 py-2 border-green-400 active border-b-2">
                        Data Science
                    </button>
                    <button data-tab="tab-2" class="tab-button text-lg font-bold px-4 py-2 border-green-400">
                        IT Certifications
                    </button>
                    <button data-tab="tab-3" class="tab-button text-lg font-bold px-4 py-2 border-green-400">
                        Leadership
                    </button>
                </div>

                <!-- Tab Panes -->
                <div class="tabs-content mt-6">
                    <div id="tab-1" class="tab-pane active">
                        <h2 class="text-2xl font-bold mb-4">Content for Tab 1</h2>
                        <p class="text-lg">This is the content for the first tab. You can place any content here.</p>
                    </div>
                    <div id="tab-2" class="tab-pane hidden">
                        <h2 class="text-2xl font-bold mb-4">Content for Tab 2</h2>
                        <p class="text-lg">This is the content for the second tab. You can customize this as needed.</p>
                    </div>
                    <div id="tab-3" class="tab-pane hidden">
                        <h2 class="text-2xl font-bold mb-4">Content for Tab 3</h2>
                        <p class="text-lg">This is the content for the third tab. Tailor this to your requirements.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<div class="home-partners-section">
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world’s most innovative teams</h2>
            <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/plus/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
            </div>
        </div>
    </div>

</div>
@endsection