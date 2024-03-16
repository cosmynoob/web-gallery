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
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
