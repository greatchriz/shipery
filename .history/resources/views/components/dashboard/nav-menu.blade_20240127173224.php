@props(['active', 'navLink', 'navTitle'])

@php
$classes = ($active ?? false)
    ? 'mm-active'
    : '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <a href="{{ $navLink }}" class="{{ $classes }}" aria-expanded="false">
        <div class="menu-icon">
            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_113_177)">
                    <path d="M17 4H6C4.79111 4 4 4.7 4 6V18C4 19.3 4.79111 20 6 20H18C19.2 20 20 19.3 20 18V7.20711C20 7.0745 19.9473 6.94732 19.8536 6.85355L17 4ZM17 11H7V4H17V11Z" fill="#90959F"></path>
                    <path opacity="0.3" d="M14.5 4H12.5C12.2239 4 12 4.22386 12 4.5V8.5C12 8.77614 12.2239 9 12.5 9H14.5C14.7761 9 15 8.77614 15 8.5V4.5C15 4.22386 14.7761 4 14.5 4Z" fill="white"></path>
                </g>
                <defs>
                    <clippath id="clip0_113_177">
                        <rect width="24" height="24" fill="white"></rect>
                    </clippath>
                </defs>
            </svg>
        </div>
        <span class="nav-text">{{ $navTitle }}</span>
    </a>
</li>
