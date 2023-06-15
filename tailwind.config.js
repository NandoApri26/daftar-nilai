module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      width: {
        '27' : '108px',
      },
      height: {
        '39.5' : '158px',
        '53' : '211px',
      },
      margin: {
        '68' : '17rem',
        '69' : '17.25rem',
        '70' : '17.5rem',
      },
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}