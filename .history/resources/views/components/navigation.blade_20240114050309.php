@props(['active', 'navLink', 'navTitle'])

@php
$classes = ($active ?? false)
    ? 'active'
    : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{ $navLink }}">{{ $navTitle }}</a>
</li>
