<section id="home" class="relative max-w-6xl mx-auto px-6 pt-20 pb-24 overflow-hidden">

    <svg class="absolute left-4 top-16 w-16 h-16 text-white/10 hidden lg:block" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5">
        <path d="M50 15 C60 25, 60 35, 50 45 C40 35, 40 25, 50 15 Z" />
        <path d="M50 45 C60 55, 60 65, 50 75 C40 65, 40 55, 50 45 Z" />
        <path d="M15 50 C25 40, 35 40, 45 50 C35 60, 25 60, 15 50 Z" />
    </svg>
    <svg class="absolute right-6 top-10 w-20 h-20 text-white/10 hidden lg:block" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1.5">
        <circle cx="50" cy="50" r="30" />
        <path d="M50 20 L50 80 M20 50 L80 50 M29 29 L71 71 M71 29 L29 71" />
    </svg>

    <div class="grid lg:grid-cols-2 gap-12 items-center">

        <!-- LEFT: text -->
        <div class="text-center lg:text-left">
            <p class="text-sm tracking-widest text-[#E8A33D] mb-6 animate-[fadeUp_0.8s_ease-out]">EST. 2021 · SAN ROQUE &amp; VICTORIA, LAGUNA</p>

            <h1 class="font-serif italic text-5xl sm:text-6xl text-white leading-tight mb-8 animate-[fadeUp_0.8s_ease-out_0.1s_both]">
                Crispy katsu makes<br>every mood better
            </h1>

            <p class="text-white/60 max-w-md mx-auto lg:mx-0 mb-10 animate-[fadeUp_0.8s_ease-out_0.2s_both]">
                Home-style chicken katsu made fresh daily — from classic gravy to cheesy sauce, plus Filipino comfort classics for the whole barkada.
            </p>

            <div class="flex justify-center lg:justify-start animate-[fadeUp_0.8s_ease-out_0.3s_both]">
                <x-button href="#pricing">View Our Menu</x-button>
            </div>
        </div>

        <!-- RIGHT: image with floating badge + nav dots -->
        <div class="relative animate-[fadeUp_0.8s_ease-out_0.3s_both]">
            <div class="aspect-[4/5] sm:aspect-square overflow-hidden rounded-[3rem] shadow-2xl shadow-black/50">
                <img src="{{ asset('images/Hero_image.jpg') }}" alt="Master Katsu plate" class="w-full h-full object-cover">
            </div>

            <!-- floating rating badge -->
            <div class="absolute -left-4 bottom-8 sm:-left-8 bg-[#151210] border border-white/10 rounded-2xl px-5 py-4 shadow-xl flex items-center gap-3">
                <div class="flex text-[#E8A33D] text-sm">★★★★★</div>
                <div class="text-xs text-white/60 leading-tight">
                    <span class="block text-white font-semibold">4.9/5</span>
                    from 300+ orders
                </div>
            </div>

            <!-- carousel-style nav dots -->
            <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-4">
                <button aria-label="Previous" class="w-9 h-9 rounded-full border border-white/20 flex items-center justify-center text-white/50 hover:text-white hover:border-white/40 transition-colors">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <button aria-label="Next" class="w-9 h-9 rounded-full border border-white/20 flex items-center justify-center text-white/50 hover:text-white hover:border-white/40 transition-colors">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>
        </div>
    </div>
</section>