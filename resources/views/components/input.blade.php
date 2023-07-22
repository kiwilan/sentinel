@props(['disabled' => false, 'multiline' => false])

@php
  $class = 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 rounded-md shadow-sm';
@endphp

@if ($multiline)
  <textarea
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' => "{$class} h-32",
    ]) !!}
  ></textarea>
@else
  <input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' => $class,
    ]) !!}
  >
@endif
