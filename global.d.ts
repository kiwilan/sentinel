/// <reference types="vite/client" />

import type { Alpine as AlpineType } from 'alpinejs'

declare global {
  interface Window {
    Alpine: Alpine
  }
}

window.Alpine = window.Alpine || {}

export {}
