import './bootstrap'

import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'
import collapse from '@alpinejs/collapse'
import AlpineFloatingUI from '@awcodes/alpine-floating-ui'
import { SlideOver } from '@kiwilan/steward-laravel'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'

import { Copy } from './modules/copy'

Alpine.plugin(AlpineFloatingUI)
Alpine.plugin(NotificationsAlpinePlugin)

Alpine.plugin(focus)
Alpine.plugin(collapse)

window.Alpine = Alpine

Alpine.data('copy', Copy)
Alpine.store('slideOver', SlideOver)

Alpine.start()
