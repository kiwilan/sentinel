<x-app-layout>
  <x-slot name="top">
    <x-item-head />
  </x-slot>
  <x-slot name="bottom">
    <livewire:project.item :project="$project" />
    <livewire:log.table :project="$project" />
  </x-slot>
</x-app-layout>
