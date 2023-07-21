<div class="{{ $attributes->get('class') }}">
  <x-label
    for="{{ $attributes->get('name') }}"
    value="{{ $attributes->get('label') }}"
    :required="$attributes->get('required')"
  />
  @if ($slot)
    <p class="text-sm text-gray-500">
      {{ $slot }}
    </p>
  @endif
  <x-input
    class="mt-1 block w-full"
    id="{{ $attributes->get('name') }}"
    name="{{ $attributes->get('name') }}"
    type="{{ $attributes->get('type') }}"
    placeholder="{{ $attributes->get('placeholder') }}"
    wire:model="{{ $attributes->get('wire:model') }}"
    :required="$attributes->get('required')"
  />
</div>
