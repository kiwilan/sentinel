<x-app>
  <x-layout.sidebar />
  <x-layout.sidebar-desktop />

  <div class="xl:pl-72">
    <x-layout.header />

    <main>
      {{-- <x-layout.main.header /> --}}
      {{ $slot }}
    </main>
  </div>

  {{-- <x-banner />

  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @if (isset($nav))
      {{ $nav }}
    @endif
    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow dark:bg-gray-800">
        <div class="main-container py-6">
          {{ $header }}
        </div>
      </header>
    @endif
    <!-- Page Content -->
    <main class="min-h-[74vh] md:min-h-[87vh]">
      {{ $slot }}
    </main>
    <x-layout.footer />
  </div> --}}
</x-app>
