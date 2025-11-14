import { defineConfig } from 'vite';
import liveReload from 'vite-plugin-live-reload';

export default defineConfig({
	plugins: [
		liveReload(['*.php', 'pages/**/*.php']), // obserwuj wszystkie PHP w katalogu frontend
	],
	server: {
		host: '0.0.0.0', // nasłuch na wszystkich interfejsach
		port: 5173, // port dev servera
		strictPort: true,
		cors: true,
		hmr: {
			host: 'localhost', // IP lub nazwa hosta, pod którym odwiedzasz PHP w przeglądarce
			protocol: 'ws',
		},
		watch: {
			usePolling: true,
		},
	},
	build: {
		outDir: 'dist',
		emptyOutDir: true,
		rollupOptions: {
			input: {
				main: 'src/main.ts', // TS
				style: 'src/input.css', // Tailwind CSS
			},
			output: {
				entryFileNames: `assets/[name].js`,
				chunkFileNames: `assets/[name].js`,
				assetFileNames: `assets/[name][extname]`,
			},
		},
	},
});
