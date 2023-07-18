/// <reference types="vite/client" />

import { Axios } from 'axios';
import { Alpine } from 'alpinejs';

declare global {
  interface Window {
    axios: Axios
    Alpine: Alpine
  }
}

window.axios = window.axios || {}
window.Alpine = window.Alpine || {}

export {}
