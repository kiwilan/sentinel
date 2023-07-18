<div
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
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-800">
              <tr>
                @foreach ($head as $item)
                  <th
                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-100"
                    scope="col"
                  >
                    {{ $item }}
                  </th>
                @endforeach
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
              {{ $slot }}
              @if ($empty)
                <tr>
                  <x-data.cell>
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
</div>
