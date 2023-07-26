<!-- Static sidebar for desktop -->
<div class="hidden xl:fixed xl:inset-y-0 xl:z-50 xl:flex xl:w-72 xl:flex-col">
  <!-- Sidebar component, swap this element with another sidebar if you like -->
  <div
    class="relative z-10 flex grow flex-col gap-y-5 overflow-y-auto border-r bg-gray-200/10 px-6 ring-1 ring-white/5 dark:border-gray-800 dark:bg-black/10"
  >
    <a
      class="flex h-16 shrink-0 items-center space-x-3"
      href="/"
    >
      <img
        class="h-8 w-auto"
        src="{{ asset('images/sentinel.svg') }}"
        alt="Your Company"
      >
      <div class="font-mono text-xl uppercase">
        Sentinel
      </div>
    </a>
    <nav class="flex flex-1 flex-col">
      <ul
        class="flex flex-1 flex-col gap-y-7"
        role="list"
      >
        <li>
          <ul
            class="-mx-2 space-y-1"
            role="list"
          >
            @loop($navMain as $key => $item)
              <li>
                <a
                  href="{{ route($item->route) }}"
                  @class([
                      'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6',
                      'text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white' => !$item->current(),
                      'bg-gray-200 dark:bg-gray-800 dark:text-white' => $item->current(),
                  ])
                >
                  <x-dynamic-component
                    class="h-6 w-6 shrink-0"
                    component="icon-{{ $item->icon }}"
                  />
                  {{ $item->label }}
                </a>
              </li>
            @endloop
          </ul>
        </li>
        <li>
          <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
          <ul
            class="-mx-2 mt-2 space-y-1"
            role="list"
          >
            <li>
              <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
              <a
                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-400 hover:bg-gray-800 hover:text-white"
                href="#"
              >
                <span
                  class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white"
                >P</span>
                <span class="truncate">Planetaria</span>
              </a>
            </li>
            <li>
              <a
                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-400 hover:bg-gray-800 hover:text-white"
                href="#"
              >
                <span
                  class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white"
                >P</span>
                <span class="truncate">Protocol</span>
              </a>
            </li>
            <li>
              <a
                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-400 hover:bg-gray-800 hover:text-white"
                href="#"
              >
                <span
                  class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-700 bg-gray-800 text-[0.625rem] font-medium text-gray-400 group-hover:text-white"
                >T</span>
                <span class="truncate">Tailwind Labs</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="-mx-6 mt-auto space-y-2">
          <div class="flex items-center space-x-1 px-4">
            <x-stw-color-mode
              class="flex w-full items-center space-x-1 rounded-md p-2.5 hover:bg-gray-300 dark:hover:bg-gray-800"
              x-cloak
            >
              <div class="block dark:hidden">Light mode</div>
              <div class="hidden dark:block">Dark mode</div>
            </x-stw-color-mode>
          </div>
          <a
            class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-white hover:bg-gray-800"
            href="#"
          >
            <img
              class="h-8 w-8 rounded-full bg-gray-800"
              src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
              alt=""
            >
            <span class="sr-only">Your profile</span>
            <span aria-hidden="true">Tom Cook</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
