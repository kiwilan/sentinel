import './bootstrap'

import type { Alpine as AlpineType } from 'alpinejs'

import AlpineFloatingUI from '@awcodes/alpine-floating-ui'
import { SlideOver } from '@kiwilan/steward-laravel'
import { Alpine as A, Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm'
import { Copy } from './modules/copy'

// import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'

const Alpine: AlpineType = A
Alpine.plugin(AlpineFloatingUI)
// Alpine.plugin(NotificationsAlpinePlugin)

window.Alpine = Alpine

Alpine.data('copy', Copy)
Alpine.store('slideOver', SlideOver)

Livewire.start()
