/** @type {import('tailwindcss').Config} */
export default {
  presets: [
      require('./vendor/wireui/wireui/tailwind.config.js')
  ],
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './vendor/wireui/wireui/resources/**/*.blade.php',
      './vendor/wireui/wireui/src/View/**/*.php',
      './vendor/wireui/wireui/src/*.php',
      './vendor/wireui/wireui/src/WireUi/**/*.php',
      './vendor/wireui/wireui/src/Components/**/*.php',
  ],
  theme: {
      extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'), // Tailwind Forms plugin
  ],
}
