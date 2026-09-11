@props(['variant' => 'primary', 'href' => '#'])

@php
$classes = match($variant) {
    'primary' => 'bg-[#E8A33D] text-[#0B0908] hover:bg-[#f0b458] focus-visible:ring-[#E8A33D]',
    'outline' => 'bg-white/5 text-white border border-white/15 hover:border-white/40 focus-visible:ring-white',
    'secondary' => 'bg-transparent text-white border border-white/60 hover:bg-white/10 focus-visible:ring-white',
    default => 'bg-[#E8A33D] text-[#0B0908] hover:bg-[#f0b458] focus-visible:ring-[#E8A33D]',
};
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full text-sm font-semibold transition-colors duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-offset-[#0B0B0B] $classes"]) }}>
    {{ $slot }}
</a>