/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './spravato-treatment/**/*.html',
    './resiliency-theme/**/*.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0B2035',
        secondary: '#23bfe2',
        accent: '#23bfe2',
        lightblue: '#23bfe2',
        surface: '#FDFDFD',
        neutral: '#F3F4F6',
      },
      fontFamily: {
        sans: ['Outfit', 'sans-serif'],
      },
      boxShadow: {
        soft: '0 10px 40px -10px rgba(11,32,53,0.08)',
        hover: '0 20px 40px -10px rgba(11,32,53,0.12)',
      },
    },
  },
  plugins: [],
  safelist: [
    'group-hover:scale-110',
    'group-hover:scale-105',
    'group-hover:rotate-180',
    'group-hover:bg-secondary',
    'group-hover:text-primary',
    'group-[.scrolled]:filter-none',
    'group-[.scrolled]:h-20',
  ],
};
