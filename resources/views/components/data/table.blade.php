{{-- <div
  class="px-4 py-6 sm:px-6 lg:px-8"
  x-data="{
      init() {
              setInterval(this.fetching, 5000);
          },
          fetching() {
              $wire.fetch();
          },
  }"
>
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold leading-6 text-gray-900 dark:text-gray-100">
        {{ $title }}
      </h1>
      <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">
        {{ $subtitle }}
      </p>
    </div>
    @isset($action)
      <div>
        {{ $action }}
      </div>
    @endisset
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 dark:ring-gray-700 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-600">
            <thead class="bg-gray-50 dark:bg-gray-700">
              <tr>
                @foreach ($head as $key => $name)
                  <th
                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100"
                    scope="col"
                    wire:click="sort('{{ $key }}')"
                  >
                    <div class="flex items-center space-x-1">
                      <div>{{ $name }}</div>
                      <x-icon-chevron-down @class([
                          'h-3 w-3 text-gray-700 dark:text-gray-300"',
                          'font-bold' => true,
                      ]) />
                    </div>
                  </th>
                @endforeach
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-600 dark:bg-gray-700">
              {{ $slot }}
              @if ($empty)
                <tr>
                  <x-data.cell colspan="{{ count($head) }}">
                    No data
                  </x-data.cell>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div> --}}

<table class="mt-6 w-full whitespace-nowrap text-left">
  <colgroup>
    <col class="w-full sm:w-4/12">
    <col class="lg:w-4/12">
    <col class="lg:w-2/12">
    <col class="lg:w-1/12">
    <col class="lg:w-1/12">
  </colgroup>
  <thead class="border-b border-white/10 text-sm leading-6 text-white">
    <tr>
      <th
        class="py-2 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8"
        scope="col"
      >User</th>
      <th
        class="hidden py-2 pl-0 pr-8 font-semibold sm:table-cell"
        scope="col"
      >Commit</th>
      <th
        class="py-2 pl-0 pr-4 text-right font-semibold sm:pr-8 sm:text-left lg:pr-20"
        scope="col"
      >Status</th>
      <th
        class="hidden py-2 pl-0 pr-8 font-semibold md:table-cell lg:pr-20"
        scope="col"
      >Duration</th>
      <th
        class="hidden py-2 pl-0 pr-4 text-right font-semibold sm:table-cell sm:pr-6 lg:pr-8"
        scope="col"
      >Deployed at</th>
    </tr>
  </thead>
  <tbody class="divide-y divide-white/5">
    <tr>
      <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
        <div class="flex items-center gap-x-4">
          <img
            class="h-8 w-8 rounded-full bg-gray-800"
            src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt=""
          >
          <div class="truncate text-sm font-medium leading-6 text-white">Michael Foster</div>
        </div>
      </td>
      <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
        <div class="flex gap-x-3">
          <div class="font-mono text-sm leading-6 text-gray-400">2d89f0c8</div>
          <span
            class="inline-flex items-center rounded-md bg-gray-400/10 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-gray-400/20"
          >main</span>
        </div>
      </td>
      <td class="py-4 pl-0 pr-4 text-sm leading-6 sm:pr-8 lg:pr-20">
        <div class="flex items-center justify-end gap-x-2 sm:justify-start">
          <time
            class="text-gray-400 sm:hidden"
            datetime="2023-01-23T11:00"
          >45 minutes ago</time>
          <div class="flex-none rounded-full bg-green-400/10 p-1 text-green-400">
            <div class="h-1.5 w-1.5 rounded-full bg-current"></div>
          </div>
          <div class="hidden text-white sm:block">Completed</div>
        </div>
      </td>
      <td class="hidden py-4 pl-0 pr-8 text-sm leading-6 text-gray-400 md:table-cell lg:pr-20">25s</td>
      <td class="hidden py-4 pl-0 pr-4 text-right text-sm leading-6 text-gray-400 sm:table-cell sm:pr-6 lg:pr-8">
        <time datetime="2023-01-23T11:00">45 minutes ago</time>
      </td>
    </tr>

    <!-- More items... -->
  </tbody>
</table>
