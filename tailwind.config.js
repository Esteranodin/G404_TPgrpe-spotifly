/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php", "./public/*"
  ],
  theme: {
    extend: {

    

      colors: {
        primary: {
          'accent-color': 'hsl(353, 61, 57)',
          'grey-dark': 'hsl(O, 0, 14)',
          'grey-song': 'hsl(0, 0, 34)',
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
      },
    },

  },
  plugins: [],
}