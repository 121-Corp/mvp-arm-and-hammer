/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            letterSpacing: {
                'common': '-0.338px'
            }
        },
    },
    plugins: [],
};
