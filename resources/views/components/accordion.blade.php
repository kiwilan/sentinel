<div
  class="mx-auto w-full"
  x-data="{ active: {{ $opened ? 1 : 0 }} }"
>
  <div
    class="rounded-lg bg-white shadow"
    role="region"
    x-data="{
        id: 1,
        get expanded() {
            return this.active === this.id
        },
        set expanded(value) {
            this.active = value ? this.id : null
        },
    }"
  >
    <h2>
      <button
        class="flex w-full items-center justify-between rounded-md px-6 py-4 text-xl font-bold hover:bg-gray-50"
        x-on:click="expanded = !expanded"
        :aria-expanded="expanded"
      >
        <span class="mx-auto">
          {{ $title }}
        </span>
        <span
          class="ml-4"
          aria-hidden="true"
          x-show="expanded"
        >&minus;</span>
        <span
          class="ml-4"
          aria-hidden="true"
          x-show="!expanded"
        >&plus;</span>
      </button>
    </h2>

    <div
      x-show="expanded"
      x-collapse
    >
      <div class="px-6 pb-4">
        {{ $slot }}
      </div>
    </div>
  </div>
</div>
