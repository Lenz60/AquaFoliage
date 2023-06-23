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
                hero: "http://127.0.0.1:8000/images/HeroCropped.jpg",
            },
            fontFamily: {
                kreon: "Kreon",
                poppins: "Poppins",
                montserrat: "Montserrat",
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            "light",
            "dark",
            "coffee",
            "halloween",
            "forest",
            {
                foliage: {
                    base: "#0B1C11",
                    primary: "#E8ECE9",
                    accent: "#049806",
                },
            },
        ],
    },
};
