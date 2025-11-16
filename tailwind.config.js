/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Poppins', 'ui-sans-serif', 'system-ui'],
      },
      colors: {
        'ocean-blue': '#0077b6',
        'ocean-light': '#00b4d8',
      },
    },
  },
  plugins: [],
}