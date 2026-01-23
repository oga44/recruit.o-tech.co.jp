<?php
	$img = $args["img"] ?? [];
	$img_path = $img["path"] ?? "";
	$img_alt = $img["alt"] ?? "";
	$name = $args["name"] ?? "";
	$descs = $args["descs"] ?? [];
	$desc = !empty($args["desc"]) ? $args["desc"] : [];
?>

<div class="p-crosstalk__sec__item">
	<div class="p-crosstalk__sec__people">
		<?php get_template_part(PICTURE, null, [
			"path" => $img_path,
			"alt" => $img_alt,
			"variable" => "p-crosstalk__sec__people__pic",
			"type" => "pill",
		]); ?>
		<?php get_template_part(TYPO, null, [
			"text" => $name,
			"size" => "fs-20",
			"weight" => "bold",
		]); ?>
	</div>
	<?php if (empty($desc)): ?>
	<div class="p-crosstalk__sec__item__desc">
	<?php foreach ($descs as $desc) {
		get_template_part(TYPO, null, [
			"text" => $desc,
		]);
	} ?>
	</div>
	<?php else: ?>
	<?php get_template_part(TYPO, null, [
		"text" => $desc,
	]); ?>
	<?php endif; ?>
</div>