/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./app/public/cms/wp-content/themes/o-tech/**/*.{html,js,php,ts,jsx,tsx}", "./resources/**/*.{html,js,php,pug,ts,jsx,tsx}"],
	theme: {
		extend: {
			colors: {
				black: "#222",
				gray: "$444",
				blue: "#005bac;",
				"blue-light": "#dbf5ff",
				red: "#f26b49",
			},
		},
	},
	variants: {
		extend: {},
	},
	plugins: [],
};
