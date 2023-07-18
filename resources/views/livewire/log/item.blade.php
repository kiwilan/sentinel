@php
  $cardClass = 'bg-white overflow-hidden shadow-xl sm:rounded-lg';
  $reportBoxClass = 'border-t border-gray-100 px-4 py-6 sm:col-span-2 sm:px-0';
  $dtClass = 'font-medium leading-6 text-gray-900';
  $ddClass = 'mt-1 leading-6 text-gray-700 sm:mt-2';
@endphp

<div class="space-y-5">
  <div class="overflow-hidden bg-white p-6 shadow sm:rounded-lg">
    <div class="flex justify-between px-4 sm:px-0">
      <h3 class="text-base font-semibold leading-7 text-gray-900">
        {{ $log->date_time }}
      </h3>
      <div>
        <span class="font-mono">{{ $log->url }}</span> (<span class="font-mono">{{ $log->method }}</span>)
      </div>
      <div class="{{ $log->is_production ? 'text-red-600' : '' }} text-sm">
        Environment: <span class="font-mono">{{ $log->env }}</span>
      </div>
    </div>
    <div class="mt-4">
      @if ($log->report)
        <dl class="grid grid-cols-1 sm:grid-cols-2">
          <div class="border-t border-gray-100 px-4 py-6 sm:col-span-2 sm:px-0">
            <dt class="{{ $dtClass }}">
              Error
            </dt>
            <dd class="{{ $ddClass }}">
              <div>
                <span class="rounded-md bg-gray-100 p-1 font-mono">{{ $log->report->message }}</span>
                (error code: <span class="font-mono">{{ $log->report->code }}</span>)
              </div>
              <div class="mt-2">
                In file: <span class="rounded-md bg-gray-100 p-1 font-mono">{{ $log->report->file }}</span> (line:
                {{ $log->report->line }})
              </div>
            </dd>
          </div>

          <div class="{{ $reportBoxClass }}">
            <dt class="{{ $dtClass }}">
              IP address
            </dt>
            <dd class="{{ $ddClass }}">
              <div>{{ $log->ip }}</div>
              <div>{{ $log->user_agent }}</div>
            </dd>
          </div>
        </dl>
      @endif
    </div>
  </div>


  <div class="mx-auto space-y-3">
    @if ($log->report && $log->report->traces)
      <x-accordion
        title="Trace"
        opened
      >
        <div class="w-full overflow-auto rounded-md border-2">
          <table class="min-w-full divide-y divide-gray-300 overflow-auto">
            <tbody class="divide-y-2 bg-white">
              @foreach ($log->report->traces as $key => $trace)
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 font-medium text-gray-900 sm:pl-3">
                    <div class="font-mono font-semibold">
                      #{{ $key }}
                    </div>
                    <div class="mt-3">
                      Line <span class="font-mono">{{ $trace->line }}</span> on <span
                        class="rounded-md bg-gray-100 p-1 font-mono"
                      >{{ $trace->function }}</span>
                    </div>
                    <div class="mt-2 max-w-max rounded-md bg-gray-100 p-1 font-mono">
                      {{ $trace->file }}
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </x-accordion>
    @endif

    @if ($log->report && is_array($log->report->trace_string))
      <x-accordion title="Trace (string)">
        <div class="divide-y-2 overflow-auto rounded-md border-2">
          @foreach ($log->report->trace_string as $trace)
            <div class="p-3 font-mono">
              {{ $trace }}
            </div>
          @endforeach
        </div>
      </x-accordion>
    @endif
  </div>
</div>
