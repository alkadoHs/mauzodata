@props(["url", "active"])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-1.5 block bg-teal-100 dark:bg-gray-800 dark:hover:bg-gray-700 p-1 rounded transition-all duration-150'
            : 'flex items-center gap-1.5 block p-1 rounded transition-all duration-150';
@endphp

<a href="{{ $url }}" 
   {{ $attributes->merge(['class' => $classes])}}
   wire:navigate
   >
    <div {{ $attributes->merge(["class" => "bg-gray-500/10 size-7 flex items-center text-sm rounded-lg border dark:border-gray-700 p-0.5 text-gray-500 dark:text-white"])}}
    >
        {{ $icon }}
    </div>
    <span class="text-gray-500 text-sm inline-block size-full {{ $active ? 'dark:text-teal-400' : 'dark:text-gray-400 hover:text-teal-500'}}">{{ $slot }}</span>
</a>
