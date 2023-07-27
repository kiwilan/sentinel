<x-stw-app dark>
  <x-slot name="head">
    {!! SEO::generate() !!}
    @filamentStyles
    @vite('resources/css/app.css')
  </x-slot>

  @auth
    <x-layout.sidebar />
    <x-layout.sidebar-desktop />
  @endauth

  @auth
    <div class="body xl:pl-72">
      <main class="main">
        <x-layout.header />
        <div class="border-t border-white/10 pt-6">
          <x-breadcrumb />
          @isset($top)
            {{ $top }}
          @endisset
          <section class="mt-5 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
          </section>
          @isset($bottom)
            {{ $bottom }}
          @endisset
        </div>
      </main>
      <x-layout.footer />
    </div>
  @else
    <main class="main">
      {{ $slot }}
    </main>
    <x-layout.footer />
  @endauth

  @pushOnce('scripts')
    @livewire('notifications')

    @filamentScripts
    @vite('resources/js/app.ts')
    @livewireScriptConfig
  @endPushOnce
</x-stw-app>
