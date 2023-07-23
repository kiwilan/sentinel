@props(['label' => '', 'name' => 'select', 'subtitle' => '', 'placeholder' => null, 'options' => [], 'default' => null])

@php
  if ($placeholder) {
      $temp = [];
      foreach ($options as $key => $value) {
          $temp[$key] = [
              'name' => $value,
              'attrs' => '',
          ];
      }
      $options = $temp;
  
      array_unshift($options, [
          'name' => $placeholder,
          'attrs' => 'disabled selected hidden',
      ]);
  }
@endphp

<div>
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
    class="mt-2 block w-full rounded-md border-0 py-2 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 dark:bg-gray-900 dark:text-white dark:ring-gray-700 sm:leading-6"
    id="{{ $name }}"
    name="{{ $name }}"
    required="{{ $attributes->get('required') }}"
    wire:model="{{ $attributes->get('wire:model') }}"
  >
    @loop($options as $value => $item)
      <option
        value="{{ $value }}"
        {{ $item['attrs'] }}
      >{{ $item['name'] }}</option>
    @endloop
  </select>
</div>
