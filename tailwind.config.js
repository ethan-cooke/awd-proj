/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,php}"],
  theme: {
    extend: {
      colors: {
        'twhite': '#F0F5F6',
        'tgray':'#7288A1',
        'tblue1': '#8AC7EF',
        'tblue2': '#3B6897',
        'tblue3': '#1B2E4E',
      },
      backgroundImage: {
        'main-page': "url('../images/high-res-retro-game.jpg')",
      }
    }
  },
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
}