/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  purge: ["./**/*.{html,js,php}"],
  theme: {
    screens: {
      sm: "640px",
      // => @media (min-width: 640px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "992px",
      // => @media (min-width: 1024px) { ... }

      xl: "1024px",
      // => @media (min-width: 1024px) { ... }

      "2xl": "1280px",
      // => @media (min-width: 1280px) { ... }
    },
    extend: {
      colors: {
        "primary-600": "var(--color-primary-600)",
        "primary-700": "var(--color-primary-700)",
        "gray-500": "var(--color-gray-500)",
        "gray-900": "var(--color-gray-900)",
      },
      fontFamily: {},

      height: {
        90: "90vh",
      },
    },
  },
  plugins: [require("tailwindcss"), require("autoprefixer")],
};
