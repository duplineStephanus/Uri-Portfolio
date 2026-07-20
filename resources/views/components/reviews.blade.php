<div id="reviews" class="w-full bg-slate-50">
    <div class="max-w-4xl mx-auto px-6 py-24">
        <div class="text-center mb-8">
            <h2 class="text-4xl font-extrabold text-slate-900">What Our Clients Say</h2>
            <p class="mt-3 text-slate-500 text-lg">Real stories from real brands we've helped transform.</p>
        </div>

        <div class=" px-10 py-10 text-center">

            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=200&q=80"
                 alt="Sarah Mitchell"
                 class="w-20 h-20 rounded-full object-cover mx-auto">

            <div class="mt-5 flex items-center justify-center gap-1 text-flame">
                @for ($i = 0; $i < 5; $i++)
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                        <path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.1-5.4 3.1 1.3-6-4.6-4.1 6.1-.6z"/>
                    </svg>
                @endfor
            </div>

            <h3 class="mt-4 text-lg font-bold text-slate-900">Sarah Mitchell</h3>
            <p class="text-slate-600">CEO, GKR</p>

            <p class="mt-6 text-xl text-slate-700 leading-relaxed max-w-2xl mx-auto">
                "Uri transformed our brand completely. The attention to detail and strategic thinking behind every design element was incredible. Our customers noticed the difference immediately."
            </p>
        </div>

        {{-- Carousel dots --}}
        <div class="mt-8 flex items-center justify-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-slate-900"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-slate-300"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-slate-300"></span>
        </div>
    </div>
</div>