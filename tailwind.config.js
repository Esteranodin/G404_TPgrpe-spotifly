/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php", "./public/**/", "./public/components/**", "./process/*.php"
  ],
  theme: {
    extend: {

      colors: {
        primary: {
          'accent': 'hsl(353, 61, 57)',
          'grey-dark': 'hsl(0, 0, 14)',
          'grey': 'hsl(0, 0, 34)',
        },
        neutral: {
          'white': 'hsl(309,33, 96)',
          'black': 'hsl(0, 0, 7)',
        },
      },

      fontSize: {
        title: '30px',
        paragraph: '15px',
      },

      fontFamily: {
        'title': ['Spline Sans'],
        'body': ['sans-serif'],
        'Poppins': ["sans-serif"]
      },
    },

  },
  plugins: [],
}