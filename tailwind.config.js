/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    100: "#cccccc",
                    200: "#999999",
                    300: "#666666",
                    400: "#333333",
                    500: "#000000",
                    600: "#000000",
                    700: "#000000",
                    800: "#000000",
                    900: "#000000",
                },

                secondary: {
                    100: "#ffffff",
                    200: "#ffffff",
                    300: "#ffffff",
                    400: "#ffffff",
                    500: "#ffffff",
                    600: "#cccccc",
                    700: "#999999",
                    800: "#666666",
                    900: "#333333",
                },

                tertiary: {
                    100: "#dbdff7",
                    200: "#b7bfee",
                    300: "#949fe6",
                    400: "#707fdd",
                    500: "#4c5fd5",
                    600: "#3d4caa",
                    700: "#2e3980",
                    800: "#1e2655",
                    900: "#0f132b",
                },

                quarternary: {
                    100: "#f8f8fc",
                    200: "#f0f1f9",
                    300: "#e9e9f7",
                    400: "#e1e2f4",
                    500: "#dadbf1",
                    600: "#aeafc1",
                    700: "#838391",
                    800: "#575860",
                    900: "#2c2c30",
                },
            },

        },
    },
    plugins: [],
};
