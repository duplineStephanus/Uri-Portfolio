<x-layouts::site> 

    {{--
    resources/views/livewire/stories.blade.php (or wherever this partial is included)

    Hardcoded case-study "story" view — GKR Brand Evolution.
    - No JS. Carousel dots / filter tabs are static markup only.
    - No DB/model calls — all content is inline.
    - Images sourced from Unsplash (remote URLs), sized via query params.
    - Wrap everything in a single root <div> per request; nav/footer are
      assumed to live in the parent layout this view extends.
--}}

<div class="bg-neutral-100">

    {{-- ============================================================
         HERO / FEATURED STORY 
    ============================================================= --}}
    <div class="relative h-[420px] sm:h-[480px] overflow-hidden">
        {{-- 2-4 images : AUTO SLIDE SHOW --}}
        <div id="slideshow">
            <img
            src="https://plus.unsplash.com/premium_photo-1765828956888-b9b59acae029?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3DD"
            alt="GKR Consulting business card mockups"
            class="absolute inset-0 h-full w-full object-cover"
            >
        </div>

        {{-- gradient overlay for text legibility --}}
        <div class="absolute inset-0 bg-gradient-to-t from-flame/40 via-slate-900/30 to-slate-900/10"></div>

        <div class="absolute inset-x-0 bottom-4 px-6">
            <span class="text-xs font-semibold tracking-widest text-orange-400 uppercase">
                Featured Story
            </span>
            <div class="mt-2 text-white leading-tight">
                <h1 class="text-3xl sm:text-4xl font-bold pb-1">
                GKR Brand Evolution
                </h1>
                <p>This local business had amazing services but a website and logo that looked dated, causing them to lose premium clients to competitors. We stripped away the clutter and built a clean, minimalist visual identity that commands authority.</p>
            </div>
        </div>

        
    </div>

    {{-- ============================================================
        LOGO STRIP
    ============================================================= --}}
    <div class="bg-flame">
        <div class="flex items-center justify-between gap-8 overflow-x-auto px-6 py-4 no-scrollbar">
            @foreach (['GKR', 'GKR Consulting', 'GKR', 'GKR Consulting', 'GKR', 'GKR Consulting', 'GKR', 'GKR Consulting', 'GKR', 'GKR Consulting', 'GKR', 'GKR Consulting', 'GKR'] as $logo)
                <span class="shrink-0 text-xs font-semibold tracking-wide text-slate-300 uppercase">
                    {{ $logo }}
                </span>
            @endforeach
        </div>
    </div>

    {{-- ============================================================
         MEDIA GALLERY
    ============================================================= --}}
    <div class="mx-auto max-w-full">

        {{-- Full-width logo shot --}}
        <div class="overflow-hidden ">
            <img
                src="https://plus.unsplash.com/premium_photo-1763898811084-d81549378409?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1pbi1zYW1lLXNlcmllc3w0fHx8ZW58MHx8fHx8"
                alt="Eberdil nourishing body moisturizer being applied"
                class="w-full h-[520px] object-cover"
            >
        </div>

        {{-- Two-up: mockups of logo usage --}}
        <div class="grid grid-cols-2">
            <div class="overflow-hidden">
                <img
                    src="https://plus.unsplash.com/premium_photo-1763898811246-8c9d50e58721?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="GKR Consulting business card layout"
                    class="w-full h-64 object-cover"
                >
            </div>
            <div class="overflow-hidden bg-indigo-950 flex items-center justify-center">
                <img
                    src="https://plus.unsplash.com/premium_photo-1763898811104-a7f5ef4a6160?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Btaches Beach House open house announcement"
                    class="w-full h-64 object-cover"
                >
            </div>
        </div>

        {{-- Full-width: Templates --}}
        <div class="overflow-hidden">
            <img
                src="https://plus.unsplash.com/premium_photo-1763898811153-0c0fba3ecdf6?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Oily Treasures branded tote bag"
                class="w-full h-[560px] object-cover"
            >
        </div>

        {{-- Four small imgs - product mockup or desgin elements --}}
        <div class="grid grid-cols-4">
            <div class="overflow-hidden">
                <img
                    src="https://plus.unsplash.com/premium_photo-1763898810953-1608e1147726?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Eberdil moisturizer close-up"
                    class="w-full h-48 object-cover"
                >
            </div>
            <div class="overflow-hidden">
                <img
                    src="https://plus.unsplash.com/premium_photo-1765828956494-422d5f59dfcf?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="GKR Consulting business cards"
                    class="w-full h-48 object-cover"
                >
            </div>
            <div class="overflow-hidden">
                <img
                    src="https://plus.unsplash.com/premium_photo-1763898811153-d3cb0c6db8dd?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fHw%3D"
                    alt="Btaches Beach House open house flyer"
                    class="w-full h-48 object-cover"
                >
            </div>
            <div class="overflow-hidden">
                <img
                    src="https://plus.unsplash.com/premium_photo-1763749472714-7babc2b086bf?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Oily Treasures tote bag detail"
                    class="w-full h-48 object-cover"
                >
            </div>
        </div>

        

        {{-- ============================================================
             BRAND DELIVERABLES CARD
        ============================================================= --}}
        <div class="rounded-3xl bg-slate-50 px-6 py-10 text-center">
            <span class="text-xs font-semibold tracking-widest text-orange-500 uppercase">
                What We Deliver
            </span>
            <h2 class="mt-2 text-2xl font-bold text-slate-900">
                Brand Deliverables
            </h2>

            <div class="mt-8 grid grid-cols-2 gap-x-10 gap-y-8 text-left max-w-sm mx-auto sm:max-w-2xl sm:grid-cols-4 lg:max-w-5xl lg:grid-cols-8 ">

                @php
                    $deliverables = [
                        [
                            'title' => 'Brand Strategy',
                            'description' => 'Positioning, voice, and messaging framework',
                            'icon' => 'target',
                        ],
                        [
                            'title' => 'Brand Visuals',
                            'description' => 'Color palette, typography, and visual language',
                            'icon' => 'palette',
                        ],
                        [
                            'title' => 'Brand Logo',
                            'description' => 'Primary logo, variations, and usage guidelines',
                            'icon' => 'sparkle',
                        ],
                        [
                            'title' => 'Brand Patterns',
                            'description' => 'Custom patterns and graphic elements',
                            'icon' => 'grid',
                        ],
                        [
                            'title' => 'Packaging Design',
                            'description' => 'Product packaging and label design',
                            'icon' => 'package',
                        ],
                        [
                            'title' => 'Social Media Assets',
                            'description' => 'Templates and graphics for social platforms',
                            'icon' => 'share',
                        ],
                        [
                            'title' => 'Print Collateral',
                            'description' => 'Business cards, brochures, and stationery',
                            'icon' => 'file-text',
                        ],
                        [
                            'title' => 'Digital Assets',
                            'description' => 'Website assets, banners, and digital graphics',
                            'icon' => 'monitor',
                        ],
                    ];
                @endphp

                @foreach ($deliverables as $item)
                    <div class="flex flex-col gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-orange-100">
                            <svg class="h-5 w-5 text-orange-600" fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor">
                                @switch($item['icon'])
                                    @case('target')
                                        <circle cx="12" cy="12" r="9" stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="12" cy="12" r="5" stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="12" cy="12" r="1" stroke-linecap="round" stroke-linejoin="round" />
                                        @break

                                    @case('palette')
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c-4.97 0-9 3.694-9 8.25 0 2.9 2.1 4.5 4 4.5.83 0 1-.5 1-1s-.3-1-.3-2c0-1.1 1-2 2.3-2h2c2.76 0 5-2.015 5-4.5C17 5.694 15.03 3 12 3Z" />
                                        <circle cx="8.5" cy="10.5" r=".75" fill="currentColor" stroke="none" />
                                        <circle cx="12" cy="8" r=".75" fill="currentColor" stroke="none" />
                                        <circle cx="15" cy="10.5" r=".75" fill="currentColor" stroke="none" />
                                        @break

                                    @case('sparkle')
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v4M12 17v4M4 12h4M16 12h4M6.5 6.5l2.5 2.5M15 15l2.5 2.5M17.5 6.5 15 9M9 15l-2.5 2.5" />
                                        @break

                                    @case('grid')
                                        <rect x="4" y="4" width="6" height="6" rx="1" stroke-linecap="round" stroke-linejoin="round" />
                                        <rect x="14" y="4" width="6" height="6" rx="1" stroke-linecap="round" stroke-linejoin="round" />
                                        <rect x="4" y="14" width="6" height="6" rx="1" stroke-linecap="round" stroke-linejoin="round" />
                                        <rect x="14" y="14" width="6" height="6" rx="1" stroke-linecap="round" stroke-linejoin="round" />
                                        @break

                                    @case('package')
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.5 12 4 3 8.5 12 13l9-4.5Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.5V16l9 4.5 9-4.5V8.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 13v7.5" />
                                        @break

                                    @case('share')
                                        <circle cx="6" cy="12" r="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="17" cy="6" r="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="17" cy="18" r="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10.8 15 7M8 13.2l7 3.8" />
                                        @break

                                    @case('file-text')
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 3.5h7l4 4V20a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4.5a1 1 0 0 1 1-1Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6M9 15.5h6M9 8.5h3" />
                                        @break

                                    @case('monitor')
                                        <rect x="3" y="4.5" width="18" height="12" rx="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 20.5h7M12 16.5v4" />
                                        @break
                                @endswitch
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-slate-900">{{ $item['title'] }}</p>
                            <p class="mt-0.5 text-xs leading-snug text-slate-500">{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>

</div>

    
</x-layouts::site> 