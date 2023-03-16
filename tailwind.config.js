/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      backgroundImage: {
        home1 : "url('https://i.imgur.com/owjKKIa.png')",
        home2 : "url('https://i.imgur.com/Q4Jq9Ce.png')",
      },
      fontFamily:{
        kreon: "Kreon",
        poppins: "Poppins"
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
