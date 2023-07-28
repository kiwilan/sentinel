<div>
  <x-button
    wire:click="openImport"
    outlined
  >
    Import JSON
  </x-button>
  <x-modal
    wire:model="opened"
    maxWidth="md"
  >
    <div class="p-5">
      <form
        class="pt-2"
        wire:submit="save"
      >
        <x-field.upload
          name="json"
          wire:model="json"
          label="JSON"
          accept="application/json"
        />

        @error('json')
          <span class="error">{{ $message }}</span>
        @enderror

        <a
          class="block w-max pt-2 hover:underline"
          href="{{ asset('documents/sample.json') }}"
          target="_blank"
          rel="noopener noreferrer"
          download
        >
          Download sample
        </a>

        <x-button
          class="mt-6"
          type="submit"
        >Send JSON</x-button>
      </form>
    </div>
  </x-modal>
</div>
