import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
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
    plugins: [require("daisyui"), forms],
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
                    "neutral-focus": "#0a1a0f",
                    primary: "#E8ECE9",
                    accent: "#049806",
                },
            },
        ],
    },
};
