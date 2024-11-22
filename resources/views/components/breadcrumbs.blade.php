<ul {{$attributes->merge(['class' => 'breadcrumbs flex space-x-5'])}}>
    <li class="hover:text-emerald-500">
        <a href="/">Home</a>
    </li>
    <s:nav:breadcrumbs>
        <li>
            &raquo;
        </li>
        <li @class([ 'hover:text-emerald-500' , 'current'=> $is_current])>
            <a href="{{ $url }}">{{ $title }}</a>
        </li>
    </s:nav:breadcrumbs>
</ul>