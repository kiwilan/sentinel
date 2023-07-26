<x-app-layout>
  <div class="border-t border-white/10 pt-6">
    <x-breadcrumb />
    <div class="mt-5">
      <h2 class="px-4 text-base font-semibold leading-7 text-white sm:px-6 lg:px-8">Latest activity</h2>
      <x-data.table />
    </div>
  </div>
  {{-- <div class="py-12">
    <div class="main-container">
      <div class="overflow-hidden bg-white shadow dark:bg-gray-800 sm:rounded-lg">
        <livewire:project.table />
        <livewire:project.listing />
      </div>
    </div>
  </div> --}}
</x-app-layout>
