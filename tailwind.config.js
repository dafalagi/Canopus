module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
        colors: {
            transparent: "transparent",
            mainclr: "#282F6A",
            secondaryclr: "#FF9636",
            thirdclr: "#50568D",
            red: "#FF3E3E",
            blue: "#3F5EFF",
            slate: "#eaeaea",
            white: "#FFFFFF",
            black: "#000000",
            orange2: "#FF7A00",
            grey: "#777777",
            grey2: "#D7D7D7",
        },
        fontFamily: {
            poppins: ["Poppins"],
        },
    },

    plugins: [
        require("tailwindcss-plugins/pagination", "tw-elements/dist/plugin"),
        require("tw-elements/dist/plugin"),
        require("flowbite/plugin"),
    ],
};
