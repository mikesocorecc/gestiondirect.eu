// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {
        'primary' : '#F2F2F2',
        'secondary' : '#777777',
        'success' : '#5d9c53',
        'info': {
          100: '#8bc8ee',
          500: '#4e86b1',
        }, 
        'warning': {
          100: '#8bc8ee',
          900: '#d07e35',
        }, 
      }, // Extend Tailwind's default colors
    },
    container: {
      center: true,
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
};
