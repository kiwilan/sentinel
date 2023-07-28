@props([])

<div class="{{ $attributes->get('class') }} flex items-center">
  <div class="order-last flex justify-between">
    <x-field.label
      for="{{ $attributes->get('name') }}"
      value="{{ $attributes->get('label') }}"
      :required="$attributes->get('required')"
    />
  </div>
  <input
    id="{{ $attributes->get('name') }}"
    type="checkbox"
    {!! $attributes->merge([
        'class' =>
            'rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-primary-600 shadow-sm focus:ring-primary-500 dark:focus:ring-primary-600 dark:focus:ring-offset-gray-800 order-first mr-2',
    ]) !!}
    {{ $attributes->get('required') ? 'required' : '' }}
    {{ $attributes->get('checked') ? 'checked' : '' }}
  >
</div>
