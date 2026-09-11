@extends('layouts.app')

@section('content')
    <x-navbar />
    <x-hero />

    <section id="features" class="max-w-5xl mx-auto px-6 py-16">
        <h2 class="font-serif text-3xl text-white mb-10">Why order from Master Katsu</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-feature-card title="Made to order, every time" description="Every cutlet is breaded and fried fresh after you order — never sitting under a heat lamp." />
            <x-feature-card title="Four signature sauces" description="Gravy, Ala King, thick cheese, or our original Japanese-style BBQ — pick your katsu's personality." />
            <x-feature-card title="Home-style sides" description="Mashed potato, fries, or steamed rice — every plate comes with a proper side, not an afterthought." />
            <x-feature-card title="Budget-friendly plates" description="Full meals start at ₱140, so a good lunch never has to wait for payday." />
            <x-feature-card title="GCash or cash" description="Pay however's easiest — GCash for quick orders, cash for walk-ins." />
            <x-feature-card title="Two Laguna locations" description="Find us in Brgy. San Roque and Brgy. Nanhaya, Victoria — both serving the same menu." />
        </div>
    </section>

    <section id="menu" class="max-w-5xl mx-auto px-6 py-16 border-t border-white/10">
        <p class="text-sm tracking-widest text-[#E8A33D] mb-3">ALL TIME FAVORITES</p>
        <h2 class="font-serif text-3xl text-white mb-10">Crowd favorites</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
            <x-menu-card image="{{ asset('images/katsu2.jpg') }}" name="Master Katsu" price="₱145" tag="Best Seller" />
            <x-menu-card image="{{ asset('images/katsu.jpg') }}" name="King Katsu" price="₱145" />
            <x-menu-card image="{{ asset('images/katsu3.jpg') }}" name="Cheesy Katsu" price="₱140" />
            <x-menu-card image="{{ asset('images/katsu4.jpg') }}" name="OG Katsu" price="₱140" />
        </div>
    </section>

    <section id="pricing" class="max-w-5xl mx-auto px-6 py-16 border-t border-white/10">
        <p class="text-sm tracking-widest text-[#E8A33D] mb-3">EXPLORE THE MENU</p>
        <h2 class="font-serif text-3xl text-white mb-10">Order the size that fits</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <x-pricing-card plan="Solo Katsu" price="From ₱140" :features="['One chicken katsu cutlet', 'Choice of one signature sauce', 'Rice, mashed potato, or fries', 'Dine-in or takeout']" />
            <x-pricing-card plan="Family Bundle" price="₱550" :features="['Four katsu plates, mixed sauces', 'Shared rice and one side dish', 'Free delivery within the barangay', 'Good for 3–4 people']" :featured="true" />
            <x-pricing-card plan="Catering Tray" price="₱1,800" :features="['20 katsu pieces, sauce on the side', 'Best for parties & office lunches', '24-hour advance order required', 'Utensils & serving trays included']" />
        </div>
    </section>

    <section id="testimonials" class="max-w-5xl mx-auto px-6 py-16 border-t border-white/10">
        <h2 class="font-serif text-3xl text-white mb-10">What our customers say</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-testimonial-card photo="https://i.pravatar.cc/100?img=1" name="Ana Dela Cruz" position="Regular customer, San Roque" review="Grabe sarap ng Cheesy Katsu, sulit na sulit sa presyo. Ito na yung go-to order namin tuwing may pagod sa trabaho." />
            <x-testimonial-card photo="https://i.pravatar.cc/100?img=2" name="Rodel Manalo" position="Office manager, Victoria" review="Nag-order kami ng Family Bundle for our small office gathering. Sobrang bilis dumating and consistent yung lasa kahit maraming order." />
            <x-testimonial-card photo="https://i.pravatar.cc/100?img=3" name="Jamie Torres" position="Student, Nanhaya" review="Yung OG Katsu sauce, parang homemade BBQ ng lola. Affordable pa talaga for students like me." />
        </div>
    </section>

    <section id="contact" class="max-w-5xl mx-auto px-6 py-20 border-t border-white/10 text-center">
        <h2 class="font-serif text-3xl text-white mb-4">Craving katsu already?</h2>
        <p class="text-white/60 mb-8">Message us to order, ask about catering, or just come by — a good plate is always waiting.</p>
        <div class="flex justify-center">
            <x-button href="#">Contact us</x-button>
        </div>
    </section>

    <x-footer />
@endsection

