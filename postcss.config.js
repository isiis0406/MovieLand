let tailwindcss = require('tailwindcss');
module.exports = {
  plugins: [
    tailwindcss('./tailwind.config.Js'),
    require('postcss-import'),
    require('autoprefixer')
  ]
}
