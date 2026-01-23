import sharp from "sharp";
import { globSync } from "glob";
import path from "path";
import fse from "fs-extra";

const srcDir = "resources/assets/images";
const distDir = "dist/assets/images";

const sharpOptions = {
	effort: 0,
	quality: 60,
};

(async () => {
	fse.emptyDirSync(distDir);

	const images = globSync(`${srcDir}/**/*`);

	for (let image of images) {
		const srcPath = path.dirname(image);
		const distPath = srcPath.replace("resources", "dist");

		fse.ensureDirSync(distPath);

		const parse = path.parse(image);
		const name = parse.name;
		const ext = parse.ext;

		if (ext === ".jpg" || ext === ".jpeg" || ext === ".png") {
			const webpFile = path.join(distPath, `${name}.webp`);
			const avifFile = path.join(distPath, `${name}.avif`);

			await sharp(image).webp(sharpOptions).toFile(webpFile);

			await sharp(image).avif(sharpOptions).toFile(avifFile);
		}

		fse.copySync(image, path.join(distPath, parse.base));
	}
})();
