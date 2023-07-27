<div class="grid grid-cols-3">
  <main class="col-span-2">
    <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
      <h1 class="text-base font-semibold leading-7 text-white">Deployments</h1>

      <!-- Sort dropdown -->
      <div class="relative">
        <button
          class="flex items-center gap-x-1 text-sm font-medium leading-6 text-white"
          id="sort-menu-button"
          type="button"
          aria-expanded="false"
          aria-haspopup="true"
        >
          Sort by
          <svg
            class="h-5 w-5 text-gray-500"
            aria-hidden="true"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
              clip-rule="evenodd"
            />
          </svg>
        </button>

        <!--
                Dropdown menu, show/hide based on menu state.

                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
        <div
          class="absolute right-0 z-10 mt-2.5 w-40 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
          role="menu"
          aria-orientation="vertical"
          aria-labelledby="sort-menu-button"
          tabindex="-1"
        >
          <!-- Active: "bg-gray-50", Not Active: "" -->
          <a
            class="block px-3 py-1 text-sm leading-6 text-gray-900"
            id="sort-menu-item-0"
            href="#"
            role="menuitem"
            tabindex="-1"
          >Name</a>
          <a
            class="block px-3 py-1 text-sm leading-6 text-gray-900"
            id="sort-menu-item-1"
            href="#"
            role="menuitem"
            tabindex="-1"
          >Date updated</a>
          <a
            class="block px-3 py-1 text-sm leading-6 text-gray-900"
            id="sort-menu-item-2"
            href="#"
            role="menuitem"
            tabindex="-1"
          >Environment</a>
        </div>
      </div>
    </header>

    <!-- Deployment list -->
    <ul
      class="divide-y divide-white/5"
      role="list"
    >
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

      <!-- More deployments... -->
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

      <!-- More items... -->
    </ul>
  </aside>
</div>
