module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
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