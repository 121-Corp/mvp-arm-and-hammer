/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
const defaultTheme = require('tailwindcss/defaultTheme');

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                intro: ["Intro Cond", "sans-serif"],
                kohinoor: ["Kohinoor Latin", "sans-serif"],
            },
            colors: {
                'ah-blue': 'rgb(0, 75, 151)', /* #004697 */
                'ah-red': 'rgb(211, 17, 69)', /* #d31145 */
                'ah-sand': 'rgb(253, 221, 203)', /* #fdddcd */
                'ah-dark-grey': 'rgb(76, 76, 78)', /* #4c4c4e */
                'ah-light-grey': 'rgb(167, 168, 170)', /* #abadaf */
                'ah-darkest-grey': 'rgb(30, 30, 30)', /* #1e1e1e: main nav */
                'ah-medium-dark-grey': 'rgb(88, 88, 90)', /* #58585a: section headings & text */
                'ah-medium-grey': 'rgb(120, 120, 120)', /* #787878 */
                'ah-lighter-grey': 'rgb(217, 217, 217)', /* #d9d9d9: main nav dividers, light form borders */
                'ah-lighter-grey-2': 'rgb(239, 239, 239)', /* #efefef: section bg */
                'ah-lightest-grey': 'rgb(245, 245, 245)', /* #f5f5f5 */
                'ah-light-blue': 'rgb(108, 162, 242)', /* #6ca2f2 */
                'ah-dark-blue': 'rgb(0, 47, 135)', /* #002f87 */
                'ah-product-a-max': 'background-color: rgb(74, 179, 128, 80%)', /*Section to bacground header of details product*/
                'ah-product-bg-max': 'background-color: rgb(181, 117, 167, 80%)', /*Section to bacground header of details product*/
                'ah-product-bio-chlor': 'background-color: rgb(168, 111, 114, 80%)', /*Section to bacground header of details product*/
                'ah-product-celmanax': 'background-color: rgb(141, 108, 168, 80%)', /*Section to bacground header of details product*/
                'ah-product-certillus': 'background-color: rgb(159, 205, 119, 80%)', /*Section to bacground header of details product*/
                'ah-product-dcad-plus': 'background-color: rgb(229, 197, 104, 80%)', /*Section to bacground header of details product*/
                'ah-product-fermenten': 'background-color: rgb(78, 145, 122, 80%)', /*Section to bacground header of details product*/
                'ah-product-sodium-bicarb': 'background-color: rgb(164, 148, 151, 80%)', /*Section to bacground header of details product*/
                'ah-product-sq-810': 'background-color: rgb(164, 148, 151, 80%)' /*Section to bacground header of details product*/
            },
            letterSpacing: {
                'common': '-0.01em'
            },
            textShadow: {
                DEFAULT: '0px 4px 34px 0 rgba(0, 0, 0, 0.25)',
                'unset': 'unset'
            },
            transitionProperty: {
                'decoration-color': 'text-decoration-color'
            },
            screens: {
              'xl': '1280px',
              '2xl': '1366px',
              '3xl': '1440px',
              '4xl': '1536px',
              '5xl': '1680px',
              '6xl': '1920px'
            }
        },
    },
    plugins: [
        plugin(function ({ matchUtilities, theme }) {
          matchUtilities(
            {
              'text-shadow': (value) => ({
                textShadow: value,
              }),
            },
            { values: theme('textShadow') }
          )
        }),
    ],
};
