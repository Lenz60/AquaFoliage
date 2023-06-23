/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                home1: "url('https://i.imgur.com/owjKKIa.png')",
                home2: "url('https://i.imgur.com/Q4Jq9Ce.png')",
            },
            fontFamily: {
                kreon: "Kreon",
                poppins: "Poppins",
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: ["light", "dark", "coffee", "halloween", "forest"],
    },
};
