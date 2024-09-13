/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        art : {
          light : '#0A939E',
          medium :'#195D6E',
          dark: '#1E3441',
          darker: '#172C3C',
        },
        grey: {
          light :'#00000029',
          medium :'#D4D4D4',
          dark :'#0000007D',
        }
      },
      fontFamily: {
        sans: ['Monserrat', 'sans-serif'],
        title: ['Playfair Display', 'serif'],
      },
      fontSize: {
        '4xs': '12px',
        '3xs': '14px',
        '2xs': '16px',
        'xs': '18px',
        'sm': '21px',
        'md': '26px',
        'tiny': '.875rem',
        'base': '19px',
        'lg': '28px',
        'xl': '36px',
        '2xl': '39px',
        '3xl': '45px', 
        '4xl': '62px',
        '5xl': '3rem',
        '6xl': '4rem',
        '7xl': '5rem',
        'homepage': '16rem',
    },
    fontWeight: {
        hairline: 100,
        'extra-light': 100,
        thin: 200,
        light: 300,
        normal: 400,
        medium: 500,
        semibold: 600,
        bold: 700,
        extrabold: 800,
        'extra-bold': 800,
        black: 900,
      },
      screens: {
        'xs': '640px',
        // => @media (min-width: 640px) { ... }

        'sm': '768px',
        // => @media (min-width: 768px) { ... }

        'md': '1024px',
        // => @media (min-width: 1024px) { ... }

        'lg': '1280px',
        // => @media (min-width: 1280px) { ... }

        'xl': '1536px',
        // => @media (min-width: 1536px) { ... }

        '2xl': '1910px',
        // => @media (min-width: 1910px) { ... }

        '3xl': '2200px',
        // => @media (min-width: 1910px) { ... }
      },

    },
  },
  plugins: [],
};

export default config;
