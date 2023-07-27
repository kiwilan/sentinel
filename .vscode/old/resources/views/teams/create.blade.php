<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ __('Create Team') }}
    </h2>
  </x-slot>

  <div>
    <div class="main-container py-10">
      @livewire('teams.create-team-form')
    </div>
  </div>
</x-app-layout>
