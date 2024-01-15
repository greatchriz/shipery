@props(['active', 'navLink', 'navTitle'])

@php
$classes = ($active ?? false)
    ? 'active'
    : '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{ $navLink }}">{{ $navTitle }}</a>
</li>
