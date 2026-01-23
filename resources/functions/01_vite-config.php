<?php

/**
 * ローカル環境ではVITEの開発サーバーを参照して、本番環境ではビルドしたファイルを参照する
 */

/**
 * @return ローカル環境or本番環境のJSのパスを返す
 */
function vite_src_js($name)
{
	if (IS_TYPE === "local") {
		// develop mode
		return VITE_SERVER . "/resources/assets/" . $name;
	} elseif (IS_TYPE === "production") {
		// production mode
		return URL_JS . $name . "?ver=" . date("His");
	}
}

/**
 * @return ローカル環境or本番環境のCSSのパスを返す
 */
function vite_src_css($name)
{
	if (IS_TYPE === "local") {
		// develop mode
		return VITE_SERVER . "/resources/assets/css/" . $name;
	} elseif (IS_TYPE === "production") {
		// production mode
		// .scssを.cssに置換
		$name = str_replace(".scss", ".css", $name);
		return URL_CSS . $name . "?ver=" . date("His");
	}
}

/**
 * @return ローカル環境or本番環境のSTATICのパスを返す
 */
function vite_src_static($name)
{
	if (IS_TYPE === "local") {
		// develop mode
		return VITE_SERVER . "/resources/assets/static/" . $name;
	} elseif (IS_TYPE === "production") {
		// production mode
		return URL_STATIC . $name;
	}
}

/**
 * @return ローカル環境or本番環境のIMAGESのパスを返す
 */
function vite_src_images($name, $extension = "")
{
	if (IS_TYPE === "local") {
		// develop mode
		if (!strstr($name, "/uploads/")) {
			$path = VITE_SERVER . "/resources/assets/images/";
		} else {
			$path = "";
		}
		return $path . $name;
	} elseif (IS_TYPE === "production") {
		// production mode
		if ($extension === "avif") {
			$name = preg_replace("/\.(jpg|jpeg|png)/", ".avif", $name);
		} elseif ($extension === "webp") {
			$name = preg_replace("/\.(jpg|jpeg|png)/", ".webp", $name);
		}

		if (!strstr($name, "/uploads/")) {
			$path = URL_IMAGES;
		} else {
			$path = "";
		}
		return $path . $name;
	}
}

function vite_src_svg($name)
{
	if (IS_TYPE === "local") {
		// develop mode
		if (!strstr($name, "/uploads/")) {
			$path = VITE_SERVER . "/resources/assets/svg/";
		} else {
			$path = "";
		}
		return $path . $name;
	} elseif (IS_TYPE === "production") {
		// production mode
		if (!strstr($name, "/uploads/")) {
			$path = URL_SVG;
		} else {
			$path = "";
		}
		return $path . $name;
	}
}

function vite_src_movie($name)
{
	if (IS_TYPE === "local") {
		// develop mode
		return VITE_SERVER . "/resources/assets/movie/" . $name;
	} elseif (IS_TYPE === "production") {
		// production mode
		return URL_MOVIE . $name;
	}
}
