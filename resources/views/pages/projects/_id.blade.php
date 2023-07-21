<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
      {{ $project->name }} project
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="main-container space-y-5">
      <livewire:project.item :project="$project" />
      <div class="overflow-hidden bg-white shadow dark:bg-gray-800 sm:rounded-lg">
        <livewire:log.table />
      </div>
    </div>
  </div>
</x-app-layout>
