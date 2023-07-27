<div class="grid grid-cols-3">
  <main class="col-span-2">
    <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
      <h1 class="text-base font-semibold leading-7 text-white">Logs</h1>

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

    <!-- Deployment list -->
    <ul
      class="divide-y divide-white/5"
      role="list"
    >
      @dump($models[0]->toArray())
      @loop($models as $log)
        <li class="relative flex items-center space-x-4 px-4 py-4 sm:px-6 lg:px-8">
          <div class="min-w-0 flex-auto">
            <div class="flex items-center gap-x-3">
              <div class="flex-none rounded-full bg-gray-100/10 p-1 text-gray-500">
                <div class="h-2 w-2 rounded-full bg-current"></div>
              </div>
              <h2 class="min-w-0 text-sm font-semibold leading-6 text-white">
                <a
                  class="flex gap-x-2"
                  href="#"
                >

                  <span class="truncate">Planetaria</span>
                  <span class="text-gray-400">/</span>
                  <span class="whitespace-nowrap">ios-app</span>
                  <span class="absolute inset-0"></span>
                </a>
              </h2>
            </div>
            <div class="mt-3 flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
              <p class="truncate">Deploys from GitHub</p>
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
              <p class="whitespace-nowrap">Initiated 1m 32s ago</p>
            </div>
          </div>
          <div
            class="flex-none rounded-full bg-gray-400/10 px-2 py-1 text-xs font-medium text-gray-400 ring-1 ring-inset ring-gray-400/20"
          >Preview</div>
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
        </li>
      @endloop
    </ul>
  </main>

  <!-- Activity feed -->
  <aside class="col-span-1 bg-black/10 lg:border-l lg:border-white/5">
    <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
      <h2 class="text-base font-semibold leading-7 text-white">Activity feed</h2>
      <a
        class="text-sm font-semibold leading-6 text-indigo-400"
        href="#"
      >View all</a>
    </header>
    <ul
      class="divide-y divide-white/5"
      role="list"
    >
      @loop($models as $log)
        <li class="px-4 py-4 sm:px-6 lg:px-8">
          <div class="flex items-center gap-x-3">
            <img
              class="h-6 w-6 flex-none rounded-full bg-gray-800"
              src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
              alt=""
            >
            <h3 class="flex-auto truncate text-sm font-semibold leading-6 text-white">Michael Foster</h3>
            <time
              class="flex-none text-xs text-gray-600"
              datetime="2023-01-23T11:00"
            >1h</time>
          </div>
          <p class="mt-3 truncate text-sm text-gray-500">Pushed to <span class="text-gray-400">ios-app</span> (<span
              class="font-mono text-gray-400"
            >2d89f0c8</span> on <span class="text-gray-400">main</span>)</p>
        </li>
      @endloop
    </ul>
  </aside>
</div>
