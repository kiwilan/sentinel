@props(['headers' => [], 'items' => []])

<div class="overflow-auto">
  <table class="mt-6 w-full whitespace-nowrap text-left">
    <livewire:table.header :headers="$headers" />
    <tbody class="divide-y divide-white/5">
      @if (count($items) === 0)
        <x-table.row>
          <x-table.cell colspan="{{ count($headers) }}">
            <div class="text-center italic text-gray-500 dark:text-gray-400">
              No data
            </div>
          </x-table.cell>
        </x-table.row>
      @else
        {{ $slot }}
      @endif
    </tbody>
  </table>
</div>
