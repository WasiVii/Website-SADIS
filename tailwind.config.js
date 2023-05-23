const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    darkMode: "class",

    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
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
