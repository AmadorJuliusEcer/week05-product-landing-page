@props(['photo', 'name', 'position', 'review'])

<div class="bg-[#151210] border border-white/10 rounded-2xl p-6 hover:border-[#E8A33D]/40 transition-colors duration-300">

    <div class="flex text-[#E8A33D] text-sm mb-4">★★★★★</div>

    <p class="text-white/70 leading-relaxed mb-6 text-sm">{{ $review }}</p>

    <div class="flex items-center gap-3 pt-4 border-t border-white/10">
        <img src="{{ $photo }}" alt="{{ $name }}" class="w-9 h-9 rounded-full object-cover">
        <div class="text-sm">
            <p class="text-white font-medium">{{ $name }}</p>
            <p class="text-white/40 text-xs">{{ $position }}</p>
        </div>
    </div>
</div>