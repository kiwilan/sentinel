import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import plugin from 'tailwindcss/plugin'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './app/Filament/**/*.php',
    './app/View/**/*.php',
    './resources/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        danger: colors.rose,
        primary: colors.purple,
        success: colors.green,
        warning: colors.yellow,
      },
    },
  },
  plugins: [
    plugin(({ addComponents }) => {
      addComponents({
        '.main-container': {
          '@apply container mx-auto max-w-7xl px-4 lg:px-8':
          {},
        },
        '.center': {
          '@apply absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2':
          {},
        },
        '.debug-screens': {
          '@apply before:bottom-0 before:left-0 before:fixed before:px-1 before:text-sm before:bg-black before:text-white before:shadow-xl before:content-["screen:_"] sm:before:content-["screen:sm"] md:before:content-["screen:md"] lg:before:content-["screen:lg"] xl:before:content-["screen:xl"] 2xl:before:content-["screen:2xl"]':
            {},
          '&:before': {
            'z-index': '2147483647',
          },
        },
        '.word-wraping': {
          'text-align': 'justify',
          '-webkit-hyphens': 'auto',
          '-moz-hyphens': 'auto',
          '-ms-hyphens': 'auto',
          'hyphens': 'auto',
        },
        '.scrollbar-thin': {
          'scrollbar-width': 'thin',
        },
        '.border-gray-light': {
          '@apply border-gray-100 dark:border-gray-700':
          {},
        },
        '.text-gray-light': {
          '@apply text-gray-900 dark:text-gray-100':
          {},
        },
        '.text-gray-medium': {
          '@apply text-gray-500 dark:text-gray-400':
          {},
        },
        '.text-gray-dark': {
          '@apply text-gray-700 dark:text-gray-200':
          {},
        },
      })
    }),
    forms,
    typography,
  ],
}
