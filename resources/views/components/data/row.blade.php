<tr
  class="relative cursor-pointer even:bg-gray-50 hover:bg-primary-200 hover:bg-opacity-20 dark:even:bg-gray-800 dark:hover:bg-primary-700"
  x-data
  @click="window.open('{{ $href }}', '_self')"
>
  {{ $slot }}
</tr>
