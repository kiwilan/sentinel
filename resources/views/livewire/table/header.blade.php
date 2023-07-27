<?php

use function Livewire\Volt\on;
use function Livewire\Volt\state;

state([
    'headers' => [],
    'reversed' => false,
    'reverse' => '',
]);

on([
    'headReverse' => function ($field) {
        state('reverse', $field);
    },
]);

// $sort = fn($field) => $this->dispatch('table-sort', $field);
$reverse = fn ($field) => state('reverse', $field);
?>

<thead class="border-b border-black/10 text-sm leading-6 text-black dark:border-white/10 dark:text-white">
  <tr>
    @loop($headers as $field => $name)
      <th
        class="p-4 font-semibold"
        scope="col"
        @click="Livewire.dispatch('table-sort', ['{{ $field }}'])"
      >
        {{ $name }}
        {{-- <x-icon-chevron-down @class([
            'inline-block h-3 w-3 transition-transform',
            'rotate-180' =>
                str_contains($reverse, $field) && str_contains($reverse, '-'),
        ]) /> --}}
      </th>
    @endloop
  </tr>
</thead>
