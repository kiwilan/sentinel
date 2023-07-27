<x-app>
  <div class="flex items-center justify-between">
    <h2 class="text-base font-semibold leading-7 text-white">Latest activity</h2>
    <x-button href="{{ route('projects.create') }}">
      Create
    </x-button>
  </div>
  <x-slot name="bottom">
    {{-- <x-layout.main.header /> --}}
    <livewire:project.table />
  </x-slot>
</x-app>
