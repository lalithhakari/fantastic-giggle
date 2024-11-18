@extends('layouts.layout')

@section('pageName', $page->title)

@section('body')
<div class="relative mx-auto w-full max-w-4xl px-6 pt-10">
    <h1 class="text-3xl font-bold">{{$title}}</h1>
    <div class="mt-6 flex items-center gap-3">
        <p class="text-xs text-gray-600">
            Last updated on
            <time datetime="{{$date}}">
                {{$date}}
            </time>
            by
            @foreach($authors as $author)
            <a class="inline-flex rounded-sm transition duration-300 leading-none hover:text-green-600" href="/{{'@'.$author->name}}" rel="author">
                {{$author->name}}
            </a>
            @endforeach
        </p>
    </div>
    <img src="{{$featured_image->first()->url}}" alt="{{$featured_image->first()->alt}} image" class="mt-12 aspect-[2/1] w-full overflow-hidden rounded-xl object-cover shadow-card">
</div>
<div class="mx-auto w-full max-w-4xl px-6 py-20">
    <div class="prose max-w-4xl break-words prose-a:text-green-600 prose-a:transition prose-a:hover:text-green-700 prose-pre:rounded-lg prose-pre:bg-gray-100/50 prose-pre:p-6 prose-img:mx-auto prose-img:rounded-lg prose-img:border prose-img:border-gray-100">
        {!! $article_content !!}
    </div>
</div>
@endsection