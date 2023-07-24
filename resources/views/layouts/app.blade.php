<x-app>
  <x-slot name="nav">
    @livewire('navigation-menu')
  </x-slot>

  @isset($header)
    <x-slot name="header">
      {{ $header }}
    </x-slot>
  @endisset

  {{ $slot }}
</x-app>
