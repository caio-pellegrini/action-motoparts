@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-verde-escuro focus:border-verde-escuro dark:focus:border-indigo-600 focus:ring-verde-escuro dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
