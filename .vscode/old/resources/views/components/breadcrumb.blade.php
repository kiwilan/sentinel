@php
  $itemClass = 'text-gray-400 hover:text-gray-500 dark:text-gray-300 dark:hover:text-gray-400 text-sm font-medium';
@endphp

<nav
  class="flex px-4 sm:px-6 lg:px-8"
  aria-label="Breadcrumb"
>
  <ol
    class="flex items-center space-x-4"
    role="list"
  >
    <li>
      <div>
        <a
          href="#"
          @class([$itemClass])
        >
          <svg
            class="h-5 w-5 flex-shrink-0"
            aria-hidden="true"
            viewBox="0 0 20 20"
            fill="currentColor"
          >
            <path
              fill-rule="evenodd"
              d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
              clip-rule="evenodd"
            />
          </svg>
          <span class="sr-only">Home</span>
        </a>
      </div>
    </li>
    @loop($navigation as $name => $route)
      <li>
        <div class="flex items-center">
          <svg
            class="h-5 w-5 flex-shrink-0 text-gray-300"
            aria-hidden="true"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
          </svg>
          <a
            href="{{ $route }}"
            @class(['ml-4', $itemClass])
          >
            {{ $name }}
          </a>
        </div>
      </li>
    @endloop
  </ol>
</nav>
