<?php
	$icon = $args["icon"] ?? "";
	$lead = $args["lead"] ?? "";
	$hd = $args["hd"] ?? "";
	$desc = $args["desc"] ?? "";
?>

<div class="p-tech__info">
	<div class="p-tech__info__icon">
		<img src="<?= URL_SVG ?>technology-icon-<?= $icon ?>.svg" alt="">
	</div>
	<div class="p-tech__info__text grid grid-cols-1">
		<?php get_template_part(TYPO, null, [
			"text" => $lead,
			"font" => "yugo",
			"weight" => "bold",
			"size" => "fs-14",
			"color" => "gray"
		]); ?>
		<?php get_template_part(TYPO, null, [
			"component" => "h3",
			"class_change" => "h4",
			"text" => $hd,
		]); ?>
		<div class="mt-[8px] md:mt-[16px]">
			<?php get_template_part(TYPO, null, [
				"text" => $desc,
				"weight" => "medium",
			]); ?>
		</div>
	</div>
</div>