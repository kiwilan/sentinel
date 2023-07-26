@props(['id' => null, 'maxWidth' => null])

<x-modal
  :id="$id"
  :maxWidth="$maxWidth"
  {{ $attributes }}
>
  <div class="py-4">
    @isset($title)
      <div class="px-6 text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ $title }}
      </div>
    @endisset

    @isset($content)
      {{ $content }}
    @endisset
  </div>

  @isset($footer)
    <div
      class="flex flex-row justify-end border-t border-t-gray-200 bg-gray-100 px-6 py-4 text-right dark:border-t-gray-700 dark:bg-gray-800"
    >
      {{ $footer }}
    </div>
  @endisset
</x-modal>
