<div
  class="space-y-3"
  x-data="{
      model: @entangle($attributes->wire('model')),
      file: null,
      fileName: null,
      fileExtension: null,
      sizeHuman: null,
      init() {
          $watch('model', value => {
              if (!value) {
                  this.file = null
                  this.fileName = null
                  this.fileExtension = null
                  this.sizeHuman = null
              }
          })
      },
      fileChanged() {
          this.file = this.$refs.file.files[0];
          this.fileName = this.file.name;
          this.fileExtension = this.fileName.split('.').pop();
          this.sizeHuman = this.setHumanSize();
      },
      setHumanSize() {
          const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB']
          if (this.file.size == 0) {
              return 'n/a'
          }
          const i = parseInt(Math.floor(Math.log(this.file.size) / Math.log(1024)))
          if (i == 0) {
              return this.file.size + ' ' + sizes[i]
          }
  
          return (this.file.size / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i]
      }
  }"
  x-on:change="fileChanged()"
  x-on:dragover.prevent
  x-on:drop.prevent
  x-on:drop="fileChanged()"
  x-on:dragenter="fileChanged()"
  x-on:dragleave="fileChanged()"
>
  <input
    type="file"
    x-ref="file"
    {{ $attributes->merge([
        'class' => 'hidden',
    ]) }}
  >
  <div
    class="flex items-center space-x-3"
    @click="$refs.file.click()"
  >
    <div class="w-full rounded-md border border-gray-700 p-1.5">
      <span
        class="text-gray-medium italic"
        x-show="!file"
      >Upload your JSON file</span>
      <span
        class="flex items-center justify-between"
        x-show="file"
      >
        <span x-text="file?.name"></span>
        <span
          class="text-gray-medium"
          x-text="sizeHuman"
        ></span>
      </span>
    </div>
    <x-button outlined>
      Upload
    </x-button>
  </div>
</div>
