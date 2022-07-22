module.exports = {
    content: [
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
            btnprimary: "#FA9E3B",
            red: "#FF3E3E",
            blue: "#3F5EFF",
            slate: "#eaeaea",
            white: "#FFFFFF",
            black: "#000000",
            orange2: "#FF932F",
            grey: "#777777",
            grey2: "#D7D7D7",
        },
        fontFamily: {
            poppins: ["Poppins"],
        },
    },

    plugins: [
        require("tailwindcss-plugins/pagination"),
        require("flowbite/plugin"),
    ],
};
