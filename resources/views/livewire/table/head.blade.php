<thead class="border-b border-black/10 text-sm leading-6 text-black dark:border-white/10 dark:text-white">
  <tr>
    @loop($headers as $field => $name)
      <th
        class="pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8"
        scope="col"
      >
        <button
          class="flex w-full items-center space-x-1 py-2"
          type="button"
          wire:click="sort('{{ $field }}')"
        >
          <div>{{ $name }}</div>
          <x-icon-chevron-down @class([
              'inline-block h-3 w-3 transition-transform',
              'rotate-180' =>
                  str_contains($reverse, $field) && str_contains($reverse, '-'),
          ]) />
        </button>
      </th>
    @endloop
  </tr>
</thead>
