<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="pt-6">
    <div class="main-container">
      <livewire:dashboard.card />
    </div>
  </div>
</x-app-layout>
