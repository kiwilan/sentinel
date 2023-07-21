@php
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

<td class="{{ $class }} {{ $responsive }}">
  <div
    class="{{ $subClass }}"
    x-data
  >
    @if ($tooltip)
      <x-tooltip
        :text="$slot"
        :limit="$tooltipLimit"
      />
    @else
      {{ $slot }}
    @endif
  </div>
</td>
