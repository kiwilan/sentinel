<tr
  @class([
      'relative even:bg-gray-200/50 dark:even:bg-gray-800/50',
      'hover:bg-primary-200/30 dark:hover:bg-primary-800/30 cursor-pointer' => $href,
  ])
  x-data
  @click="window.open('{{ $href }}', '_self')"
>
  {{ $slot }}
</tr>
