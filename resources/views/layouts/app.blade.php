<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />

  <meta
    name="application-name"
    content="{{ config('app.name') }}"
  />
  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  />

  <title>{{ config('app.name') }}</title>

  {!! SEO::generate() !!}

  @vite(['resources/css/app.css', 'resources/js/app.ts'])
  @livewireStyles
  @stack('scripts')
</head>

<body class="font-sans antialiased">
  <x-banner />

  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow dark:bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main>
      {{ $slot }}
    </main>
  </div>

  @stack('modals')
  @livewire('notifications')
  @livewireScripts
</body>

</html>
