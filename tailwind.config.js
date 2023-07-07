/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/**/*.vue",
        "./resources/Pages/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                kreon: "Kreon",
                poppins: "Poppins",
                montserrat: "Montserrat",
                baskerville: "Libre Baskerville",
                bebas: "Bebas Neue",
                istok: "Istok Web",
                catamaran: "Catamaran",
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
                    neutral: "#0B1C11",
                    neutralDark: "#050d08",
                    primary: "#E8ECE9",
                    accent: "#049806",
                },
            },
        ],
    },
};
