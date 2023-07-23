<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ $log->app }} / Log from {{ $log->from_date_time }}
    </h2>
  </x-slot>

  <livewire:log.item :log="$log" />
</x-app-layout>
