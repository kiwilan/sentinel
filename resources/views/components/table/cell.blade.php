{{-- @php
  $defaultClass = 'whitespace-nowrap px-3 py-4 text-sm text-gray-500 dark:text-gray-300';
  $mainClass = 'pl-4 pr-3 font-medium text-gray-900 sm:pl-3 dark:text-gray-100';
  $codeClass = 'p-1 bg-gray-100 rounded-md font-mono w-max font-semibold dark:bg-gray-800';

  $class = '';
  $subClass = '';
  if ($primary) {
      $class = $mainClass;
  } else {
      $class = $defaultClass;
  }

  if ($code) {
      $subClass = " $codeClass";
  }

  if ($mono) {
      $subClass .= ' font-mono';
  }

  if ($full) {
      $subClass .= ' whitespace-nowrap';
  }

@endphp

<td
  class="{{ $class }} {{ $responsive }}"
  colspan="{{ $colspan }}"
>
  <div
    class="{{ $subClass }}"
    x-data
  >
    @if ($tooltip)
      <x-tooltip
        :text="$tooltip"
        :limit="$tooltipLimit"
      >
        <div class="flex items-start space-x-1">
          <div>{{ $slot }}</div>
          <x-icon-info class="h-3 w-3" />
        </div>
      </x-tooltip>
    @else
      {{ $slot }}
    @endif
  </div>
</td> --}}

<td
  {{ $attributes->merge([
      'class' => 'p-4',
  ]) }}
  colspan="{{ $colspan }}"
>
  @isset($boolean)
    <div class="flex justify-center">
      @if ($boolean)
        <x-icon-check class="h-5 w-5 text-green-400" />
      @else
        <x-icon-x class="h-5 w-5 text-red-400" />
      @endif
    </div>
  @else
    {{ $slot }}
  @endisset
</td>
