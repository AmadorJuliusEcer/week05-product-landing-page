<header class="sticky top-0 z-50 bg-[#0B0908]/90 backdrop-blur border-b border-white/10">
    <div class="max-w-5xl mx-auto px-6 h-16 flex items-center justify-between">

        <!-- Logo with image -->
        <a href="#home" class="flex items-center gap-2 font-serif italic text-xl text-[#E8A33D]">
            <img src="{{ asset('images/logo.jpg') }}" alt="Master Katsu logo" class="w-9 h-9 rounded-full object-cover">
            Master Katsu
        </a>

        <!-- Centered nav links -->
        <nav class="hidden md:flex flex-1 items-center justify-center gap-8 text-sm text-white/60">
            <a href="#home" class="relative text-white pb-1 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-full after:h-px after:bg-[#E8A33D]">Home</a>
            <a href="#features" class="hover:text-white transition-colors">Features</a>
            <a href="#menu" class="hover:text-white transition-colors">Menu</a>
            <a href="#pricing" class="hover:text-white transition-colors">Pricing</a>
            <a href="#testimonials" class="hover:text-white transition-colors">Testimonials</a>
        </nav>

        <!-- Pill-style CTA -->
        <x-button href="#contact" class="!px-5 !py-2.5 text-sm hidden sm:inline-flex">
            Order Now
        </x-button>

        <button data-menu-toggle aria-label="Toggle menu" class="md:hidden w-9 h-9 flex items-center justify-center text-white/70">
            <svg data-menu-icon-open xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg data-menu-icon-close xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" viewBox="0 0 24 24" class="hidden">
                <path d="M6 6l12 12M18 6L6 18"/>
            </svg>
        </button>
    </div>

    <div data-mobile-menu class="hidden md:hidden border-t border-white/10 px-6 py-4 flex flex-col gap-3 text-sm text-white/60 bg-[#0B0908]">
        <a href="#home" class="hover:text-white">Home</a>
        <a href="#features" class="hover:text-white">Features</a>
        <a href="#menu" class="hover:text-white">Menu</a>
        <a href="#pricing" class="hover:text-white">Pricing</a>
        <a href="#testimonials" class="hover:text-white">Testimonials</a>
        <x-button href="#contact" class="w-full text-center mt-2">Order Now</x-button>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.querySelector('[data-menu-toggle]');
        const menu = document.querySelector('[data-mobile-menu]');
        const iconOpen = document.querySelector('[data-menu-icon-open]');
        const iconClose = document.querySelector('[data-menu-icon-close]');
        if (!toggleBtn) return;

        toggleBtn.addEventListener('click', function () {
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    });
</script>