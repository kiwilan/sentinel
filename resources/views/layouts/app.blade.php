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

  {!! SEO::generate() !!}

  @vite(['resources/css/app.css', 'resources/js/app.ts'])
  @livewireStyles
</head>

<body class="{{ config('app.env') === 'local' ? 'debug-screens' : '' }} font-sans antialiased">
  <x-banner />

  <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow dark:bg-gray-800">
        <div class="main-container py-6">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main class="min-h-[74vh] md:min-h-[80vh]">
      {{ $slot }}
    </main>
    <x-layout.footer />
  </div>

  @stack('modals')
  @livewire('notifications')
  @vite(['resources/js/app.ts'])
  @livewireScripts
</body>

</html>
