<div class="space-y-4 md:grid md:grid-cols-3 md:gap-x-4 md:space-y-0">
  <main class="col-span-2 rounded-md border border-gray-100 dark:border-gray-800">
    <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
      <h1 class="text-base font-semibold leading-7 text-white">
        Logs
      </h1>

      <x-dropdown>
        <x-slot name="trigger">
          <button class="flex items-center space-x-1 rounded-md px-2 py-1.5 hover:bg-gray-100 dark:hover:bg-gray-800">
            <div>Sort by</div>
            <x-icon-dropdown class="h-5 w-5 text-gray-500" />
          </button>
        </x-slot>
        <x-slot name="content">
          <div>
            <!-- Active: "bg-gray-50", Not Active: "" -->
            <a
              class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-100 dark:text-gray-100 dark:hover:bg-gray-800"
              id="sort-menu-item-0"
              href="#"
              role="menuitem"
              tabindex="-1"
            >
              Name
            </a>
          </div>
        </x-slot>
      </x-dropdown>
    </header>

    <ul
      class="divide-y divide-white/5"
      role="list"
      x-data="{
          init() {
                  setInterval(() => {
                      this.fetchModels();
                  }, 5000);
              },
              fetchModels() {
                  this.$wire.$call('fetch')
              }
      }"
    >
      @loop($models as $log)
        <li class="relative px-4 py-4 hover:bg-primary-900/30 sm:px-6 lg:px-8">
          <a
            class="absolute inset-0 z-10"
            href="{{ route('logs.show', [
                'project_slug' => $project->slug,
                'log_id' => $log->id,
            ]) }}"
          ></a>
          <div class="flex items-center space-x-4">
            <div class="min-w-0 flex-auto">
              <div class="flex items-center gap-x-3">
                <span class="relative flex h-2 w-2">
                  <span
                    class="{{ $log->is_read ? 'bg-gray-400' : 'bg-green-400 animate-ping' }} absolute inline-flex h-full w-full rounded-full opacity-75"
                  ></span>
                  <span
                    class="{{ $log->is_read ? 'bg-gray-400' : 'bg-green-500' }} relative inline-flex h-2 w-2 rounded-full"
                  ></span>
                </span>
                <h2 class="min-w-0 text-sm font-semibold leading-6 text-white">
                  <a
                    class="flex gap-x-2"
                    href="#"
                  >
                    <span class="truncate">{{ $log->message }}</span>
                  </a>
                </h2>
              </div>
              <p class="text-gray-medium mt-1 text-sm">
                {{ $log->vendor }}
              </p>
              <div class="mt-3 flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
                <p class="truncate">{{ $log->datetime }}</p>
                <svg
                  class="h-0.5 w-0.5 flex-none fill-gray-300"
                  viewBox="0 0 2 2"
                >
                  <circle
                    cx="1"
                    cy="1"
                    r="1"
                  />
                </svg>
                <p class="whitespace-nowrap">{{ $log->from_datetime }}</p>
              </div>
            </div>
            <div
              class="flex-none rounded-full bg-gray-400/10 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-gray-400/20"
            >
              {{ $log->env }}
            </div>
            <svg
              class="h-5 w-5 flex-none text-gray-400"
              aria-hidden="true"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                clip-rule="evenodd"
              />
            </svg>
          </div>
        </li>
      @endloop
    </ul>
  </main>
  <livewire:log.latest />
</div>
