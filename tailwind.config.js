const { plugin } = require("postcss");

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "resources/**/*.flowbite/**/*.js",
  ],
  theme: {
    extends: {},

  },
  plugins: [require("flowbite/plugin")
    
  ],
}