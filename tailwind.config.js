/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/**/*.html"
  ],
  theme: {
    extend: {
      colors: {
        beige: '#f9f5f0',
        negro: '#1a1a1a',
        dorado: '#d4af37',
      },
    },
  },
  plugins: [],
}
