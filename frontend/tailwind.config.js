/** @type {import('tailwindcss').Config} */

module.exports = {
	content: [
		'./*.php', // wszystkie PHP w głównym folderze
		'./src/**/*.{js,ts}', // TS/JS w src
		'./src/css/**/*.css', // CSS w src
	],
	theme: {
		extend: {},
	},
	plugins: [require('@tailwindcss/forms')],
};
