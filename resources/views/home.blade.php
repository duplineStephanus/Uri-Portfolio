<x-layouts::site>
    
    {{-- Hero Section --}}
    <div class="w-full bg-slate-50">
        <div class="max-w-5xl mx-auto px-6 py-24 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight tracking-tight">
                Wondering how to show up consistently excellent all the time without wrecking your brain each time?
            </h1>

            <p class="mt-6 text-lg md:text-xl text-slate-500">
                We got you. Let's make you a brand identity design.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#stories"
                class="w-full sm:w-auto px-8 py-3 rounded-full bg-flame text-white font-semibold hover:bg-flame/80 transition">
                    View Our Work
                </a>
                <a href="#contact"
                class="w-full sm:w-auto px-8 py-3 rounded-full border-2 border-flame text-flame font-semibold hover:bg-flame hover:text-white transition">
                    Start a Project
                </a>
            </div>
        </div>
    </div>

    {{-- Stories Section --}}
    <x-storie/>

    {{-- Reviews Section --}}
    <x-reviews/>
    
</x-layouts::site>