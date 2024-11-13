@extends('layouts.layout')

@section('pageName', $page->title)

@section('body')
<div class="relative mx-auto w-full max-w-4xl px-6 pt-10">
    <h1 class="text-4xl font-bold sm:text-5xl md:text-6xl">{{$title}}</h1>
    <div class="mt-6 flex items-center gap-3">
        <p class="text-xs text-gray-600">
            Last updated on
            <time itemprop="dateModified" datetime="2024-11-12T19:58:01">
                {{$date}}
            </time>
            by
            @foreach($authors as $author)
            <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 hover:text-red-600" href="/{{'@'.$author->name}}" rel="author" wire:navigate.hover="">
                {{$author->name}}
            </a>
            @endforeach
        </p>
    </div>
    <img src="{{$featured_image->first()->url}}" alt="{{$featured_image->first()->alt}} image" class="mt-12 aspect-[2/1] w-full overflow-hidden rounded-xl object-cover shadow-card">
</div>
<div class="mx-auto w-full max-w-4xl px-6 py-20">
    <div class="prose max-w-4xl break-words prose-a:text-red-600 prose-a:transition prose-a:hover:text-red-700 prose-pre:rounded-lg prose-pre:bg-gray-100/50 prose-pre:p-6 prose-img:mx-auto prose-img:rounded-lg prose-img:border prose-img:border-gray-100">
        {!! $article_content !!}
    </div>
</div>
@endsection