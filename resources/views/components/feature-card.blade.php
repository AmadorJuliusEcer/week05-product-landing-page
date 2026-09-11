@props(['title', 'description'])

<div class="group relative bg-[#151210] border border-white/10 rounded-2xl p-6 hover:border-[#E8A33D]/40 hover:-translate-y-1 transition-all duration-300">

    <div class="w-11 h-11 rounded-full bg-[#E8A33D]/10 border border-[#E8A33D]/30 flex items-center justify-center mb-5 group-hover:bg-[#E8A33D] transition-colors duration-300">
        <svg class="w-5 h-5 text-[#E8A33D] group-hover:text-[#0B0908] transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M20 6L9 17l-5-5"/>
        </svg>
    </div>

    <h3 class="font-serif text-lg text-white mb-2">{{ $title }}</h3>
    <p class="text-sm text-white/60 leading-relaxed">{{ $description }}</p>
</div>