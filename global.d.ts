/// <reference types="vite/client" />

import { Alpine } from 'alpinejs';

declare global {
  interface Window {
    Alpine: Alpine
  }
}

window.Alpine = window.Alpine || {}

export {}
