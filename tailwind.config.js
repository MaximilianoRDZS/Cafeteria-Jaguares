/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme")
const colors = require("tailwindcss/colors")
export default {
  mode: "jit", 
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
    theme: {
      colors: {
          transparent: 'transparent',
          current: 'currentColor',
          slate: colors.slate,
          gray: colors.gray,
          zinc: colors.zinc,
          neutral: colors.neutral,
          stone: colors.stone,
          red: colors.red,
          orange: colors.orange,
          amber: colors.amber,
          yellow: colors.amber,
          lime: colors.lime,
          green: colors.green,
          emerald: colors.emerald,
          teal: colors.teal,
          cyan: colors.cyan,
          sky: colors.sky,//warn - As of Tailwind CSS v2.2, lightBlue has been renamed to sky.
          blue: colors.blue,
          indigo: colors.indigo,
          violet: colors.violet,
          purple: colors.purple,
          fuchsia: colors.fuchsia,
          pink: colors.pink,
          rose: colors.rose,
          black: colors.black,
          white: colors.white,
      },
  },
  plugins: [],
}

