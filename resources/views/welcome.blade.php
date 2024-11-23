@extends('layouts.layout')

@section('body')
<div class="home-hero-section">
    <div class="container home-hero-section">
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
                            <button data-slide="1" class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3 active">Featured</button>
                            <button data-slide="2" class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3">Subscription</button>
                            <button data-slide="3" class="slide-navigation-btn text-xl font-bold text-stone-200 px-3 pb-3">Offers</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection