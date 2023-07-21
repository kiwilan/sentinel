<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="main-container">
      <div class="overflow-hidden bg-white shadow dark:bg-gray-800 sm:rounded-lg">
        <livewire:project.table />
        {{-- <livewire:project.listing /> --}}
      </div>
    </div>
  </div>
</x-app-layout>
