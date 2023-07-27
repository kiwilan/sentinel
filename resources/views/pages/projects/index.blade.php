<x-app>
  <div class="flex items-center justify-between">
    <h2 class="text-base font-semibold leading-7 text-white">Latest activity</h2>
    <div class="flex items-center space-x-3">
      <button
        x-data
        @click="$dispatch('show-full')"
      >
        show full
      </button>
      <x-button href="{{ route('projects.create') }}">
        Create
      </x-button>
      <livewire:project.import />
    </div>
  </div>
  <x-slot name="bottom">
    {{-- <x-layout.main.header /> --}}
    <livewire:project.table />
  </x-slot>
</x-app>
