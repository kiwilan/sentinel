@php
  $thClass = 'px-3 py-3.5 text-left text-sm font-semibold text-gray-900';
  $tsClass = 'whitespace-nowrap px-3 py-4 text-sm text-gray-500';
@endphp

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
      <h1 class="text-base font-semibold leading-6 text-gray-900">
        Logs
      </h1>
      <p class="mt-2 text-sm text-gray-700">
        A list of all the users in your account including their name, title, email
        and role.
      </p>
    </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                @foreach ($head as $item)
                  <th
                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                    scope="col"
                  >
                    {{ $item }}
                  </th>
                @endforeach
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
              @foreach ($models as $log)
                <tr class="even:bg-gray-50">
                  <td class="{{ $tsClass }} pl-4 pr-3 font-medium text-gray-900 sm:pl-3">
                    {{ $log->date_time }}
                  </td>
                  <td class="{{ $tsClass }} {{ $log->is_production ? 'text-red-600' : '' }}">
                    {{ $log->env }}
                  </td>
                  <td class="{{ $tsClass }}">
                    @if ($log->report)
                      @php
                        $message = "{$log->report->message} (line {$log->report->line})";
                      @endphp
                      <x-tooltip
                        :text="$message"
                        :limit="100"
                      />
                    @endif
                  </td>
                  <td class="{{ $tsClass }}">
                    @php
                      $url = "{$log->url} ({$log->method})";
                    @endphp
                    <x-tooltip :text="$url" />
                  </td>
                  <td class="{{ $tsClass }} space-x-1">
                    <a
                      class="rounded-md p-2 text-indigo-600 hover:bg-indigo-600 hover:bg-opacity-10 hover:text-indigo-900"
                      href="{{ route('logs.show', $log->id) }}"
                    >
                      Show
                    </a>
                    <button
                      class="rounded-md p-2 text-red-600 hover:bg-red-600 hover:bg-opacity-10 hover:text-red-600"
                      wire:click="delete({{ $log->id }})"
                    >
                      Delete
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
