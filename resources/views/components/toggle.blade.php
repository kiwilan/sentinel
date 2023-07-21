<div
  class="flex items-center justify-between"
  x-data="{
      value: {{ $checked ? 'true' : 'false' }},
      init() {
          if ($refs.toggleInput.getAttribute('wire:model')) {
              this.value = $wire.get($refs.toggleInput.getAttribute('wire:model'))
          }
      },
      labelClick() {
          $refs.toggle.click()
          $refs.toggle.focus()
          $wire.set($refs.toggleInput.getAttribute('wire:model'), this.value)
      },
      buttonClick() {
          this.value = !this.value
          $wire.set($refs.toggleInput.getAttribute('wire:model'), this.value)
      },
  }"
  x-id="['toggle-label']"
>
  <input
    name="{{ $name }}"
    type="hidden"
    x-ref="toggleInput"
    {{ $attributes->whereStartsWith('wire:model') }}
    :value="value"
  >
  <label
    class="flex flex-grow flex-col"
    @click="labelClick"
    :id="$id('toggle-label')"
  >
    <span
      class="text-sm font-medium leading-6 text-gray-900"
      id="availability-label"
    >
      {{ $label }}
    </span>
    <span
      class="text-sm text-gray-500"
      id="availability-description"
    >
      {{ $subtitle }}
    </span>
  </label>
  <button
    class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent bg-gray-200 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2"
    type="button"
    role="switch"
    aria-describedby="availability-description"
    :aria-checked="value"
    :aria-labelledby="$id('toggle-label')"
    :class="value ? 'bg-primary-600' : 'bg-gray-200'"
    x-ref="toggle"
    @click="buttonClick"
  >
    <span
      class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
      aria-hidden="true"
      :class="value ? 'translate-x-5' : 'translate-x-0'"
    ></span>
  </button>
</div>

@once
  <script>
    document.addEventListener('alpine:init', () => {
      Alpine.data('toggle', () => ({
        toggled: false,

        init() {
          this.toggled = this.$refs.toggleInput.checked
        },
        toggleValue() {
          this.toggled = !this.toggled
          this.$wire.set(this.$refs.toggleInput.getAttribute('wire:model'), this.toggled)
        },
      }))
    })
  </script>
@endonce
