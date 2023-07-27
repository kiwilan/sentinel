/// <reference types="vite/client" />

import type { Axios } from 'axios'
import type { Alpine } from 'alpinejs'

declare global {
  interface Window {
    axios: Axios
    Alpine: Alpine
  }
}

window.axios = window.axios || {}
window.Alpine = window.Alpine || {}

export {}
