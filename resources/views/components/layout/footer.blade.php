@php
  $beginYear = '2023';
  $currentYear = date('Y');
  $year = $beginYear === $currentYear ? $currentYear : $beginYear . ' - ' . $currentYear;
@endphp

<footer class="footer bg-gray-100 dark:bg-gray-900">
  <div class="px-4 pb-6 pt-3 sm:px-6 md:flex md:items-center md:justify-between lg:px-8">
    <div class="flex justify-center space-x-6 md:order-2">
      <a
        class="text-gray-400 hover:text-gray-500"
        href="https://github.com/kiwilan/sentinel"
        target="_blank"
        rel="noopener noreferrer"
      >
        <span class="sr-only">GitHub</span>
        <x-icon-github class="h-6 w-6 fill-current" />
      </a>
    </div>
    <div class="mt-8 md:order-1 md:mt-0">
      <p class="text-center text-xs leading-5 text-gray-500">&copy; {{ $year }} Sentinel. All rights
        reserved.</p>
    </div>
  </div>
</footer>
