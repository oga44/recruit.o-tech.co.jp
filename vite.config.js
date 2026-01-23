import path from "path";
import fs from "fs";
import { defineConfig } from "vite";
import VitePluginBrowserSync from "vite-plugin-browser-sync";
import { viteStaticCopy } from "vite-plugin-static-copy";
import { liveReload } from "vite-plugin-live-reload";
import sassGlobImports from "vite-plugin-sass-glob-import";
import tailwindcss from "tailwindcss";
import react from "@vitejs/plugin-react-swc";

const srcDirectoryContents = fs.readdirSync(path.resolve(__dirname, "resources"));
const nonAssetsContents = srcDirectoryContents.filter((item) => item !== "assets");

export default defineConfig({
	plugins: [
		liveReload("./**/*.php"),
		viteStaticCopy({
			// assetsフォルダ以外のファイルとディレクトリをコピー
			targets: nonAssetsContents.map((item) => ({
				src: `resources/${item}`,
				dest: "",
			})),
		}),
		viteStaticCopy({
			targets: [
				{
					src: path.resolve(__dirname + `/resources/assets/static/*`),
					dest: "assets/static",
				},
				{
					src: path.resolve(__dirname + `/resources/assets/svg/*`),
					dest: "assets/svg",
				},
			],
		}),
		sassGlobImports(),
		VitePluginBrowserSync({
			dev: {
				bs: {
					port: 3030,
					proxy: "localhost:10099",
					ui: {
						port: 8080,
					},
				},
			},
		}),
		react(),
	],
	root: "",
	build: {
		assetsInlineLimit: 0,
		outDir: path.resolve(__dirname, "./dist"),
		emptyOutDir: true,
		target: "es2018",
		rollupOptions: {
			input: {
				app: path.resolve(__dirname + `/resources/assets/app.js`),
				"front-page": path.resolve(__dirname + `/resources/assets/front-page.js`),
			},
			output: {
				entryFileNames: `assets/js/[name].js`,
				chunkFileNames: `assets/js/[name].js`,
				assetFileNames: ({ name }) => {
					if (/\.(gif|jpeg|jpg|png|svg|webp)$/.test(name ?? "")) {
						return "assets/images/[name].[ext]";
					}
					if (/\.css$/.test(name ?? "")) {
						return "assets/css/[name].[ext]";
					}
					if (/\.js$/.test(name ?? "")) {
						return "assets/js/[name].[ext]";
					}
					return "assets/[name].[ext]";
				},
			},
			external: ["sharp"],
		},
		cssMinify: "lightningcss",
	},
	css: {
		postcss: {
			plugins: [tailwindcss()],
		},
		preprocessorOptions: {
			scss: {
				additionalData: `$base-dir: ${process.env.NODE_ENV === "development" ? "'http://localhost:3000/resources/'" : "'https://www.o-tec.co.jp/recruit/cms-admin/wp-content/themes/o-tech/'"};`,
			},
		},
	},
	server: {
		host: true,
		cors: true,
		strictPort: true,
		port: 3000,
		https: false,
		hmr: {
			host: "localhost",
		},
	},
});
