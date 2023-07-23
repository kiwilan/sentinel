<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="pt-6">
    <div class="main-container">
      <div>
        <h2 class="text-sm font-medium text-gray-500">Pinned Projects</h2>
        <ul
          class="mt-3 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-4"
          role="list"
        >
          <livewire:dashboard.card />
        </ul>
      </div>
    </div>
  </div>
</x-app-layout>
