@extends('layouts.layout')

@section('pageName', $page->title)

@section('body')
<div class="mx-auto w-full max-w-2xl px-6 lg:max-w-7xl">
    <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3">
        <h2 class="text-3xl font-bold sm:text-4xl lg:text-[40px]">{{$page->title}}</h2>
        <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 items-center font-bold text-red-600 hover:text-red-700" href="/category/tutorials">
            View all
            <img src="{{ Vite::asset('resources/images/right-arrow.svg') }}" class="text-red-600 hover:text-red-700">
        </a>
    </div>
    <div class="mt-12 grid gap-x-8 gap-y-12 lg:grid-cols-3">
        @foreach(Statamic::tag('collection:news') as $news)
        <div class="group relative">
            <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
                <img src="{{$news->featured_image[0]->url}}" alt="{{$news->featured_image[0]->alt}} image" class="h-full w-full rounded-lg object-cover" loading="lazy">
            </div>
            <h3 class="mt-4 text-xl font-bold transition group-hover:text-red-600 sm:text-2xl">
                {{$news->title}}
            </h3>
            <a class="transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 absolute inset-0 !block h-full w-full !rounded-lg" href="/{{$page->slug}}/{{$news->slug}}" onclick="">
                <span class="sr-only">Read article</span>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection