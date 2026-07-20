<div id="contact" class="w-full bg-midnight">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            {{-- Brand --}}
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <x-app-logo-icon/>
                <p class="mt-3 text-slate-400 max-w-xs">
                    Crafting memorable brand identities that stand the test of time.
                </p>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-white font-semibold">Contact Us</h3>
                <div class="mt-4 space-y-3">
                    <a href="mailto:dupline.stephanus@uri.com"
                       class="flex items-center gap-2 text-slate-400 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        dupline.stephanus@uri.com
                    </a>
                    <a href="tel:+16807701010"
                       class="flex items-center gap-2 text-slate-400 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h2.28a1 1 0 01.98.78l1.06 4.24a1 1 0 01-.27.94l-1.6 1.6a11 11 0 006.06 6.06l1.6-1.6a1 1 0 01.94-.27l4.24 1.06a1 1 0 01.78.98V19a2 2 0 01-2 2h-1C9.72 21 3 14.28 3 6V5z" />
                        </svg>
                        +1 (680) 770-1010
                    </a>
                </div>
            </div>

            {{-- Social --}}
            <div>
                <h3 class="text-white font-semibold">Follow Us</h3>
                <x-social-media />
            </div>

        </div>

        {{-- Divider --}}
        <div class="mt-12 pt-6 border-t border-slate-800 flex flex-col sm:flex-row items-center justify-between gap-2 text-sm text-slate-500">
            <span>&copy; {{ date('Y') }} Uri. All rights reserved.</span>
            <span>Curated with care by Dupline Stephanus</span>
        </div>
    </div>
</div>