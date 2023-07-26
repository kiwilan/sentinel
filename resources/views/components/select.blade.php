@props(['label' => '', 'name' => 'select', 'subtitle' => '', 'placeholder' => null, 'options' => [], 'default' => null])

@php
  $temp = [];
  foreach ($options as $key => $value) {
      $temp[$key] = [
          'name' => $value,
          'value' => $key,
          'attrs' => '',
      ];
  }
  $options = $temp;
  
  if ($placeholder && !$default) {
      $options['placeholder'] = [
          'name' => $placeholder,
          'value' => '',
          'attrs' => 'selected disabled hidden',
      ];
  }
@endphp

<div
  class="{{ $attributes->get('class') }}"
  x-data="{
      init() {
          let defaultValue = '{{ $default }}'
          let placeholderValue = '{{ $placeholder }}'
          let selectEl = document.getElementById('{{ $name }}')
  
          if (placeholderValue) {
              selectEl.value = ''
          }
  
          if (defaultValue) {
              selectEl.value = defaultValue
          }
      }
  }"
>
  <x-label
    for="{{ $name }}"
    value="{{ $label }}"
    :required="$attributes->get('required')"
  />
  @if ($subtitle)
    <p class="text-sm text-gray-500">
      {{ $subtitle }}
    </p>
  @endif
  <select
    class="mt-2 block w-full rounded-md border-0 py-2 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-primary-600 dark:bg-gray-800 dark:text-white dark:ring-gray-700 sm:leading-6"
    id="{{ $name }}"
    name="{{ $name }}"
    required
    autocomplete="off"
    wire:model="{{ $attributes->get('wire:model') }}"
  >
    @loop($options as $item)
      <option
        value="{{ $item['value'] }}"
        {{ $item['attrs'] }}
      >{{ $item['name'] }}</option>
    @endloop
  </select>
</div>
