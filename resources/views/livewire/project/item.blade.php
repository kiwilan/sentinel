@php
  $dlItemClass = 'border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0 dark:border-gray-800';
  $dlItemTitleClass = 'text-sm font-medium leading-6 text-gray-900 dark:text-gray-100';
  $dlItemDescriptionClass = 'mt-1 text-sm leading-6 text-gray-700 sm:mt-2 dark:text-gray-300';
  
  $items = [
      'Enabled' => $project->is_enabled ? 'Yes' : 'No',
      'URL' => $project->url,
      'Type' => $project->type->locale(),
      'Priority' => $project->priority->locale(),
  ];
@endphp

<section class="group space-y-5 rounded-md bg-white p-5 shadow dark:bg-gray-800">
  <div
    class="rounded-mdmd:flex relative flex w-full cursor-pointer justify-between space-y-3 md:items-center md:justify-between md:space-y-0"
  >
    <div class="flex items-center space-x-5">
      <div @class([
          'rounded-full p-1.5 bg-opacity-30',
          'bg-green-300' => $is_enabled,
          'bg-red-300' => !$is_enabled,
      ])>
        <x-icon-power @class([
            'h-6 w-6',
            'text-green-600' => $is_enabled,
            'text-red-600' => !$is_enabled,
        ]) />
      </div>
      <div>
        <h2 class="text-xl font-semibold">{{ $project->name }}</h2>
        <p class="mt-1 font-mono text-sm text-gray-500 dark:text-gray-400">
          {{ $project->instance }}
        </p>
      </div>
    </div>
    <x-secondary-button wire:click="open">
      {{ __('Edit') }}
    </x-secondary-button>
  </div>

  <div class="flex justify-between">
    <div class="relative z-10 flex cursor-auto items-center space-x-5">
      <x-input-toggle
        name="is_enabled"
        label="Enabled"
        subtitle="Enable Sentinel for this project."
        wire:model="is_enabled"
      />
    </div>
    <div class="items-center space-x-3 md:flex">
      <button
        class="flex items-center justify-between space-x-1 rounded-md bg-gray-200 p-2 font-mono hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600"
        x-data="copy"
        @click="clipboard(`{{ $project->key }}`)"
      >
        <div>{{ $project->key }}</div>
        <x-icon-clipboard class="inline-block h-5 w-5" />
      </button>
      <x-secondary-button
        type="button"
        wire:click="regenerateToken"
      >
        Regenerate
      </x-secondary-button>
    </div>
  </div>

  <div
    class="p-5"
    x-show="expanded"
    x-collapse
    x-cloak
  >
    <dl class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      @loop($items as $name => $value)
        <div class="{{ $dlItemClass }}">
          <dt class="{{ $dlItemTitleClass }}">{{ $name }}</dt>
          <dd class="{{ $dlItemDescriptionClass }}">{{ $value }}</dd>
        </div>
      @endloop
      <div class="{{ $dlItemClass }} md:col-span-4">
        <dt class="{{ $dlItemTitleClass }}">Comment</dt>
        <dd class="{{ $dlItemDescriptionClass }}">{{ $project->comment }}</dd>
      </div>
    </dl>
  </div>

  <div
    class="items-start justify-between space-y-3 bg-white p-5 dark:bg-gray-800 md:flex md:space-y-0"
    x-show="expanded"
    x-collapse
    x-cloak
  >
    <div>
      <x-button
        type="button"
        @click="editable = ! editable"
      >
        Edit
      </x-button>
    </div>
    <div class="items-center space-x-3 md:flex">
      <button
        class="flex items-center justify-between rounded-md bg-gray-200 p-2 hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600"
        x-data="copy"
        @click="clipboard(`{{ $project->key }}`)"
      >
        <div>{{ $project->key }}</div>
        <x-icon-clipboard class="inline-block h-5 w-5" />
      </button>
      <x-button
        type="button"
        wire:click="regenerateToken"
      >
        Regenerate
      </x-button>
    </div>
  </div>

  <livewire:project.form />
</section>
