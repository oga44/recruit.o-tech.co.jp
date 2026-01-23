<?php
	$hd = $args["hd"] ?? "";
	$img = $args["img"] ?? "";
	$desc = $args["desc"] ?? "";
?>

<div class="p-tech__item js-accordion color-blue round">
	<div class="p-tech__item__head js-accordion-btn anm-hover">
		<?php get_template_part(TYPO, null, [
			"text" => $hd,
			"font" => "yugo",
			"weight" => "bold",
			"size" => "fs-24",
			"variable" => "leading-[1.35]"
		]); ?>
		<?php get_template_part(ICON_TOGGLE); ?>
	</div>
	<div class="p-tech__item__body js-accordion-target">
		<div class="p-tech__item__body__inner js-accordion-target-inner js-accordion-pb-40">
			<?php get_template_part(PICTURE, null, [
				"path" => $img,
				"alt" => "",
				"type" => "round-10"
			]); ?>
			<?php get_template_part(TYPO, null, [
				"text" => $desc,
				"variable" => "leading-[1.75]",
			]); ?>
		</div>
	</div>
</div>