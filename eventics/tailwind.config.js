/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        etPurple: '#550ECA',
        etBlue: '#1260FE',
        etPink: '#DE0977',
        etLpink: '#F929BB',
        etGray: '#58595B',
        etGray2: '#5C707E',
        etBlack: '#181818',
      },

      fontFamily: {
        kanit: ['"Kanit", sans-serif'],
        kalam: ['"Kalam", cursive;'],
        inter: ['"Inter", sans-serif'],
        lato: ['"Lato", sans-serif'],
      },
    },
    screens: {
      'xxxl': { 'max': '1799px' },
      // => @media (max-width: 1799px) { ... }

      'xxl': { 'max': '1599px' },
      // => @media (max-width: 1599px) { ... }

      'xl': { 'max': '1399px' },
      // => @media (max-width: 1399px) { ... }

      'lg': { 'max': '1199px' },
      // => @media (max-width: 1199px) { ... }

      'md': { 'max': '991px' },
      // => @media (max-width: 991px) { ... }

      'sm': { 'max': '767px' },
      // => @media (max-width: 767px) { ... }

      'xs': { 'max': '575px' },
      // => @media (max-width: 575px) { ... }

      'xxs': { 'max': '479px' },
      // => @media (max-width: 479px) { ... }
    },
  },
  plugins: [],
}