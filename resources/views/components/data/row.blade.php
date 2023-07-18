@php
  $defaultClass = 'whitespace-nowrap px-3 py-4 text-sm text-gray-500';
  $mainClass = 'pl-4 pr-3 font-medium text-gray-900 sm:pl-3';
@endphp

<td class="{{ $defaultClass }}">
  {{ $slot }}
</td>
