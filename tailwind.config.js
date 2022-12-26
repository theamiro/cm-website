/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./**/*.php"],
	theme: {
		extend: {
			colors: {
				primary: "#da373d",
				charcoal: {
					500: "#4B6874",
					800: "#101E23",
					900: "#264653",
				},
				black: "#161616",
				seashell: "#F3EAE5",
				"persian-green": "#2A9D8F",
				"earth-yellow": "#CB9D52",
				silver: "#C0C1C1",
				transparent: "transparent",
			},
			fontFamily: {
				sans: ["Inder", "sans-serif"],
				serif: ["Judson", "serif"],
				alternate: ["Work Sans", "sans-serif"],
			},
		},
	},
	plugins: [],
}
