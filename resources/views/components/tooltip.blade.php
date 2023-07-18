@once
  <!-- Tippy.js -->
  <!-- https://atomiks.github.io/tippyjs/v6 -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
@endonce

<div
  class="w-max cursor-pointer"
  x-data
  x-tooltip="{{ $tooltip }}"
>
  {{ $text }}
</div>

@once
  <script>
    document.addEventListener('alpine:init', () => {
      // Magic: $tooltip
      Alpine.magic('tooltip', el => message => {
        let instance = tippy(el, {
          content: message,
          trigger: 'manual'
        })

        instance.show()

        setTimeout(() => {
          instance.hide()

          setTimeout(() => instance.destroy(), 150)
        }, 2000)
      })

      Alpine.directive('tooltip', (el, {
        expression
      }) => {
        tippy(el, {
          content: expression
        })
      })
    })
  </script>
@endonce
