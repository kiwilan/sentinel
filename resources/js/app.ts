import './bootstrap'

import Alpine from 'alpinejs'

import AlpineFloatingUI from '@awcodes/alpine-floating-ui'

import focus from '@alpinejs/focus'
import collapse from '@alpinejs/collapse'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'

import { copy } from './modules/copy'

Alpine.plugin(AlpineFloatingUI)
Alpine.plugin(NotificationsAlpinePlugin)

Alpine.plugin(focus)
Alpine.plugin(collapse)

window.Alpine = Alpine

Alpine.data('copy', copy)

Alpine.start()
