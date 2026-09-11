@props([
    'planName',
    'price',
    'features' => [],
    'isFeatured' => false,
    'ctaText' => 'Subscribe',
])

@php
    $cardClasses = $isFeatured
        ? 'relative z-10 border-2 border-amber-700 bg-white shadow-xl shadow-amber-900/10 lg:scale-[1.03]'
        : 'border border-stone-200 bg-white shadow-sm';
@endphp

<article class="{{ $cardClasses }} flex h-full flex-col rounded-2xl p-7 transition hover:-translate-y-1 hover:shadow-lg sm:p-8">
    @if ($isFeatured)
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-amber-700 px-4 py-1 text-xs font-semibold uppercase tracking-wider text-white">Most Popular</span>
    @endif

    <div>
        <h3 class="text-xl font-semibold text-stone-900">{{ $planName }}</h3>
        <p class="mt-5 flex items-baseline gap-1 text-stone-900">
            <span class="text-5xl font-semibold tracking-tight">{{ $price }}</span>
            <span class="text-sm text-stone-500">/ month</span>
        </p>
    </div>

    <ul class="mt-8 space-y-4 border-t border-stone-200 pt-7">
        @foreach ($features as $feature)
            <li class="flex gap-3 text-sm leading-6 text-stone-600">
                <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-amber-100 text-xs font-bold text-amber-700" aria-hidden="true">&#10003;</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <div class="mt-auto pt-8">
        @if (isset($cta))
            {{ $cta }}
        @else
            <x-button href="#get-started" variant="{{ $isFeatured ? 'primary' : 'outline' }}" class="w-full">{{ $ctaText }}</x-button>
        @endif
    </div>
</article>
