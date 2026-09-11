@props([
    'photo',
    'name',
    'position',
    'review',
])

<article {{ $attributes->merge(['class' => 'flex h-full flex-col rounded-2xl border border-stone-200 bg-white p-7 shadow-sm']) }}>
    <div class="flex items-center gap-4">
        <img src="{{ $photo }}" alt="{{ $name }}" class="h-14 w-14 rounded-full object-cover ring-4 ring-amber-50" />
        <div>
            <h3 class="font-semibold text-stone-900">{{ $name }}</h3>
            <p class="mt-1 text-sm text-stone-500">{{ $position }}</p>
        </div>
    </div>

    <blockquote class="relative mt-7 flex-1 pl-5 text-lg leading-8 text-stone-700">
        <span class="absolute -left-1 -top-2 font-serif text-5xl leading-none text-amber-300" aria-hidden="true">&ldquo;</span>
        <p>{{ $review }}</p>
        <span class="mt-2 block text-right font-serif text-4xl leading-none text-amber-300" aria-hidden="true">&rdquo;</span>
    </blockquote>
</article>
