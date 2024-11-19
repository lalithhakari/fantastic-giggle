@extends('layouts.layout')

@section('pageName', $page->title)

@section('body')
<div class="container py-6">
    <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3">
        <h2 class="text-3xl font-bold">{{$page->title}}</h2>
    </div>
    <div class="all-news-wrapper">
        @php($tag = Statamic::tag('collection:news')->paginate($view->pagination_count)->as('allNews')->fetch())
        <div class="mt-12 grid gap-x-8 gap-y-12 grid-cols-4">
            @foreach($tag['allNews'] as $news)
            <a href="/{{$page->slug}}/{{$news->slug}}" class="group hover:cursor-pointer">
                <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
                    <img src="{{$news->featured_image->first()->url}}" alt="{{$news->featured_image->first()->alt}} image" class="h-full w-full rounded-lg object-cover" loading="lazy">
                </div>
                <h3 class="mt-4 text-lg font-medium transition group-hover:text-green-600">
                    {{$news->title}}
                </h3>
            </a>
            @endforeach
        </div>
        <div class="pagination-wrapper my-6 mx-auto">
            {!! $tag['paginate']['auto_links'] !!}
        </div>
    </div>
</div>
@endsection