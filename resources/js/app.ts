import './bootstrap'

import { SlideOver } from '@kiwilan/steward-laravel'
import { Alpine, Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm'
import { Copy } from './modules/copy'
import { Sidebar } from './store/sidebar'

Alpine.data('copy', Copy)
Alpine.store('slideOver', SlideOver)
Alpine.store('sidebar', Sidebar)

Livewire.start()
