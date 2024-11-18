@props(['icon', 'title' => ''])

<div class="relative group inline-block">
    <svg
        {{ $attributes->merge(['class' => 'hover:text-green-600 hover:transition-colors']) }}>
        {!! file_get_contents(resource_path("images/{$icon}.svg")) !!}
    </svg>

    @if($title)
    <div class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 px-2 py-1 text-xs text-white bg-black rounded opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none whitespace-nowrap">
        {{ $title }}
    </div>
    @endif
</div>