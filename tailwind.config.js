/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./**/*.php", "./assets/js/**/*.js"],

  theme: {
    extend: {
      colors: {
        cynBlue: "#002D74",
        cynBlueGray: "#07162C",
        cynText: "#07162C",
      },
    },

    container: {
      center: true,
      padding: "1rem",
    },

    screens: {
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1440px",
    },
  },

  corePlugins: {
    aspectRatio: false,
  },

  plugins: [
    require("@tailwindcss/typography"),
    require("@tailwindcss/forms")({
      strategy: "base",
    }),
  ],
};
