<!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
<div
  class="relative z-50 xl:hidden"
  role="dialog"
  aria-modal="true"
  x-data
  x-cloak
  x-show="$store.sidebar.isOpen"
>
  <div
    class="fixed inset-0 bg-gray-900/80 transition-opacity duration-300 ease-linear"
    :class="$store.sidebar.isOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'"
  ></div>

  <div class="fixed inset-0 flex">
    <div
      class="relative mr-16 flex w-full max-w-xs flex-1 transform transition ease-in-out"
      :class="$store.sidebar.isOpenSidebar ? 'translate-x-0' : '-translate-x-full'"
      @click.outside="$store.sidebar.close()"
    >
      <div
        class="absolute left-full top-0 flex w-16 justify-center pt-5 duration-300 ease-in-out"
        :class="$store.sidebar.isOpenSidebar ? 'opacity-100' : 'opacity-0'"
      >
        <button
          class="-m-2.5 p-2.5"
          type="button"
          @click="$store.sidebar.close()"
        >
          <span class="sr-only">Close sidebar</span>
          <svg
            class="h-6 w-6 text-white"
            aria-hidden="true"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M6 18L18 6M6 6l12 12"
            />
          </svg>
        </button>
      </div>

      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 ring-1 ring-white/10">
        <a
          class="flex h-16 shrink-0 items-center space-x-3"
          href="/"
        >
          <x-logo
            class="h-auto w-8"
            :text="false"
          />
          <x-logo
            class="h-auto w-24"
            :logo="false"
          />
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
                      x-data
                      @click="$store.sidebar.close()"
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
            <li class="-mx-6 mt-auto">
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
  </div>
</div>
