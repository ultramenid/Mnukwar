/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        fontFamily: {
            'sans': ['Open Sans', ...defaultTheme.fontFamily.sans],
          },
    },
  },
  plugins: [],
}
