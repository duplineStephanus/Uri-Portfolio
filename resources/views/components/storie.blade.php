<div id="stories" class="w-full bg-slate-50 overflow-hidden">
    <div class="py-24">
        <div class="text-center mb-8 px-4">
            <h2 class="text-4xl font-extrabold text-slate-900">Stories</h2>
            <p class="mt-3 text-slate-500 text-lg">Discover how we've transformed brands into memorable experiences.</p>
        </div>

        <!-- 
          CHANGES MADE HERE:
          1. Changed 'grid' to 'flex' to force items into a single row.
          2. Added 'overflow-x-auto' so users can swipe/scroll horizontally.
          3. Added 'scroll-smooth' and 'snap-x snap-mandatory' for a premium mobile-swipe feel.
          4. Removed the scrollbar visually using 'no-scrollbar' (see note below).
        -->
        <div class="flex overflow-x-auto scroll-smooth snap-x snap-mandatory w-full no-scrollbar">

            {{-- Card 1 --}}
            <!-- 
              Added sizing classes:
              - Mobile: 'w-full' (100% width)
              - Tablet (md:): 'md:w-1/2' (50% width, showing exactly 2 cards)
              - Desktop (lg:): 'lg:w-1/3' (33.33% width, showing exactly 3 cards)
              - Added 'flex-shrink-0' so the flexbox doesn't squash the cards to fit.
              - Added 'snap-start' so cards lock into place when scrolling.
            -->
            <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 snap-start relative h-96 overflow-hidden bg-slate-900">
                <img src="https://images.unsplash.com/photo-1653922841869-58867b60d0e1?q=80&w=2071&auto=format&fit=crop"
                    alt="GKR Rebrand business cards"
                    class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 pt-12">
                    <span class="text-xs font-semibold tracking-wide text-flame uppercase">Brand Identity</span>
                    <h3 class="mt-2 text-xl font-bold text-white">GKR Rebrand</h3>
                    <p class="mt-1 text-sm text-slate-200">A complete brand transformation that elevated GKR's market presence.</p>
                    <a href="#" class="rounded-full bg-flame px-4 py-1.5 mt-4 inline-flex items-center gap-1 text-sm font-semibold text-white hover:gap-2 transition-all">
                        Read story <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 snap-start relative h-96 overflow-hidden bg-slate-900">
                <img src="https://images.unsplash.com/photo-1622116618733-0dc59a6bac4f?q=80&w=2070&auto=format&fit=crop"
                    alt="GKR Rebrand business cards"
                    class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 pt-12">
                    <span class="text-xs font-semibold tracking-wide text-flame uppercase">Brand Identity</span>
                    <h3 class="mt-2 text-xl font-bold text-white">GKR Rebrand</h3>
                    <p class="mt-1 text-sm text-slate-200">A complete brand transformation that elevated GKR's market presence.</p>
                    <a href="#" class="rounded-full bg-flame px-4 py-1.5 mt-4 inline-flex items-center gap-1 text-sm font-semibold text-white hover:gap-2 transition-all">
                        Read story <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 snap-start relative h-96 overflow-hidden bg-slate-900">
                <img src="https://images.unsplash.com/photo-1615396899839-c99c121888b0?q=80&w=1287&auto=format&fit=crop"
                    alt="GKR Rebrand business cards"
                    class="w-full h-full object-cover opacity-80">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 pt-12">
                    <span class="text-xs font-semibold tracking-wide text-flame uppercase">Brand Identity</span>
                    <h3 class="mt-2 text-xl font-bold text-white">GKR Rebrand</h3>
                    <p class="mt-1 text-sm text-slate-200">A complete brand transformation that elevated GKR's market presence.</p>
                    <a href="#" class="rounded-full bg-flame px-4 py-1.5 mt-4 inline-flex items-center gap-1 text-sm font-semibold text-white hover:gap-2 transition-all">
                        Read story <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

        </div>

        {{-- Carousel dots --}}
        <div class="mt-10 flex items-center justify-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-slate-900"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-slate-300"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-slate-300"></span>
            <span class="w-2.5 h-2.5 rounded-full bg-slate-300"></span>
        </div>
    </div>
</div>