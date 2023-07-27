<x-app>
  <x-slot name="top">
    <livewire:project.header :project="$project" />
    {{-- <x-temp.item-head
      :title="$project->name"
      subtitle="Project"
    >
      <x-slot name="left">
        logo
      </x-slot>
    </x-temp.item-head> --}}
  </x-slot>
  <livewire:log.listing :project="$project" />
  <x-slot name="bottom">
    {{-- <livewire:project.item :project="$project" /> --}}
    {{-- <livewire:log.table :project="$project" /> --}}
  </x-slot>
</x-app>
