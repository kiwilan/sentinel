@props(['hint' => null, 'helperText' => null, 'value' => null, 'disabled' => false, 'multiline' => false, 'required' => false])

@php
  $class = 'border-gray-300 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 focus:border-primary-500 dark:focus:border-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 rounded-md shadow-sm';
@endphp

<div class="{{ $attributes->get('class') }}">
  <div class="flex justify-between">
    <x-field.label
      for="{{ $attributes->get('name') }}"
      value="{{ $attributes->get('label') }}"
      :required="$attributes->get('required')"
    />
    @if ($hint)
      <div class="text-gray-medium text-sm">
        {{ $hint }}
      </div>
    @endif
  </div>
  @if ($multiline)
    <textarea
      id="{{ $attributes->get('name') }}"
      value="{{ $value }}"
      {{ $disabled ? 'disabled' : '' }}
      {!! $attributes->merge([
          'class' => "{$class} h-32 mt-1 block w-full",
      ]) !!}
      {{ $required ? 'required' : '' }}
    ></textarea>
  @else
    <input
      id="{{ $attributes->get('name') }}"
      value="{{ $value }}"
      {{ $disabled ? 'disabled' : '' }}
      {!! $attributes->merge([
          'class' => "{$class} mt-1 block w-full",
      ]) !!}
      {{ $required ? 'required' : '' }}
    >
  @endif
  @if ($slot)
    <div class="text-sm text-gray-500 dark:text-gray-400">
      {{ $slot }}
    </div>
  @endif
  @if ($helperText)
    <div class="text-gray-medium text-sm">
      {{ $helperText }}
    </div>
  @endif
</div>
