@props(['icon', 'title' => ''])

<svg
    {{ $attributes->merge(['class' => 'hover:text-green-600 hover:transition-colors']) }}>
    <title>{{$title}}</title>
    {!! file_get_contents(resource_path("images/{$icon}.svg")) !!}
</svg>