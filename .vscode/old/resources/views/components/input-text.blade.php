@props(['hint' => null, 'helperText' => null, 'value' => null])

<div class="{{ $attributes->get('class') }}">
  <div class="flex justify-between">
    <x-label
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
  <x-input
    class="mt-1 block w-full"
    id="{{ $attributes->get('name') }}"
    name="{{ $attributes->get('name') }}"
    type="{{ $attributes->get('type') }}"
    autocomplete="{{ $attributes->get('autocomplete') }}"
    placeholder="{{ $attributes->get('placeholder') }}"
    wire:model="{{ $attributes->get('wire:model') }}"
    :value="$value"
    :required="$attributes->get('required')"
    :multiline="$attributes->get('multiline')"
  />
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