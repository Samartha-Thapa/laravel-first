@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25   text-xs transition-colors duration-300";

    if($size === 'base') {
        $classes .= " px-5 py-1 rounded-xl text-sm";
    }

    if($size === 'small') {
        $classes .= " px-2 py-1 rounded-xl text-xs";
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>