@props(['plan', 'price', 'features' => [], 'featured' => false])

<div class="relative p-8 rounded-2xl {{ $featured ? 'bg-[#1A1512] border-2 border-[#E8A33D] shadow-xl shadow-[#E8A33D]/10' : 'border border-white/10 bg-[#111010]' }}">

    @if ($featured)
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 bg-[#E8A33D] text-[#0B0908] text-xs font-semibold px-4 py-1 rounded-full whitespace-nowrap">
            Most Popular
        </span>
    @endif

    <h3 class="font-serif text-xl mb-1 text-white">{{ $plan }}</h3>
    <p class="text-2xl mb-8 text-[#E8A33D]">{{ $price }}</p>

    <ul class="space-y-3 mb-10 text-sm text-white/60">
        @foreach ($features as $feature)
            <li class="flex items-start gap-3">
                <svg class="w-4 h-4 mt-0.5 shrink-0 {{ $featured ? 'text-[#E8A33D]' : 'text-white/40' }}" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"/>
                </svg>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <x-button href="#contact" variant="{{ $featured ? 'primary' : 'secondary' }}" class="{{ $featured ? '' : '!border-white/20 !text-white hover:!bg-white/10' }} w-full text-center block">
        Order Now
    </x-button>
</div>