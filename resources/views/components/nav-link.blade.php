@props([
    'href' => '#',
    'active' => false,
    'icon' => null,
])

@php
    $baseClasses = 'flex items-center gap-2 px-2 py-2 rounded-lg font-medium transition-colors';
    $activeClasses = $active
        ? 'bg-indigo-100 text-indigo-600'
        : 'text-gray-600 hover:bg-indigo-100 hover:text-indigo-600';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "$baseClasses $activeClasses"]) }}>
    @if($icon)
        <i data-feather="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
