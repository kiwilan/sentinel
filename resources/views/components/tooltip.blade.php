<!-- Tippy.js -->
<!-- https://atomiks.github.io/tippyjs/v6 -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>

<!-- Usage -->
<div
  class="cursor-pointer"
  x-data
  x-tooltip="{{ $tooltip }}"
>
  {{ $text }}
</div>

<!-- Source -->
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

    // Directive: x-tooltip
    Alpine.directive('tooltip', (el, {
      expression
    }) => {
      tippy(el, {
        content: expression
      })
    })
  })
</script>
