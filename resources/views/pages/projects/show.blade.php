<x-app>
  <x-slot name="top">
    <livewire:project.header :project="$project" />
  </x-slot>
  <div class="space-y-4 md:grid md:grid-cols-3 md:gap-x-4 md:space-y-0">
    <livewire:log.listing :project="$project" />
    <livewire:log.latest />
  </div>
</x-app>
