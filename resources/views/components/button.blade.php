{{-- <button
  {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary-800 dark:bg-primary-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-primary-800 uppercase tracking-widest hover:bg-primary-700 dark:hover:bg-white focus:bg-primary-700 dark:focus:bg-white active:bg-primary-900 dark:active:bg-primary-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:focus:ring-offset-primary-800 transition ease-in-out duration-150']) }}
>
  {{ $slot }}
</button> --}}

@props(['style' => '', 'type' => 'button', 'href' => '', 'loading' => false, 'loadingWire' => '', 'align' => '', 'external' => false, 'icon' => '', 'iconSize' => '5', 'isFull' => false, 'fullStyle'])

<div @class([
    'flex items-center space-x-3',
    'w-full' => $isFull,
    $attributes->get('class'),
])>
  <div @class(["{$align} w-max" => !$isFull, 'w-full' => $isFull])>
    @if ($loading)
      <div>
        <svg
          class="-ml-1 mr-3 h-5 w-5 animate-spin text-white"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          wire:loading
          wire:target="{{ $loadingWire }}"
        >
          <circle
            class="opacity-25"
            cx="12"
            cy="12"
            r="10"
            stroke="currentColor"
            stroke-width="4"
          ></circle>
          <path
            class="opacity-75"
            fill="currentColor"
            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
          ></path>
        </svg>
        <div
          class="h-5 w-5"
          wire:loading.remove
          wire:target="{{ $loadingWire }}"
        ></div>
      </div>
    @endif
    @if ($href)
      <a
        href="{{ $href }}"
        @if ($external) target="_blank"
      rel="noopener noreferrer" @endif
        @class([
            $style,
            'flex items-center no-underline',
            $fullStyle => $isFull,
        ])
      >
        @if ($icon)
          <x-dynamic-component
            class="h-{{ $iconSize }} w-{{ $iconSize }} mr-2"
            component="icon-{{ $icon }}"
          />
        @endif
        {{ $slot }}
      </a>
    @else
      <button
        type="{{ $type }}"
        @if ($attributes->has('@click')) @click="{{ $attributes->get('@click') }}" @endif
        @if ($attributes->has('wire:click')) wire:click="{{ $attributes->get('wire:click') }}" @endif
        @class([$style, 'flex items-center', $fullStyle => $isFull])
      >
        @if ($icon)
          <x-dynamic-component
            class="h-{{ $iconSize }} w-{{ $iconSize }} mr-2"
            component="icon-{{ $icon }}"
          />
        @endif
        {{ $slot }}
      </button>
    @endif
  </div>
</div>
