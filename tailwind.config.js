/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#060606",
        secondary: "#FFA500",
        background: "#2b2c37",
      },
      fontFamily: {
        "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
      },
      fontSize: {
        "2xs": "0.625rem",
      },
    },
  },
  plugins: [],
}