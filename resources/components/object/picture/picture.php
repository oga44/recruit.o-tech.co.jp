<?php
	$path = $args["path"] ?? "";
	$hd = $args["hd"] ?? "";
	$tab = $args["tab"] ?? "";
	$sp = $args["sp"] ?? "";
	$alt = !empty($args["alt"]) ? $args["alt"] : "";
	$lazy = $args["lazy"] ?? true;
	$ext = $args["ext"] ?? "";
	$ext = strstr($path, ".svg") ? "svg" : $ext;

	$type = !empty($args["type"]) ? "o-pic--".$args["type"] : "";

	// scale
	$hover = !empty($args["hover"]) ? "anm-".$args["hover"] : "";
	$fit = !empty($args["fit"]) ? $args["fit"] : "cover";

	$variable = $args["variable"] ?? "";
	$img_variable = $args["img_variable"] ?? "";
?>

<picture class="o-pic <?= $type ?> <?= $hover ?> <?= $variable ?>">
	<?php if ($ext !== "svg" && !strstr($path, "/uploads/") && IS_TYPE === "production"): ?>
	<?php if(!empty($hd)): ?>
	<source media="(max-width: <?= BP_HD ?>px)" srcset="<?= vite_src_images($hd, "avif") ?>" type="image/avif">
	<source media="(max-width: <?= BP_HD ?>px)" srcset="<?= vite_src_images($hd, "webp") ?>" type="image/webp">
	<?php endif; ?>
	<?php if(!empty($tab)): ?>
	<source media="(max-width: <?= BP_TAB ?>px)" srcset="<?= vite_src_images($tab, "avif") ?>" type="image/avif">
	<source media="(max-width: <?= BP_TAB ?>px)" srcset="<?= vite_src_images($tab, "webp") ?>" type="image/webp">
	<?php endif; ?>
	<?php if(!empty($sp)): ?>
	<source media="(max-width: <?= BP_SP ?>px)" srcset="<?= vite_src_images($sp, "avif") ?>" type="image/avif">
	<source media="(max-width: <?= BP_SP ?>px)" srcset="<?= vite_src_images($sp, "webp") ?>" type="image/webp">
	<?php endif; ?>
	<source srcset="<?= vite_src_images($path, "avif") ?>" type="image/avif">
	<source srcset="<?= vite_src_images($path, "webp") ?>" type="image/webp">
	<?php endif; ?>

	<?php if($ext !== "svg"): ?>
	<?php if(!empty($hd)): ?>
	<source media="(max-width: <?= BP_HD ?>px)" srcset="<?= vite_src_images($hd) ?>">
	<?php endif; ?>
	<?php if(!empty($tab)): ?>
	<source media="(max-width: <?= BP_TAB ?>px)" srcset="<?= vite_src_images($tab) ?>">
	<?php endif; ?>
	<?php if(!empty($sp)): ?>
	<source media="(max-width: <?= BP_SP ?>px)" srcset="<?= vite_src_images($sp) ?>">
	<?php endif; ?>
	<img class="fit-<?= $fit ?> <?= $img_variable ?>" src="<?= vite_src_images($path) ?>" alt="<?= $alt ?>" loading="<?= $lazy ? "lazy" : "eager" ?>" decoding="async">

	<?php else: ?>

	<?php if(!empty($hd)): ?>
	<source media="(max-width: <?= BP_HD ?>px)" srcset="<?= vite_src_svg($hd) ?>">
	<?php endif; ?>
	<?php if(!empty($tab)): ?>
	<source media="(max-width: <?= BP_TAB ?>px)" srcset="<?= vite_src_svg($tab) ?>">
	<?php endif; ?>
	<?php if(!empty($sp)): ?>
	<source media="(max-width: <?= BP_SP ?>px)" srcset="<?= vite_src_svg($sp) ?>">
	<?php endif; ?>
	<img class="fit-<?= $fit ?> <?= $img_variable ?>" src="<?= vite_src_svg($path) ?>" alt="<?= $alt ?>" loading="<?= $lazy ? "lazy" : "eager" ?>" decoding="async">
	<?php endif; ?>
</picture>
