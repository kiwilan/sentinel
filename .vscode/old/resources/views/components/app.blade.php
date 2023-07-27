<x-stw-app dark>
  <x-slot name="head">
    {!! SEO::generate() !!}

    @vite(['resources/css/app.css', 'resources/js/app.ts'])
    @livewireStyles
  </x-slot>


  {{ $slot }}
  @livewire('notifications')
  @livewireScripts
</x-stw-app>
