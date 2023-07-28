<?php

use function Livewire\Volt\{state, mount};

state(['models']);

$fetch = function () {
    $this->models = \App\Models\Log::with('project')
        ->orderBy('datetime', 'desc')
        ->take(25)
        ->get();
};

mount(function () {
    $this->fetch();
});

?>

<aside
  class="col-span-1 h-fit rounded-md border border-gray-100 bg-black/10 dark:border-gray-800 lg:border-l lg:border-white/5"
  x-data="{
      init() {
          setInterval(() => {
              this.$wire.$call('fetch')
          }, 5000);
      },
  }"
>
  <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-7 lg:px-8">
    <h2 class="text-base font-semibold leading-7 text-white">
      Latest logs
    </h2>
  </header>
  <ul
    class="divide-y divide-white/5"
    role="list"
  >
    @loop($models as $log)
      <li class="relative px-4 py-4 hover:bg-primary-900/30 sm:px-6 lg:px-8">
        <a
          class="absolute inset-0 z-10"
          href="{{ route('logs.show', [
              'project_slug' => $log->project->slug,
              'log_id' => $log->id,
          ]) }}"
        ></a>
        <div class="flex items-center gap-x-3">
          <h3 class="flex-auto truncate text-sm font-semibold leading-6 text-white">
            {{ $log->message }}
          </h3>
          <time
            class="flex-none text-xs text-gray-600"
            datetime="{{ $log->datetime }}"
          >
            {{ $log->from_datetime }}
          </time>
        </div>
        <div class="flex items-center justify-between text-sm text-gray-500">
          <p class="mt-3 truncate">
            {{ $log->vendor }}
          </p>
          <p>
            {{ $log->project->name }}
          </p>
        </div>
      </li>
    @endloop
  </ul>
</aside>
