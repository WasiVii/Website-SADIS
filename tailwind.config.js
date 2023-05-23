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
                "albert-sans": ['"Albert Sans"', "swap"],
            },
            colors: {
                "main-color": "#f2f5ff",
                "blue-color": "#6e91fe",
            },
        },
    },
    plugins: [require("daisyui")],
};
