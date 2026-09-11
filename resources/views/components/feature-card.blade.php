@props([
    'icon' => 'sparkles',
    'title',
    'description',
])

<article {{ $attributes->merge(['class' => 'group rounded-2xl border border-stone-200 bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-lg']) }}>
    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-100 text-amber-700 transition group-hover:bg-amber-700 group-hover:text-white">
        @if (isset($iconSlot) && $iconSlot->isNotEmpty())
            {{ $iconSlot }}
        @else
            @switch($icon)
                @case('calendar')
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3.75 9.75h16.5M5.25 5.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25A2.25 2.25 0 0 1 18.75 21H5.25A2.25 2.25 0 0 1 3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25Z" /></svg>
                    @break
                @case('users')
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.4 9.4 0 0 0 2.25-.272M15 19.128v-.873a4.5 4.5 0 0 1 4.5-4.5h.375a2.625 2.625 0 0 1 2.625 2.625v.75M15 19.128v.873a4.5 4.5 0 0 1-4.5 4.5H6.75a4.5 4.5 0 0 1-4.5-4.5v-.873a4.5 4.5 0 0 1 4.5-4.5h.375a4.5 4.5 0 0 1 4.5 4.5v.873M9.75 8.25a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0ZM15.75 8.25a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0Z" /></svg>
                    @break
                @case('chart')
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125 8.25 7.875l3.75 3.75 6.75-6.75M18.75 4.875H21v2.25M21 4.875v4.5" /></svg>
                    @break
                @case('chat')
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3h5.25m7.5-3.75a6.75 6.75 0 0 1-6.75 6.75H9.75L5.25 18v-3.75A6.75 6.75 0 0 1 12 7.5h.75a6.75 6.75 0 0 1 7.5 0Z" /></svg>
                    @break
                @case('shield')
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m6.75 2.25c0 5.25-3.75 8.25-9.75 10.5C6.75 20.25 3 17.25 3 12V5.25L12 2.25l9 3V12Z" /></svg>
                    @break
                @default
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-6 w-6" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m9.813 15.904 2.186-2.186m0 0 2.186-2.186m-2.186 2.186 2.186 2.186m-2.186-2.186-2.186-2.186M12 2.25c.621 0 1.125.504 1.125 1.125v.75c0 .621-.504 1.125-1.125 1.125s-1.125-.504-1.125-1.125v-.75C10.875 2.754 11.379 2.25 12 2.25Z" /></svg>
            @endswitch
        @endif
    </div>
    <h3 class="mt-6 text-xl font-semibold text-stone-900">{{ $title }}</h3>
    <p class="mt-3 leading-7 text-stone-600">{{ $description }}</p>
</article>
