import type { AlpineComponent } from 'alpinejs'
import { Notification } from '../../../vendor/filament/notifications/dist/module.esm'

/**
 * Copy module
 */
function copy(): AlpineComponent<{
  value: string
  copy: boolean
  secureContext: () => Promise<void>
  unsecureContext: () => Promise<void>
  clipboard: () => Promise<void>
}> {
  return {
    value: '',
    copy: false,

    async secureContext() {
      try {
        await navigator.clipboard.writeText(this.value)
        this.copy = true
      }
      catch (error) {
        console.error(error)
      }
    },
    async unsecureContext() {
      const textArea = document.createElement('textarea')
      textArea.value = this.value
      textArea.style.position = 'fixed'
      document.body.appendChild(textArea)
      textArea.focus()
      textArea.select()
      document.execCommand('copy')
      this.copy = true
      document.body.removeChild(textArea)
    },
    async clipboard(value?: string) {
      this.value = `${value}`

      if (window.isSecureContext)
        await this.secureContext()

      else
        await this.unsecureContext()

      if (this.copy) {
        new Notification()
          .title('Copied to clipboard')
          .body(`${this.value} copied to clipboard.`)
          .success()
          .seconds(1.5)
          .send()
        setTimeout(() => {
          this.copy = false
        }, 1500)
      }
      else {
        new Notification()
          .title('Error')
          .body(`${this.value} is not copied to your clipboard.`)
          .warning()
          .seconds(5)
          .send()
      }
    },
  }
}

export {
  copy,
}
