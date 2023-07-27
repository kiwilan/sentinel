<div>
  <x-button
    wire:click="openImport"
    outlined
  >
    Import JSON
  </x-button>
  {{ $opened ? 'true' : 'false' }}
  <x-modal wire:model="opened">
    <form wire:submit="save">
      <input
        type="file"
        wire:model="json"
        accept="application/json"
      >

      @error('json')
        <span class="error">{{ $message }}</span>
      @enderror

      <button type="submit">Save photo</button>
    </form>
  </x-modal>
</div>
