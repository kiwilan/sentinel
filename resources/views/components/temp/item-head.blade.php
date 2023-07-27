@props(['title' => '', 'subtitle' => ''])

<header class="relative isolate mt-6">
  <div
    class="absolute inset-0 -z-10 overflow-hidden"
    aria-hidden="true"
  >
    <div class="absolute left-16 top-full -mt-16 transform-gpu opacity-50 blur-3xl xl:left-1/2 xl:-ml-80">
      <div
        class="aspect-[1154/678] w-[72.125rem] bg-gradient-to-br from-[#FF80B5] to-[#9089FC]"
        style="clip-path: polygon(100% 38.5%, 82.6% 100%, 60.2% 37.7%, 52.4% 32.1%, 47.5% 41.8%, 45.2% 65.6%, 27.5% 23.4%, 0.1% 35.3%, 17.9% 0%, 27.7% 23.4%, 76.2% 2.5%, 74.2% 56%, 100% 38.5%)"
      ></div>
    </div>
    <div class="absolute inset-x-0 bottom-0 h-px bg-gray-900/5"></div>
  </div>

  <div class="main-container mx-auto py-10">
    <div class="mx-auto flex max-w-2xl items-center justify-between gap-x-8 lg:mx-0 lg:max-w-none">
      <div class="flex items-center gap-x-6">
        {{-- <img
          class="h-16 w-16 flex-none rounded-full ring-1 ring-gray-900/10"
          src="https://tailwindui.com/img/logos/48x48/tuple.svg"
          alt=""
        > --}}
        @isset($left)
          {{ $left }}
        @endisset
        <h1>
          <div class="text-gray-medium text-sm leading-6">
            {{-- Invoice <span class="text-gray-dark">#00011</span> --}}
            {{ $subtitle }}
          </div>
          <div class="text-gray-light mt-1 text-base font-semibold leading-6">
            {{ $title }}
          </div>
        </h1>
      </div>
      <div class="flex items-center gap-x-4 sm:gap-x-6">
        <button
          class="text-gray-light hidden text-sm font-semibold leading-6 sm:block"
          type="button"
        >
          Copy URL
        </button>
        <a
          class="text-gray-light hidden text-sm font-semibold leading-6 sm:block"
          href="#"
        >
          Edit
        </a>
        <a
          class="rounded-md bg-primary-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600"
          href="#"
        >
          Send
        </a>
      </div>
    </div>
  </div>
</header>
