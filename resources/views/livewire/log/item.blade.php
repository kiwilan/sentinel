<?php

use function Livewire\Volt\{state, mount};

state(['log', 'trace']);

$selectTrace = function (int $id) {
    $this->trace = \App\Models\Trace::find($id);
};

mount(function () {
    $this->trace = $this->log->main_trace;
    $this->log->is_read = true;
    $this->log->saveQuietly();
});

?>

@php
  $cardClass = 'bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg';
  $reportBoxClass = 'border-t border-gray-100 px-4 py-6 sm:col-span-2 sm:px-0';
  $dtClass = 'font-medium leading-6 text-gray-900';
  $ddClass = 'mt-1 leading-6 text-gray-700 sm:mt-2';
  $insightClass = 'rounded-md p-6 flex items-start space-x-1 bg-white dark:bg-gray-800 shadow';
@endphp

<div class="space-y-6 pb-12 pt-4">

  <div class="mx-auto max-w-none">
    <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 sm:rounded-lg sm:shadow">

      <div class="border-b border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
        <div class="-ml-4 -mt-4 flex flex-wrap items-center justify-between sm:flex-nowrap">
          <div class="ml-4 mt-4 w-full space-y-2">
            <div class="flex justify-between">
              <h3 class="text-base font-semibold leading-6 text-gray-900 dark:text-gray-100">
                {{ $log->datetime }} ({{ $log->from_datetime }})
              </h3>
              <div class="{{ $log->is_production ? 'text-red-600' : '' }}">
                Env. <span class="font-mono">{{ $log->env }}</span>
              </div>
            </div>
            <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
              <p>
                {{ $log->url }} ({{ $log->method }})
              </p>
            </div>
            <div class="justify-between text-gray-500 dark:text-gray-400 md:flex">
              <div class="font-mono text-sm">{{ $log->ip }}</div>
              <div class="text-xs italic">{{ $log->user_agent }}</div>
            </div>
          </div>
        </div>
      </div>

      <div class="space-y-2 p-6">
        <div class="text-sm md:flex md:space-x-3">
          <div class="font-semibold">
            @isset($log->mainTrace)
              {{ $log->mainTrace->class }}
            @endisset
          </div>
          <div class="text-gray-600 dark:text-gray-400">{{ $log->filename }}</div>
        </div>
        <div class="text-lg">
          {{ $log->message }}
        </div>
        @if ($log->code_block)
          <pre class="whitespace-pre-line rounded-md bg-gray-100 p-3">{{ $log->code_block }}</pre>
        @endif
        <div class="text-sm text-gray-600 dark:text-gray-400 md:flex md:space-x-3">
          <div>{{ $log->vendor ? $log->vendor : $log->file }} (line {{ $log->line }})</div>
          <div>
            @isset($log->mainTrace)
              {{ $log->mainTrace->function }}
            @endisset
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
    <div @class([$insightClass])>
      <x-icon-trace class="inline-block h-5 w-5" />
      <div>
        <div class="font-semibold">Trace</div>
        <div>{{ $log->traces->count() }} items</div>
      </div>
    </div>
    <div @class([$insightClass])>
      <x-icon-lock class="inline-block h-5 w-5" />
      <div>
        <div class="font-semibold">{{ $log->is_auth ? 'Authenticated' : 'Not Authenticated' }}</div>
        @if ($log->is_auth)
          <div>{{ $log->user }}</div>
        @else
          <br>
        @endif
      </div>
    </div>
    <div @class([$insightClass])>
      <x-icon-occurence class="inline-block h-5 w-5" />
      <div>
        <div class="font-semibold">Occurences</div>
        <div>{{ $log->findSameErrors()?->count() }} items</div>
      </div>
    </div>
  </div>

  <div class="mx-auto max-w-none gap-5 space-y-5 md:grid md:grid-cols-3 md:space-y-0">
    <div class="h-64 space-y-2 overflow-auto md:h-[30rem]">
      @loop($log->traces as $t)
        <div
          class="{{ $trace->id === $t->id ? 'bg-primary-100 dark:bg-primary-900/60' : 'bg-white dark:bg-gray-800 hover:bg-primary-100' }} relative w-full space-y-1 overflow-auto rounded-md p-6 shadow"
        >
          <div class="text-sm text-gray-600 dark:text-gray-400">{{ $t->class }}</div>
          <div>{{ $t->main_class }}:{{ $t->line }}</div>
          <div class="text-sm text-gray-500 dark:text-gray-300">{{ $t->function }}</div>
          <button
            class="absolute inset-0 z-10 w-full"
            wire:click="selectTrace({{ $t->id }})"
          ></button>
        </div>
      @endloop
    </div>

    <div class="col-span-2 space-y-3">
      <div class="overflow-auto rounded-md bg-white p-6 shadow dark:bg-gray-800">
        <div class="flex justify-between">
          <div class="text-sm text-gray-500 dark:text-gray-300">{{ $trace->class }}</div>
          <div class="flex gap-3">
            <div class="flex space-x-1 text-sm text-gray-500">
              <x-icon-php class="inline-block h-5 w-5 fill-gray-500 dark:text-gray-400" />
              <div>{{ $log->php_version }}</div>
            </div>
            <div class="flex space-x-1 text-sm text-gray-500">
              <x-icon-laravel class="inline-block h-5 w-5 fill-gray-500 dark:text-gray-400" />
              <div>{{ $log->laravel_version }}</div>
            </div>
          </div>
        </div>
        <div class="mt-1 space-y-3">
          <div>{{ $trace->vendor ? $trace->vendor : $trace->file }} (line {{ $trace->line }})</div>
          <div class="flex space-x-1 text-gray-500 dark:text-gray-400">
            <div>{{ $trace->filename }}</div>
            <div class="font-mono">{{ $trace->function }}</div>
            <div>on
              <span class="font-mono">{{ $trace->type }}</span>
            </div>
          </div>
          @if (!empty($trace->args))
            <pre class="overflow-auto whitespace-pre-line rounded-md bg-gray-100 p-3 dark:bg-gray-700 md:max-h-[21.2rem]">{{ $trace->args_to_string }}</pre>
          @endif
        </div>
      </div>
    </div>
  </div>

</div>
