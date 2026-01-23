<?php
	$link = $args["link"] ? $args["link"] : "";
	$num = $args["num"] ? $args["num"] : "";
	$text = $args["text"] ? $args["text"] : "";
	$place = $args["place"] ? $args["place"] : "";
?>

<a href="<?= $link ?>" class="m-other-links__card-project anm-hover">
	<?php get_template_part(PICTURE, null, [
		"path" => "cms/projectstory-".$num."-mv.jpg",
		"alt" => "",
		"type" => "pill",
		"hover" => "scale",
		"variable" => "m-other-links__card-project__pic"
	]); ?>
	<div class="m-other-links__card-project__text">
		<div class="m-other-links__card-project__shoulder">
			<?php get_template_part(TYPO_EN, null, [
				"text" => "PROJECT STORY",
				"color" => "red",
				"variable" => "leading-none"
			]); ?>
			<?php get_template_part(TYPO_EN, null, [
				"text" => $num,
				"color" => "red",
				"variable" => "leading-none"
			]); ?>
		</div>
		<?php get_template_part(TYPO, null, [
			"component" => "h4",
			"class_change" => "h5",
			"text" => $text,
			"size" => "sm",
		]); ?>
		<?php get_template_part(TYPO, null, [
			"text" => $place,
			"font" => "yugo",
			"weight" => "bold",
			"size" => "fs-14"
		]); ?>
	</div>
</a>