/** @type {import('tailwindcss').Config} */
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
            },
            letterSpacing: {
                'common': '-0.01em'
            },
            textShadow: {
                'default': '0px 4px 34px rgba(0, 0, 0, 0.25);'
            },
            transitionProperty: {
                'decoration-color': 'text-decoration-color'
            },
            screens: {
              'xl': '1280px',
              '2xl': '1366px',
              '3xl': '1440px',
              '4xl': '1536px',
            }
        },
    },
    plugins: [],
};
