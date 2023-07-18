import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
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
        primary: colors.blue,
        success: colors.green,
        warning: colors.yellow,
      },
    },
  },
  plugins: [forms, typography],
}
