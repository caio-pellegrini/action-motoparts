@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-4 border-gray-400 bg-gray-400 text-sm font-medium leading-5 text-black focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-4 border-transparent hover:bg-gray-200 text-sm font-medium leading-5 text-black hover:text-verde-escuro hover:border-gray-200 focus:outline-none focus:text-gray focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
    