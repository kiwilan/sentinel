<x-dynamic-component
  :component="$getFieldWrapperView()"
  :field="$field"
>
  <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }">
    <a
      class="fi-btn fi-btn-size-md fi-btn-color-primary fi-ac-btn-action relative inline-grid grid-flow-col items-center justify-center gap-1.5 rounded-lg bg-custom-600 px-3 py-2 text-sm font-semibold text-white shadow-sm outline-none transition duration-75 hover:bg-custom-500 focus:ring-2 focus:ring-custom-500/50 disabled:pointer-events-none disabled:opacity-70 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus:ring-custom-400/50"
      href="{{ $field->getUrl() }}"
      style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
      download
    >
      <span class="fi-btn-label">
        Download
      </span>
    </a>
  </div>
</x-dynamic-component>
