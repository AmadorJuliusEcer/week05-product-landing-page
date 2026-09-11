@props(['image', 'name', 'price', 'tag' => null])

<div class="group bg-[#151210] rounded-2xl overflow-hidden border border-white/10 hover:border-[#E8A33D]/40 hover:-translate-y-1 transition-all duration-300">
    <div class="aspect-square overflow-hidden relative">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

        @if ($tag)
            <span class="absolute top-3 left-3 bg-[#0B0908]/80 backdrop-blur text-[#E8A33D] text-xs font-medium px-3 py-1 rounded-full border border-[#E8A33D]/30">{{ $tag }}</span>
        @endif

        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    </div>

    <div class="p-4 flex items-center justify-between">
        <div>
            <p class="text-white font-medium text-sm leading-tight">{{ $name }}</p>
            <p class="text-white/40 text-xs mt-0.5">Fresh &amp; made to order</p>
        </div>
        <p class="text-[#E8A33D] font-semibold text-sm whitespace-nowrap ml-3">{{ $price }}</p>
    </div>
</div>