/** @type {import('tailwindcss').Config} */
module.exports = {
  corePlugins: {
    preflight: false, // Prevent Tailwind from stripping Gutenberg default block styling
  },
  content: [
    './*.php',
    './**/*.php',
    './assets/js/src/**/*.js',
    './functionality/custom-blocks/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        'brand-orange': '#FB3C1E',
        'brand-black': '#1D1E1C',
        'brand-blue': '#175572',
        'brand-cream': '#EDDFBD',
        'brand-grey': '#DADADA',
      },
      fontFamily: {
        heading: ['Oswald', 'sans-serif'],
        body: ['Open Sans', 'sans-serif'],
      },
      lineHeight: {
        'tight-heading': '0.8',
      }
    }
  },
  plugins: [],
}
