<tr
  class="relative cursor-pointer transition-colors even:bg-gray-50 hover:bg-primary-200 hover:bg-opacity-20 dark:bg-gray-800 dark:even:bg-gray-700 dark:hover:bg-primary-900/60"
  x-data
  @click="window.open('{{ $href }}', '_self')"
>
  {{ $slot }}
</tr>
