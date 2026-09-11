@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
])

@php
    $baseClasses = 'inline-flex min-h-11 items-center justify-center gap-2 rounded-xl font-semibold transition duration-200 ease-out hover:-translate-y-0.5 active:translate-y-0 active:scale-[0.98] focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-700 focus-visible:ring-offset-2';
    $variantClasses = [
        'primary' => 'bg-amber-700 text-white hover:bg-amber-800',
        'secondary' => 'bg-stone-100 text-stone-800 hover:bg-stone-200',
        'outline' => 'border border-stone-300 bg-transparent text-stone-700 hover:border-amber-700 hover:bg-amber-50 hover:text-amber-800',
    ][$variant] ?? 'bg-amber-700 text-white hover:bg-amber-800';
    $sizeClasses = [
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-5 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ][$size] ?? 'px-5 py-2.5 text-sm';
    $classes = "$baseClasses $variantClasses $sizeClasses";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button type="{{ $attributes->get('type', 'button') }}" {{ $attributes->except('type')->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
