<x-app-layout>
  <div class="py-12">
    <div class="main-container space-y-5">
      <livewire:project.item :project="$project" />
      <div class="overflow-hidden bg-white shadow dark:bg-gray-800 sm:rounded-lg">
        <livewire:log.table />
      </div>
    </div>
  </div>
</x-app-layout>
